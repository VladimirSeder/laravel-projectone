@extends('layout')

@section('title', 'Create project')

@section('content')
    <h1>Create project</h1>

    <form method="POST" action="/projects"> 
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" id="" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" placeholder="Project title" value="{{ old('title') }}"> 
        </div>

        <div>
            <textarea name="description" id="" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" placeholder="Project description" >{{ old('description') }}</textarea>
        </div>

        <div>
            <button type="submit">Create project</button>
        <div>
        @include('errors')
    </form>

@endsection