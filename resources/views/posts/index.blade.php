@extends('layouts.app')
@section('content')
<div class="container">
    <div class="titlebar">
        <a class="btn btn-1 btn-secondary" href="{{route('posts.create')}}">Add Post</a>
        <h1>Blog list</h1>
    </div>
    <!--message if Posts is posted successfully-->
    @if($message=Session::get('success'))
    <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p>{{$message}}</p>
    </div>
    @endif

    @if(count($posts)>0)
    @foreach ($posts as $post)
    <div class="row">
        <div class="col-12">
            <div class="row mb-3">
                <div class="">
                    <div class="card">
                
                        <img class="img-fluid card-img-top" style="max-width:50%" src="{{asset('images/'.$post->image)}}">
                        <div class="card-body">
                        <h4>{{$post->title}}</h4>
                         <p>{{$post->description}}</p>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
            
        </div>
    </div>
    @endforeach
    @else
    <p>No Post Found</p>
    @endif
</div>
@endsection