@extends('layouts.mainlayout')

@section('title', "Whittingtons's Wheels - View Project")

@section('content')

    <h1>{{$project->title}}</h1>

    <h2>{{$project->description}}</h2>

    <form method="GET" action="/projects/{{$project->id}}/edit" style="margin-bottom: 48px">
        <div class="field">

            <div class="control">
                <button type="submit" class="button is-link">Edit Project</button>
            </div>

        </div>
    </form>

    @if ($project->tasks->count())
        <div style="margin-bottom: 24px">
            @foreach($project->tasks as $task)
                <div>
                    <form method="POST" action="/tasks/{{$task->id}}">

                        @method('PATCH')
                        @csrf


                        <label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">
                            <input type="checkbox" name="completed"
                                   onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                            {{$task->description}}
                        </label>
                    </form>


                </div>
            @endforeach
        </div>
    @endif

    <form method="POST" action="/projects/{{$project->id}}/tasks" style="margin-bottom: 48px">
        @csrf
        <div class="field">
            <label class="label" for="description">New Task</label>

            <div class="control">
                <input type="text" class="input" name="description" placeholder="New Task">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Add Task</button>
            </div>
        </div>
    </form>

    @include ('include.errors')

@endsection
