@extends('templates.index')


@section('title')
    Home
@stop


@section('content')
    @include('recipes._random', [
        'recipe' => \App\Models\Recipe::inRandomOrder()->first(),
    ])
    @include('recipes._recents', [
        'recipes' => \App\Models\Recipe::orderBy('created_at', 'desc')->take(3)->get(),
    ])
    @include('users._random', [
        'user' => \App\Models\User::inRandomOrder()->first(),
    ])
@stop
