@extends('layouts.layout')

@section('title')
Edit Article
@endsection

@section('content')
<div class="outer-container">
    <div class="container bg-white article-form-container">
        <div class="head text-center">
            <h1>Edit Article</h1>
        </div>
        <div class="form-container">
            <form action="{{route('articles.update', $article->id)}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group custom-file">
                    <input type="file" class="custom-file-input" id="photo" name="photo">
                    <label class="custom-file-label" for="photo">Choose article image if you want to change</label>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" required value="{{$article->title}}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description" required value="{{$article->description}}">
                </div>
                <div class="form-group">
                    <label for="body">Article Body</label>
                    <textarea class="form-control" id="body" name="body" rows="5" required>{{$article->body}}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn">Edit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
