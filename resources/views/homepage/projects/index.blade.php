@extends('layouts.mainlayout')

@section('title', "Whittingtons's Wheels - Projects")

@section('content')

    <h1>Wishlist Items</h1>

    @foreach ($projects as $project)

        <a href="/projects/{{$project->id}}">
            <li>{{$project->title}}: {{$project->description}}</li>
        </a>

    @endforeach

    <form method="get" action="/projects/create" style="margin-top: 24px">
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">New Item</button>
            </div>
        </div>
    </form>

@endsection
