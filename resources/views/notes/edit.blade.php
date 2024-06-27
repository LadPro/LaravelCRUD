@extends('Layouts.app')

@section('content')
    <a href="{{route('index')}}">Volver</a>
    <h1>Editar</h1>
    <form method="POST" action="{{route('update', $note->id)}}">
        @method('PUT')
        @csrf
        <label>Title</label>
        <input type="text" name="title" value="{{$note->title}}">
        @error('title')
            <p style="color:red;">{{$message}}</p>
            @enderror
            
            <label>Description</label>
            <input type="text" name="description" value="{{$note->description}}">
        @error('description')
            <p style="color:red;">{{$message}}</p>
        
        @enderror

        <input type="submit" value="Update" name="" id="">
    </form>
@endsection