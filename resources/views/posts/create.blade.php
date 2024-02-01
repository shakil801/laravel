@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Add Post</h1>
    <section class="mt-3">
        <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
            @csrf
            <!--error message when data is not inputted-->
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="p-3">
                <label>Title</label>
                <input type="text" class="form-control" name="title">
                <label>Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="8"></textarea>
                <label>Add Image</label>
                <img>
                <input type="file" name="image" class="form-control">
            </div>
            <button class="btn btn-1 m-3">Save</button>
        </form>
    </section>
</div>

@endsection