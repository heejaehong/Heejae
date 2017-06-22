<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\Http\Libraries\AjaxResponse;
use JWTAuth;

class TodoController extends Controller
{
    private function auth()
    {
       return JWTAuth::parseToken()->authenticate();
    }

    public function show($id)
    {
        $user = $this->auth();
        $user or die('invalided user');

        $rsp = new AjaxResponse();

        $todo = Todo::findOrFail($id);

        $rsp->success = true;
        $rsp->data = $todo;

        return $rsp->toArray();

    }

    public function update(Request $request, $id)
    {
        $user = $this->auth();
        $user or die('invalided user');

        $rsp = new AjaxResponse();

        $todo = Todo::findOrFail($id);

        $todo -> title = $request->title;
        $todo -> date = $request->date;
        $todo -> type = $request->type;

        $todo->save();

        $rsp->success = true;
        $rsp->data = $todo;

        return $rsp->toArray();


    }

    public function destroy($id)
    {
        $user = $this->auth();
        $user or die('invalided user');

        $rsp = new AjaxResponse();

        $todo = Todo::findOrFail($id);

        $todo->delete();

        $rsp->success = true;
        $rsp->data = $id;

        return $rsp->toArray();

    }

    public function index(){

        $rsp = new AjaxResponse();

        $user = $this->auth();
        $todoList = Todo::where('user_id', '=', $user->id)->get();

        $rsp->success = true;
        $rsp->data = $todoList;

        return $rsp->toArray();


    }

    public function create(Request $request){

        $user = $this->auth();
        $user or die('invalided user');

        $rsp = new AjaxResponse();

        $todo = new Todo();
        $todo->user()->associate($user->id);
        $todo -> title = $request->title;
        $todo -> date = $request->date;
        $todo -> type = $request->type;

        $todo->save();

        $rsp->success = true;
        $rsp->data = $todo;

        return $rsp->toArray();


    }



}
