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
                <div class="form-group custom-file my-2">
                    <input type="file" class="custom-file-input @error('photo') is-invalid @enderror" id="photo"
                        name="photo">
                    <label class="custom-file-label" for="photo">Choose article image if you want to change</label>
                    @error('photo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                        placeholder="Title" required value="{{$article->title}}">
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                        name="description" placeholder="Description" required value="{{$article->description}}">
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="body">Article Body</label>
                    <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" rows="5"
                        required>{!! ($article->body)!!}</textarea>
                    @error('body')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
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
