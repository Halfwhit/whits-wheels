@extends('layouts.mainlayout')

@section('title', "Whittingtons's Wheels - Projects")

@section('content')

    <h1>Projects</h1>

    @foreach ($projects as $project)

        <a href="/projects/{{$project->id}}">
            <li>{{$project->title}}: {{$project->description}}</li>
        </a>

    @endforeach

@endsection
