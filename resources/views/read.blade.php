@extends('layouts.layout')
@section('content')
<div class="container">
    <div class='row'>
        <div class='col col-sm-12 col-md-7'>
            <img id="con-img" src="/img/container-img.svg"/>
        </div>
        <div class='col col-sm-12 col-md-5' >
            <div class="card" id = 'head-card' style="width: 18rem;border:none;margin-top:20px;">
                
                <i class="fas fa-book" id='add-i'></i>
                <div class="card-body">
                    <div class="btn-con">
                    
                        <button class='create-btn' ><a href="/library/create">Add new book to database</a></button>
                    </div>
                </div>
                
            </div>
        </div>

    </div>

    <div class='row'>
        
        @for($i = 0; $i < count($data); $i++)
            <div class='col col-sm-12 col-md-4'>
            
            <div class="card shadow p-3 mb-3 bg-white rounded" style="width: 100%">
                
                <div class="card-body">
                    <div id="title-icon-con">

                    <h5 class="card-title">{{ $data[$i]['title']}}</h5>
                    <span>
                        <a href="/library/edit/{{$data[$i]['id']}}">
                            <i class="fas fa-pen" title='edit'></i>
                        </a>
                        <a href="/library/delete/{{$data[$i]['id']}}">
                            <i class="fas fa-trash" title='delete'></i>
                        </a>
                        
                        
                        
                    </span>
                    </div>
                    <p class="card-text"><strong>Genre</strong> : {{ $data[$i]['genre']}}</p>
                    <p class="card-text"><strong>Author</strong> : {{ $data[$i]['author']}}</p>
                </div>
            </div>
            </div>
        @endfor
    </div>
</div>
@endsection('content')