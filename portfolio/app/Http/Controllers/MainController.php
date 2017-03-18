<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desc;
use App\Image;
use App\Nav;
use App\Profile;
use App\Skill;
use App\User;
use App\Work;

class MainController extends Controller
{
    public function index()
    {
        $data['img_path'] = \Config::get('app.imagePath.src');
        $admin  = User::where('position', '=' , 'admin')->first();

        return view('layouts.master', $data)
            ->with('user', $admin)
            ->with('profiles', $admin->profile()->get())
            ->with('descs', $admin->desc()->get())
            ->with('works', Work::all())
            ->with('skills', Skill::all())
            ->with('navs', Nav::where('status', '=', 'published')->get())
            ;


    }
}
