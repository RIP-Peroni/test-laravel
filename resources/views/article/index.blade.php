@extends('layouts.app')

@if (Session::has('statusCreated'))
    {{ Session::get('statusCreated') }}
@endif

@if (Session::has('statusEdited'))
    {{ Session::get('statusEdited') }}
@endif

@section('content')
    <h1>Список статей</h1>

    @foreach ($articles as $article)
        <h2><a href="articles/{{ $article->id }}">{{$article->name}}</a></h2>
        <div>{{Str::limit($article->body, 200)}}</div>
        <br>
        <a href="{{ route('articles.edit', $article) }}">Редактировать статью</a>
        <br>
        <a href="{{ route('articles.destroy', $article) }}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить статью</a>
    @endforeach

@endsection