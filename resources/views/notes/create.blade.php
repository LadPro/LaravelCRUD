@extends('layouts.app')

@section('content')
    <a href="{{route('index')}}">Volver</a>
    <form method="POST" action="{{route('store')}}">
        @csrf 
        {{-- para proteger la informacion de la base de datos es el csrf--}}
        <label>Title</label>
        <input type="text" name="title">
        @error('title')
            <p style="color:red;">{{$message}}</p>
    
        @enderror

        <label>Description</label>
        <input type="text" name="description">
        @error('description')
            <p style="color:red;">{{$message}}</p>
    
        @enderror
        <input type="submit" value="create" name="" id="">
    </form>

@endsection