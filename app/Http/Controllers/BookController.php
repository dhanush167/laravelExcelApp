<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use Excel;
use File;
use App\Book;
use App\Author;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addFile()
    {
        return view('add-file');
    }

    public function showBook()
    {
        $books = DB::table('books')->paginate(10);

        return view('show-book', compact('books'));
    }

    public function showAuthor()
    {
        $authors = DB::table('authors')->paginate(10);

        return view('show-author', compact('authors'));
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx'
        ], [
            'file.required' => "Enter a file to upload!",
        ]);

        if ($request->hasFile('file')) {
            $extension = File::extension($request->file->getClientOriginalName());

            if ($extension == "xlsx" || $extension == "xls") {

                $path = $request->file->getRealPath();

                //  Load on file excel
                //$data = Excel::load($path, function($reader) {
                //})->get();

                // Load multi file excel
                $data1 = Excel::selectSheets('Sheet1')->load($path, function($reader) {
                    Book::insert($reader->toArray());
                })->get();

                $data2 = Excel::selectSheets('Sheet2')->load($path, function($reader) {
                    Author::insert($reader->toArray());
                })->get();

                return back()->with('success', 'File uploaded successfully!');
            }

            return back()->with('error', 'Error: invalid uploaded file! Enter the xlsx or xls files');
        }
    }

    public function export($type)
    {
        $book = Book::get()->toArray();
        $author = Author::get()->toArray();

        return \Excel::create('document', function($excel) use ($book, $author) {
            $excel->sheet('docsheet1', function($sheet) use ($book) {
                $sheet->fromArray($book);
            });

            $excel->sheet('docsheet2', function($sheet) use ($author) {
                $sheet->fromArray($author);
            });

        })->download($type);

    }
}
