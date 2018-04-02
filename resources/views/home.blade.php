@extends('layouts.schoolmaster')

@section('content')
Hello {{\Illuminate\Support\Facades\Auth::user()->name}}
@endsection
