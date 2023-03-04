<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = Service::all();
        return view('cms.frontEnd.whatWeDo.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $service = new Service();
        return view('cms.frontEnd.whatWeDo.create', compact('service'));
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
            'image' => 'required',
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/cms/images/service'), $imageName);
        $image = Image::make(public_path('storage/cms/images/service/' . $imageName))->fit(800, 533);
        $image->save();
        $date = [
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ];

        $success = Service::create($date);
        if ($success) {
            return redirect()->route('service.index')->with('success', 'Service Created Successfully');
        } else {
            return redirect()->route('service.index')->with('error', 'Service Created Failed');
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
    public function edit(Service $service)
    {
        //
        return view('cms.frontEnd.whatWeDo.edit', compact('service'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Service $service)
    {
        //
        if (request()->has('image')) {
            Storage::delete('public/cms/images/service/' . $service->image);
            $imageName = time() . '.' . request()->image->extension();
            request()->image->move(public_path('storage/cms/images/service'), $imageName);
            $image = Image::make(public_path('storage/cms/images/service/' . $imageName))->fit(800, 533);
            $image->save();
            $data = [
                'title' => request()->title,
                'description' => request()->description,
                'image' => $imageName,
            ];
            $success = $service->update($data);
            if ($success) {
                return redirect()->route('slider.index');
            } else {
                return redirect()->back();
            }
        } else {
            $success = $service->update($this->validateRequest());
            if ($success) {
                return redirect()->route('service.index');
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
    public function destroy($id)
    {
        //
    }
    private function validateRequest()
    {
        return request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
    }
}
