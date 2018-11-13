@extends('layout')

@section('title', 'Edit project')

@section('content')
    <h1>Edit project</h1>

    <form method="POST" action="/projects/{{ $project->id }}"> 
        @method('PATCH')
        @csrf
        <div>
            <input type="text" name="title" id="" placeholder="Project title" value="{{ $project->title }}">
        </div>

        <div>
            <textarea name="description" id="" cols="30" rows="10" placeholder="Project description">{{ $project->description }}</textarea>
        </div>

        <div>
            <button type="submit">Update project</button>
        <div>
    </form>

    <form method="POST" action="/projects/{{ $project->id }}"> 
        @method('DELETE')
        @csrf

        <div>
            <button type="submit">Delete project</button>
        <div>
    </form>

@endsection