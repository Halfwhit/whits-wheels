@extends('layouts.mainlayout')

@section('title', "Whittingtons's Wheels - Create Project")

@section('content')

    <h1>Create a New Project</h1>

    <form method="POST" action="/projects">

        {{csrf_field()}}

        <div class="field" style="margin-bottom: 24px">

            <label class="label" for="title">Title</label>

            <div class="control">

                <input type="text" name="title" placeholder="Summary" required value="{{old('title')}}">

            </div>

        </div>

        <div class="field" style="margin-bottom: 24px">

            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea name="description" placeholder="Detailed description" required
                      value="{{old('description')}}"></textarea>
            </div>
        </div>

        <div class="field">

            <div class="control">
                <button type="submit" class="button is-link">Create Request</button>
        </div>

        @include('include.errors')

    </form>

@endsection
