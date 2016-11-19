<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

use App\Menu;
use App\Image;
use App\Thumbnail;
use App\Info;


class PagesController extends Controller
{


 	public function home(){
 		$data['image_loc'] = \Config::get('app.image.thumb');
 		$data['menus']=Menu::orderBy('menu_id')->take(7)->get();
 		$data['header_image']=Image::where('section', '=', 'header')->get();
 		$data['working_image']=Image::where('section', '=', 'workingwith')->get();
 		$data['client_image']=Image::where('section', '=', 'client')->take(6)->get();
 		$data['info_menus']=Menu::orderBy('menu_id')->take(8)->get();
 		$data['head_info']=Info::where('branch', '=', 'head')->get();
 		$data['thumbnail_titles']=Thumbnail::where('section', '=', 'title_contents')->get();
 		$data['thumbnail_certifieds']=Thumbnail::where('section', '=', 'certified')->get();
 		$data['thumbnail_whatwedos']=Thumbnail::where('section', '=', 'whatwedo')->get();
 		$data['thumbnail_featureds']=Thumbnail::where('section', '=', 'featured')->get();
 		$data['thumbnail_recents']=Thumbnail::where('section', '=', 'recent')->get();


//return $data;
    	return view('blade.home', $data);
    }

    public function project(){
    	$data['menus']=Menu::all()->take(7);

    	return view('blade.project', $data);
    }

    public function service(){
    	$data['menus']=Menu::all()->take(7);

    	return view('blade.service', $data);
    }


}
