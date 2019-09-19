@extends('layout')

@section('content')
    <h1 class="title">Projects</h1>
    <ul style="list-style-type:square;">
        @foreach($projects as $project)
        <li><a href="/projects/{{$project->id}}">{{$project->title}}</a></li>
        @endforeach
    </ul>
@endsection('content')