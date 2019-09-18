@extends('layout')
@section('title')
edit
@endsection

@section('content')
    <h1 class="title">Edite Project</h1>
    <form action="/projects/{{$project->id}}" method="post">
    {{method_field('PATCH')}}
    {{csrf_field()}}
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" class="input" name="title" value="{{$project->title}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea name="description" class="textarea">{{$project->description}}</textarea>
            </div>
        </div>

        <div class="field">
            <button type="submit" class="button is-link">Update project</button>
        </div>
    </form>

@endsection

