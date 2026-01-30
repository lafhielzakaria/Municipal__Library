<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\category;

use function Ramsey\Uuid\v1;

class bookController extends Controller
{
    //
    public function createBook (){
        echo "create book";
        $categories = category::all ();
        return view('book.create' , compact ('categories'));
    }
      public function geteditBookPage ($id){
     $bookselected = Book::find($id); 
        return view('book.edit', compact('bookselected'));
    }
       public function editBook (Request $request,$id){
       $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
        ]);
        $bookselected = Book::find($id);
        $bookselected->update ($request->all()); 
        return redirect()->route('index')
            ->with('success', 'book updated successfully.');
    }
      public function destroy($id)
    {
        $bookselected = Book::find($id);
        $bookselected->delete();
        return redirect()->route("index")->with('deleted with successfully');
    } 
    public function index()
    {
        $books = Book::all();

        return view('book.index', compact('books'));
    }
    public function store(Request $request)
    {
        $selectedTeam = $request->get('category_id');
        // var_dump ($selectedTeam);
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
        ]);
        Book::create($request->all());
        return redirect()->route('index')
            ->with('success', 'book created successfully.');
    }
}
