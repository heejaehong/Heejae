<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Http\Libraries\AjaxResponse;
use Validator;


class ProfileController extends Controller
{
    public function update(Request $request, $id)
    {
        $roles = [
            'address' => 'required|max:255',
            'phone' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required'
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
