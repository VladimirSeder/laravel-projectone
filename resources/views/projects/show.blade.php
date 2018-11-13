@extends('layout')

@section('title', 'Project')

@section('content')
    <h1>{{ $project->title }}</h1>

    <div>{{ $project->description }}</div>

    @if ($project->tasks->count())
        <div>
            @foreach ($project->tasks as $task)

                <div>

                    <form method="POST" action="/tasks/{{ $task->id }}">

                        @method('PATCH')

                        @csrf

                        <label for="completed" class="{{ $task->completed ? 'is-complete' : '' }}">
                    
                        <input type="checkbox" name="completed" id="" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>

                        {{ $task->description }}

                        </label>
                    
                    </form>
                
                </div>

            @endforeach
        </div>
    @endif

    <form method="POST" action="/projects/{{ $project->id }}/tasks">

        @csrf

        <label for="description">New task</label>
    
        <input type="text" name="description" id="">

        <button type="submit">Add task</button>

        @include('errors')
    
    </form>

    <p><a href="/projects/{{ $project->id }}/edit">Edit</a></p>
@endsection