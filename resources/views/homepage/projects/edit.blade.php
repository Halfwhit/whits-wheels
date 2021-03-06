@extends('layouts.mainlayout')

@section('title', "Whittingtons's Wheels - Edit Project")

@section('content')

    <h1>Edit Project</h1>

    <form method="post" action="/projects/{{$project->id}}">

        {{ method_field('PATCH') }}

        {{csrf_field()}}

        <div class="field" style="margin-bottom: 24px">

            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{$project->title}}">
            </div>

        </div>

        <div class="field" style="margin-bottom: 24px">

            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea name="description" class="textarea" >{{$project->description}}</textarea>
            </div>
        </div>

        <div class="field">

            <div class="control">
                <button type="submit" class="button is-link">Update Request</button>
            </div>

        </div>

    </form>

    <form method="post" action="/projects/{{$project->id}}" style="margin-bottom: 48px">

        {{method_field('DELETE')}}

        {{csrf_field()}}

        <div class="field">
            <button type="submit" class="button is-link">Delete Request</button>
        </div>
    </form>

    @include('include.errors')

@endsection
