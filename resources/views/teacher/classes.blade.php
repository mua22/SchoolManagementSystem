@extends('layouts.schoolmaster')

@section('content')
   <h1>My Courses</h1>

    <ul>
        @foreach($courses as $course)
            <li><a href="/home/classes/{{$course->id}}">{{$course->name}}</a></li>
        @endforeach
    </ul>
@endsection