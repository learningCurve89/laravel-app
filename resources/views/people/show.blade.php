@extends('layouts.app')
@section('title','Person Details')
@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Address</th>
            <th scope="col">Date Of Birth</th>
            <th scope="col">Role</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">{{$person->id}}</th>
            <td>{{$person->title ?? 'Unknown'}}</td>
            <td>{{$person->first_name}}</td>
            <td>{{$person->surname}}</td>
            <td>{{$person->address ?? 'Unknown'}}</td>
            <td>{{$person->date_of_birth ?? 'Unknown'}}</td>
            <td>{{$person->role ?? 'Unknown'}}</td>

        </tr>
    </tbody>
</table>

<form method="POST" action="{{route('people.destroy',['person'=>$person])}}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>

    <a href="{{route('people.index')}}">Back</a>
</form>
@endsection