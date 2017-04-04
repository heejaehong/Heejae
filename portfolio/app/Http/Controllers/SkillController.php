<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\Http\Libraries\AjaxResponse;
use Validator;

class SkillController extends Controller
{

    public function Delete($id){
        $rsp = new AjaxResponse();
        $skill = Skill::findOrFail($id);


        $skill->delete();

        $list['skills'] = Skill::where('id', $skill->id)->get();
        $data['html'] = \View::make('admin.skill.index', array('skills' => $list['skills']))->render();

        $rsp->success = 1;
        $rsp->data = $data;
        return $rsp->toArray();
    }

    public function store(Request $request)
    {
        $roles = [
            'title' => 'required|max:255',
            'description' => 'required',
            'percent' => 'required'
        ];

        $validator = Validator::make($request->all(), $roles);

        if ($validator->fails()) {
            $rsp = new AjaxResponse();
            $list['errors'] = $validator->getMessageBag();
            $data['html'] = \View::make('admin.validation', array('errors' => $list['errors']))->render();
            $rsp->success = 0;
            $rsp->data = $data;
            return $rsp->toArray();
        }


        $rsp = new AjaxResponse();
        $skill = new Skill();

       // $skill->user()->associate($user->id);

        $skill->title = $request->title;
        $skill->description = $request->description;
        $skill->percent = $request->percent;

        $skill->save();

        $list['skills'] = Skill::where('id', $skill->id)->get();
        $data['html'] = \View::make('admin.skill.index', array('skills' => $list['skills']))->render();

        $rsp->success = 1;
        $rsp->data = $data;
        return $rsp->toArray();


    }

    public function create(){

        $rsp = new AjaxResponse();

        $data['html'] = \View::make('admin.skill.create')->render();

        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    public function update(Request $request, $id)
    {
        $roles = [
            'title' => 'required|max:255',
            'description' => 'required',
            'percent' => 'required'
        ];

        $validator = Validator::make($request->all(), $roles);

        if ($validator->fails()) {
            $rsp = new AjaxResponse();
            $list['errors'] = $validator->getMessageBag();
            $data['html'] = \View::make('admin.validation', array('errors' => $list['errors']))->render();
            $rsp->success = 0;
            $rsp->data = $data;
            return $rsp->toArray();
        }


        $rsp = new AjaxResponse();

        $skill= Skill::findOrFail($id);

        $skill->title = $request->title;
        $skill->description = $request->description;
        $skill->percent = $request->percent;

        $skill->save();

        $list['skills'] = Skill::all();
        $data['html'] = \View::make('admin.skill.index', array('skills' => $list['skills']))->render();

        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    public function index()
    {
        $rsp = new AjaxResponse();
        $list['skills'] = Skill::all();
        $data['html'] = \View::make('admin.skill.index', array('skills' => $list['skills']))->render();

        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();

    }

    public function show($id)
    {
        $rsp = new AjaxResponse();
        $list['skill'] = Skill::findOrFail($id);
        $data['html'] = \View::make('admin.skill.show', array('skill' => $list['skill']))->render();

        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }
}
