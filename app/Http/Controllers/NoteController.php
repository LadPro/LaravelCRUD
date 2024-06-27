<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\NoteRequest;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.index',compact('notes'));
        
    }
    
    public function create()
    {
        return view('notes.create');
    }

    public function store(NoteRequest $request)
    {


        Note::create($request->all());
        
        //     'title' => $request->title,
        //     'description' => $request->description
        // ]);

        // $note = new Note;
        // $note->title = $request->title;
        // $note->description = $request->description;
        // $note->save();

        return redirect()->route('index')->with('success', 'Note created successfully.');
    }

    public function edit(Note $note): View
    {
        // $myNote = Note::find($note->id); #asi es normalmente pero si colocamos en la funcion (Note $note) le indicamos que lo que queremos recibir es un objeto
        return view('notes.edit',compact('note'));
    }

    public function update(NoteRequest $request,Note $note): RedirectResponse
    {
        $note->update($request->all());
        return redirect()->route('index')->with('success', 'Note updated successfully.');
    }

    public function show(Note $note): View
    {
        return view('notes.show', compact('note'));
    }

    public function destroy(Note $note): RedirectResponse
    {
        $note->delete();
        return redirect()->route('index')->with('danger', 'Note deleted successfully.');
    }
}