@extends('layouts.app')
@section('title', 'People')
@section('content')
<p>People at Swansea Uni</p>
<a href="{{route('people.create')}}">Create Person</a>
<ul>
    @foreach($people as $person)
    <li><a href="{{route('people.show',['person'=>$person])}}">{{$person->first_name}} {{$person->surname}}</a></li>
    @endforeach
</ul>

@endsection