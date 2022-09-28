@extends('layouts.layout')

@section('title')
{{$article->title}}
@endsection

@section('content')
<div class="outer-container">
    <div class="container bg-white article-form-container a-container">
        <div class="head text-center">
            <h2>{{$article->title}}</h2>
        </div>
        <div class="article-container">
            <div class="row article-info lead">
                <div class="col-md-3">
                    <img src="{{URL::asset('images/articles/' . $article->photo)}}" class="rounded" alt="article image">
                </div>
                <div class="col-md-7">
                    <div class="article-name">{{$article->title}}</div>
                    <div class="author">By: <span>{{$article->user->first_name}} {{$article->user->last_name}}</span></div>
                    <div class="author">On: <span>{{date('d-m-Y', strtotime($article->created_at))}}</span></div>
                    <div class="description">{{$article->description}}</div>
                </div>
                @can('update', $article)
                <div class="col-md-2 actions">
                    <a href="{{route('articles.edit', $article->id)}}" class="btn btn-primary"><i
                            class="far fa-edit"></i></a>
                    <form action="{{route('articles.destroy', $article->id)}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>
                </div>
                @endcan
            </div>
            <div class="row article-content">
                <p class="lead">{!! nl2br($article->body) !!}</p>
            </div>
        </div>

    </div>
</div>
@endsection
