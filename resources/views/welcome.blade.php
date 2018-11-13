@extends('layout')

@section('title', 'Home')

@section('content')
    <h1>My first site</h1>

    <ul>
        @foreach($tasks as $task)

            <li>{{ $task }}</li>

        @endforeach
    </ul>

@endsection