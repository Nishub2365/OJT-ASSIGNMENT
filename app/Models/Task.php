<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title','description'];
    $tasks = Task::where('user_id', auth()->id())->get();
}
