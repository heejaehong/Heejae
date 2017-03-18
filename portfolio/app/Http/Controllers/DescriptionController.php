<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Desc;
use App\Http\Libraries\AjaxResponse;

class DescriptionController extends Controller
{
    public function update(Request $request, $id)
    {
        $rsp = new AjaxResponse();

        $description= Desc::findOrFail($id);

        $description->home_desc = $request->home_desc;
        $description->about_desc = $request->about_desc;
        $description->contact_desc = $request->contact_desc;

        $description->save();

        $user = \Auth::user();

        $list['description'] = Desc::findOrFail($id)->get();
        $data['html'] = \View::make('admin.description.index',
            array('description' => $list['description'], 'user' => $user))->render();

        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    public function index()
    {
        $rsp = new AjaxResponse();

        $user = \Auth::user();
        $list['description'] = $user->desc()->get();
        $data['html'] = \View::make('admin.description.index',
            array('description' => $list['description'], 'user' => $user))->render();

        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();

    }

}
