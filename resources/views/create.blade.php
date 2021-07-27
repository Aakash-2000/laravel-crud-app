@extends('layouts.layout')
 
@section('content')
<div class='row h-100'>
    <div class='col col-sm-12 col-md-6 my-auto' id="log_form">
            <form action="/library" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Title of Book</label>
                    <input type="text" name='title'  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
                
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Genre</label>
                    <input type="text" name='genre' class="form-control" id="exampleInputPassword1" placeholder="Enter Genre">
                </div>
                <div class="form-group">
                    <label for="exampleCheck1">Author</label>
                    <input type="text" name='author' class="form-control" id="exampleCheck1" placeholder="Enter author">
                
                </div>
                <div class="btn-con">

                    <button type="submit" class="add-btn">Create</button>
                <div>
        </form>
    </div>
</div>



@endsection