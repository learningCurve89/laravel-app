@extends('layouts.app')
@section('title','Create Person')
@section('content')
<form method="POST" action="{{route('people.store')}}">
    @csrf
    <p>Title: <input type="text" name="title" value="{{old('title')}}"></p>></p>
    @error('title')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror
    <p>Name: <input type="text" name="first_name" value="{{old('first_name')}}"></p>></p>
    @error('first_name')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror
    <p>Surname: <input type="text" name="surname" value="{{old('surname')}}"></p>></p>
    @error('surname')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror
    <p>Address: <input type="text" name="address" value="{{old('address')}}"></p>></p>
    <input type="submit" value="Submit">
    <a href="{{route('people.index')}}">Cancel</a>
</form>
@endsection