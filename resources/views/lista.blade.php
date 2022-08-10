@extends('main')
@section('title','lista de cursos')
@section ('content')
<table>
    <tr><th>#</th><th>nombre</th><th>foto</th></tr>
    @foreach($cursos as $course)
    <tr>
<td>{{$course->id}}</td>
<td>{{$course->name}}</td>
<td>{{$course->photo}}</td>

    </tr>
    @endforeach
</table>
@endsection