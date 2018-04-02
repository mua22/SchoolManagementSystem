@extends('layouts.schoolmaster')

@section('content')
   <h1>{{$course->name}}: Add Attendance</h1>
   <a href="/home/classes/attendance/{{$course->id}}">Add Attendance</a>
   <form action="/home/classes/attendance/save/{{$course->id}}" method="post" style="display: block">
       @csrf
   <table class="table">
        <thead>
            <tr>
                <th><a href="">Select All</a></th>
                <th>Roll No</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($course->students as $student)
                <tr>
                    <td><input type="checkBox" name="student[{{$student->id}}]" value="{{$student->id}}"></td>
                    <td>{{$student->roll_no}}</td>
                    <td>{{$student->name}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
   <input type="submit" class="btn btn-info">
   </form>
@endsection

