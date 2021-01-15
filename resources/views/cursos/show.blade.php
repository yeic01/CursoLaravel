@extends('layaouts.platilla')

@section('title', 'Curso ' . $curso->name)


@section('content')
    <h1>Bienvendo al Curso de: {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">regresar</a><br>
    <a href="{{route('cursos.edit', $curso)}}">Edit Courses</a>

    <p>Categoria <strong>{{$curso->category}}</strong></p>
    <p>{{$curso->description}}</p>
@endsection