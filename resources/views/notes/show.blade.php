@extends('Layouts.app')

@section('content')
    <a href="{{route('index')}}">Volver</a>

    <h1>Titulo: {{$note->title}}</h1>
    <h2>Descripcion: {{$note->description}}</h1>
    

    <a href="{{route('edit', $note->id)}}">Editar</a>
    <form method="POST" action="{{route('destroy', $note->id)}}">
        @csrf
        @method('DELETE')
        <input type="submit" value="borrar">
    </form>
@endsection