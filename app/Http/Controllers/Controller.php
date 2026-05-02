<?php

namespace App\Http\Controllers;

abstract class Controller
public function store(Request $request)
{
    \App\Models\Task::create([
        'title' => $request->title,
        'description' => $request->description,
        'user_id' => auth()->id()
    ]);

    return redirect()->back();
}