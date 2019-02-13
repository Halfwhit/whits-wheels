@extends('layouts.mainlayout')

@section('title', "Whittingtons's Wheels - View Project")

@section('content')

    <h1>{{$project->title}}</h1>

    <h2>{{$project->description}}</h2>

@endsection
