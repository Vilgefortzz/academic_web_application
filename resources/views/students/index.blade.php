@extends('layouts.main')

@section('header')

    <title>All students</title>

@stop

@section('content')

    @foreach($students as $student)
        <li>
            {{$student->album_number}}
            {{$student->first_name}}
        </li>
    @endforeach

@stop
