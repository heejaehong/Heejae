<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nav;
use App\Http\Libraries\AjaxResponse;

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
