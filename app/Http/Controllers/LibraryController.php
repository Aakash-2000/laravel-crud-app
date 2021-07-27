<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    
    public function index(){
        $data = Library::get();
        return view('read',['data'=>$data]);
        
    }
    public function create(){
        return view('create');
    }
    public function add(){
        $book = new Library();
        $book->author = request('author');
        $book->title = request('title');
        $book->genre = request('genre');
    
        $book->save();
        return redirect('/library');

     
    }
    public function edit($id){
        $data = Library::findOrFail($id);
        return view('edit',['data'=>$data]);
    }
    public function editItem($id){
        $data = Library::findOrFail($id);
        $data->author = request('author');
        $data->title = request('title');
        $data->genre = request('genre');
        $data->save();
        return redirect('/library');
    }
    public function delete($id){
        $book = Library::findOrFail($id);
        $book->delete();
    
        
        return redirect('/library');

     
    }
}
