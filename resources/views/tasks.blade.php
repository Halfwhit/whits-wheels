@extends('layouts.mainlayout')

@section('title', "Whittingtons's Wheels - Tasks")

@section('content')

    <h1>Tasks</h1>

    <ul>

        @foreach($tasks as $task)

            <li>{{ $task }}</li>

        @endforeach

    </ul>

@endsection
