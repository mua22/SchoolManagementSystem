@extends('layouts.schoolmaster')

@section('content')
   <h1>{{$course->name}}: Course</h1>
   <a href="/home/classes/attendance/{{$course->id}}">Add Attendance</a>
    <table class="table">
        <thead>
            <tr>
                <th>Roll No</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($course->students as $student)
                <tr>
                    <td>{{$student->roll_no}}</td>
                    <td>{{$student->name}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection