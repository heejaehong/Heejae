<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Http\Libraries\AjaxResponse;

class ProfileController extends Controller
{
    public function update(Request $request, $id)
    {
        $rsp = new AjaxResponse();

        $profile= Profile::findOrFail($id);

        $profile->address = $request->address;
        $profile->phone = $request->phone;
        $profile->facebook = $request->facebook;
        $profile->twitter = $request->twitter;
        $profile->linkedin = $request->linkedin;

        $profile->save();

        $user = \Auth::user();

        $list['profile'] = Profile::findOrFail($id)->get();
        $data['html'] = \View::make('admin.profile.index',
            array('profile' => $list['profile'], 'user' => $user))->render();

        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    public function index()
    {
        $rsp = new AjaxResponse();

        $user = \Auth::user();
        $list['profile'] = $user->profile()->get();
        $data['html'] = \View::make('admin.profile.index',
            array('profile' => $list['profile'], 'user' => $user))->render();

        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();

    }
}
