@extends('layouts.layout')

@section('title')
Home
@endsection

@section('content')
<div class="outer-container">
    <div class="bg-white article-form-container home-container">
        <div class="home-article-container">
            @if (!empty($articles) && $articles->count() > 0)
            @foreach ($articles as $article)
            <div class="row home-article lead">
                <div class="col-md-3">
                    <img src="{{URL::asset('images/articles/' . $article->photo)}}" class="rounded" alt="article image">
                </div>
                <div class="col-md-7">
                    <div class="article-name">{{$article->title}}</div>
                    <div class="author">By: <span>{{$article->user->first_name}} {{$article->user->last_name}}</span></div>
                    <div class="author">On: <span>{{date('d-m-Y', strtotime($article->created_at))}}</span></div>
                    <div class="description">{{$article->description}}</div>
                    <div class="view-more"><a href="{{route('articles.show', $article->id)}}">View More</a></div>
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
            @endforeach
            <div class="d-flex justify-content-center mt-3">
                {!! $articles->links() !!}
            </div>
            @else
            <div class="alert alert-danger mx-3 my-3">No Articles Found</div>
            @endif
        </div>
    </div>
</div>
@endsection
