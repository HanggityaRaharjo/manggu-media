<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function store(Request $request)
    {
        if (!empty(Note::first()->get())) Note::first()->delete();
        Note::create(['message' => $request->message]);
        return back();
    }
}
