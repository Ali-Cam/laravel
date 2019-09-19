@extends('layout')
@section('title')
    Edit page
@endsection

@section('content')
    
    <h1 class="title">Edite Project</h1>
    <div class="box">
        <form action="/projects/{{$project->id}}" method="post" >
        @method('PATCH')
        @csrf
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
                <div class="control">
                    <button type="submit" class="button is-link">Update project</button>
                </div>
            </div>
        </form>

        <form action="/projects/{{$project->id}}" method="post" style="margin-top: 1em;">
            @method('DELETE')
            @csrf
            <div class="field">
                <div class="control">
                    <button class="button is-danger" type="submit">Delete project</button>
                </div>
            </div>
        </form> 
    </div>
    

    @endsection

