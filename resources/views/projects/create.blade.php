@extends('layout')

@section('title')
create
@endsection

@section('content')
    <h1 class='title'>Create a Projects</h1>

    <form action="/projects" method="post" style="margin-bottom:3em;">
        {{csrf_field()}}
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" class="input {{$errors->has('title')? 'is-danger':''}}" name="title" placeholder="title" value="{{old('title')}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea name="description" class="textarea {{$errors->has('title')? 'is-danger':''}}" placeholder='description'>{{old('description')}}</textarea>
            </div>
        </div>

        <div class="field">
            <button type="submit" class="button is-link">Create project</button>
        </div>
    </form>
    @if($errors->any())
    <div class="notification is-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
@endsection