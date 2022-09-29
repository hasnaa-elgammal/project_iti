@extends('layouts.layout')
@section('title')
Profile
@endsection
@section('content')
<div class="outer-container">
    <div class="container bg-white article-form-container a-container">
        <div class="head text-center">
            <h2 class="fw-bold">{{$user->first_name}} {{$user->last_name}}</h2>
        </div>
        <div class="article-container">
            <div class="row article-info lead">
                <div class="col">
                    <div class="author">Email: <span>{{$user->email}}</span></div>
                    <div class="author">Address: <span>{{$user->address}}</span></div>
                    <div class="author">Birth Date: <span>{{date('d-m-Y', strtotime($user->birth_date))}}</span></div>
                </div>
            </div>

            <div class="row article-content">
                <div class="head text-center">
                    <h3 class="fw-bold">Articles</h3>
                </div>
                @if (!empty($user->articles) && $user->articles->count() > 0)
                @foreach ($user->articles as $article)
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
                        <a href="{{route('articles.edit', $article->id)}}" class="btn btn-primary">
                            <i class="far fa-edit"></i></a>
                        <form action="{{route('articles.destroy', $article->id)}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </div>
                    @endcan

                </div>
                @endforeach
                @else
                <div class="alert alert-danger mx-3 my-3">No Articles Found</div>
                @endif
            </div>
        </div>

    </div>
</div>
@endsection
