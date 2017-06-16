<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodolistController extends Controller
{
    public function getList(Request $request){




    }

    public function createList(Request $request){

        $todo = new Todo();

        $todo -> project_id = $request->project_id;
        $todo -> title = $request->title;
        $todo -> description = $request->description;
        $todo -> due_date = $request->due_date;
        $todo -> status = $request->status;

        $todo->save();

        return response()->json(compact('todo'));

    }
}
