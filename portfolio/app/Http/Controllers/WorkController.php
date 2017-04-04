<?php

namespace App\Http\Controllers;

use App\Slideimage;
use App\Work;

use Illuminate\Http\Request;
use App\Http\Libraries\AjaxResponse;
use Illuminate\Support\Facades\Storage;
use Image;
use Validator;

class WorkController extends Controller
{
    public function Delete($id)
    {
        $rsp = new AjaxResponse();
        $work = Work::findOrFail($id);

        $work->delete();

        $list['works'] = Work::all();
        $data['html'] = \View::make('admin.work.index', array('works' => $list['works']))->render();

        $rsp->success = 1;
        $rsp->data = $data;
        return $rsp->toArray();
    }

    public function update(Request $request, $id)
    {
        $roles = [
            'title' => 'required|max:255',
            'description' => 'required',
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

        $work = Work::findOrFail($id);

        $work->title = $request->title;
        $work->description = $request->description;
        $work->slug = $request->slug;
        $work->status = $request->status;

        if ($request->hasFile('title_image')) {

            $oldFilename = $work->title_image;
            Storage::delete('/projects/' . $oldFilename);

            $image = $request->file('title_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/img/projects/' . $filename);
            Image::make($image)->resize(441, 293)->save($location);

            $work->title_image = $filename;
        }

        $work->save();

        if ($request->hasFile('work_images')) {

            $work->images()->delete();

            $forSlides = $request->file('work_images');
            $count = 1;
            foreach ($forSlides as $forSlide) {
                $slideimage = new Slideimage(); //db에서 row 한줄씩 만듬
                $imagename = time() . '_' . $count . '.' . $forSlide->getClientOriginalExtension();
                $imagelocation = public_path('/img/projects/slide/' . $imagename);
                Image::make($forSlide->getRealPath())->resize(441, 293)->save($imagelocation);

                $slideimage->slug = $imagename;
                $work->images()->save($slideimage);

                $count += 1;
            }
        }

        $list['works'] = Work::all();
        $data['html'] = \View::make('admin.work.index', array('works' => $list['works']))->render();

        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    public function show($id)
    {
        $rsp = new AjaxResponse();
        $list['work'] = Work::findOrFail($id);
        $data['html'] = \View::make('admin.work.show', array('work' => $list['work']))->render();

        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    public function store(Request $request)
    {
        $roles = [
            'title' => 'required|max:255',
            'description' => 'required',
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
        $work = new Work();

        $work->title = $request->title;
        $work->description = $request->description;
        $work->slug = $request->slug;
//        $work->title_image = $request->title_image;
        $work->status = $request->status;

//dd($request->hasFile('title_image'));
        if ($request->hasFile('title_image')) {
            $image = $request->file('title_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/img/projects/' . $filename);
            Image::make($image)->resize(441, 293)->save($location);

            $work->title_image = $filename;
        }


        $work->save();


        if ($request->hasFile('work_images')) {
            $forSlides = $request->file('work_images');
            $count = 1;
            foreach ($forSlides as $forSlide) {
                $slideimage = new Slideimage(); //db에서 row 한줄씩 만듬
                $imagename = time() . '_' . $count . '.' . $forSlide->getClientOriginalExtension();
                $imagelocation = public_path('/img/projects/slide/' . $imagename);
                Image::make($forSlide->getRealPath())->resize(441, 293)->save($imagelocation);

                $slideimage->slug = $imagename;
                $work->images()->save($slideimage);

                $count += 1;

            }
        }

        $list['works'] = Work::all();
        $data['html'] = \View::make('admin.work.index', array('works' => $list['works']))->render();

        $rsp->success = 1;
        $rsp->data = $data;
        return $rsp->toArray();


    }

    public function create()
    {

        $rsp = new AjaxResponse();

        $data['html'] = \View::make('admin.work.create')->render();

        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    public function index()
    {
        $rsp = new AjaxResponse();
        $list['works'] = Work::all();
        $data['html'] = \View::make('admin.work.index', array('works' => $list['works']))->render();

        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();

    }
}
