@extends('layout')

@section('title')
    show page
@endsection

@section('content')

<div class="container">
    <h1 class="title">{{$project->title}}</h1>
    <div style="margin-bottom:2em;"><p>{{$project->description}}</p></div>
    <a href="/projects/{{$project->id}}/edit" class="button is-link">edit</a>
    @if($project->tasks->count())
    <div style="margin-top:1em;" class="box">
        @foreach($project->tasks as $task)
        <form action="/completed-task/{{$task->id}}" method="post">
            @if($task->completed)
            @method('delete')
            @endif
            @csrf
            <label for="completed" class="checkbox {{$task->completed?'is-checked':''}}">
                <input type="checkbox" name="completed" onChange="this.form.submit()" {{$task->completed?"checked":""}}>
                {{$task->body}}
            </label>
        </form>
        @endforeach
    </div>
    @endif

    <div class="box">
        <form action="/projects/{{$project->id}}/tasks" method='post'>
        @csrf
            <div class="field">
                <label for="body" class="label">Task</label>
                <div class="control">
                    <input type="text" class="input {{$errors->has('title')? 'is-danger':''}}" name="body" placeholder='task' value="{{old('body')}}" >
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-linked">Add task</button>
                </div>
            </div>
        </form>
    </div>
    @include('error')
</div>

@endsection