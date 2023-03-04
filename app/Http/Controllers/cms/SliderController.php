<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sliders = Slider::all();
        return view('cms.frontEnd.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $slider = new Slider();
        return view('cms.frontEnd.slider.create', compact('slider'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);


        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/cms/images/slider'), $imageName);
        $image = Image::make(public_path('storage/cms/images/slider/' . $imageName))->fit(2000, 1300);
        $image->save();

        $slider = new Slider();
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->image = $imageName;
        $save = $slider->save();
        if ($save) {
            return redirect()->route('slider.index');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //

        return view('cms.frontEnd.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Slider $slider)
    {

        //check if image is present

        if (request()->has('image')) {
            Storage::delete('public/cms/images/slider/' . $slider->image);
            $imageName = time() . '.' . request()->image->extension();
            request()->image->move(public_path('storage/cms/images/slider'), $imageName);
            $image = Image::make(public_path('storage/cms/images/slider/' . $imageName))->fit(2000, 1300);
            $image->save();
            $data = [
                'title' => request()->title,
                'description' => request()->description,
                'image' => $imageName,
            ];
            $success = $slider->update($data);
            if ($success) {
                return redirect()->route('slider.index');
            } else {
                return redirect()->back();
            }
        } else {
            $success = $slider->update($this->validateRequest());
            if ($success) {
                return redirect()->route('slider.index');
            } else {
                return redirect()->back();
            }
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {


        $slider->image = Storage::delete('public/cms/images/slider/' . $slider->image);
        $success = $slider->delete();
        if ($success) {
            return redirect()->route('slider.index');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }


    //

    private function validateRequest()
    {
        return request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image',
        ]);
    }
}
