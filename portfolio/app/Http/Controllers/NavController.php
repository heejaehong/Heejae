<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nav;
use App\Http\Libraries\AjaxResponse;
use Validator;


class NavController extends Controller
{
    public function Delete($id){
        $rsp = new AjaxResponse();
        $nav = Nav::findOrFail($id);

        $nav->delete();

        $list['navs'] = Nav::all();
        $data['html'] = \View::make('admin.nav.index', array('navs' => $list['navs']))->render();

        $rsp->success = 1;
        $rsp->data = $data;
        return $rsp->toArray();
    }

    public function store(Request $request)
    {
        $roles = [
            'name' => 'required|max:255',
            'slug' => 'required',
            'status' => 'required'
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
        $nav = new Nav();

        $nav->name = $request->name;
        $nav->slug = $request->slug;
        $nav->status = $request->status;

        $nav->save();

        $list['navs'] = Nav::all();
        $data['html'] = \View::make('admin.nav.index', array('navs' => $list['navs']))->render();

        $rsp->success = 1;
        $rsp->data = $data;
        return $rsp->toArray();

    }

    public function create(){

        $rsp = new AjaxResponse();

        $data['html'] = \View::make('admin.nav.create')->render();

        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    public function update(Request $request, $id)
    {
        $roles = [
            'name' => 'required|max:255',
            'slug' => 'required',
            'status' => 'required'
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

        $nav= Nav::findOrFail($id);

        $nav->name = $request->name;
        $nav->slug = $request->slug;
        $nav->status = $request->status;

        $nav->save();

        $list['navs'] = Nav::all();
        $data['html'] = \View::make('admin.nav.index', array('navs' => $list['navs']))->render();

        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    public function show($id)
    {
        $rsp = new AjaxResponse();
        $list['nav'] = Nav::findOrFail($id);
        $data['html'] = \View::make('admin.nav.show', array('nav' => $list['nav']))->render();

        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    public function index()
    {
        $rsp = new AjaxResponse();
        $list['navs'] = Nav::all();
        $data['html'] = \View::make('admin.nav.index', array('navs' => $list['navs']))->render();

        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();

    }
}
