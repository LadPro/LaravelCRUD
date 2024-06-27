@extends('Layouts.app')


@section('content')
    <a href="{{ route('create') }}">Agregar nota</a>
    <h1>Notas</h1>
    @forelse ($notes as $note)
        <ul>
            <li>
                <a href="{{ route('show', $note->id) }}">{{ $note->title }}</a> 
                <a href="{{ route('edit', ['note' => $note->id]) }}">| EDIT</a> 
                <form method="POST" action="{{route('destroy', $note->id)}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="borrar">
                </form>
            </li>
        </ul>
    @empty
        <h1>No hay notas</h1>
    @endforelse
@endsection
