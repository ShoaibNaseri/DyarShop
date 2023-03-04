<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $num = 1;
        $works = Work::all();
        return view('cms.frontEnd.howDoWeWork.index', compact('works', 'num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $work = new Work();
        return view('cms.frontEnd.howDoWeWork.create', compact('work'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Work $work)
    {
        //
        $success = $work->create($this->validateRequest());
        if ($success) {
            return redirect()->route('work.index')->with('success', 'Work Added Successfully');
        } else {
            return redirect()->route('work.index')->with('error', 'Work Added Failed');
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
    public function edit(Work $work)
    {
        //
        return view('cms.frontEnd.howDoWeWork.edit', compact('work'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Work $work)
    {
        //
        $success = $work->update($this->validateRequest());
        if ($success) {
            return redirect()->route('work.index')->with('success', 'Work Updated Successfully');
        } else {
            return redirect()->route('work.index')->with('error', 'Work Updated Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        //
        $success = $work->delete();
        if ($success) {
            return redirect()->route('work.index')->with('success', 'Team member deleted successfully');
        } else {
            return redirect()->route('work.index')->with('error', 'Team member could not be deleted');
        }
    }

    private function validateRequest()
    {
        return request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
    }
}
