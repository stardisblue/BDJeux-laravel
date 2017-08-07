<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.statuses.index', ['statuses' => Status::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.statuses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:statuses|max:20',
        ]);

        $status = new Status();

        $status->name = $request->name;

        $status->save();

        $request->session()->flash('success', 'Status "'.$status->name.'" created !');

        return redirect()->route('admin.statuses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Status $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        return view('admin.statuses.show', ['status' => $status]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Status $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
        return view('admin.statuses.edit', ['status' => $status]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Status $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Status $status)
    {
        $this->validate($request, [
            'name' => 'required|unique:statuses|max:20',
        ]);

        $status->name = $request->name;

        $status->update();

        $request->session()->flash('success', '"'.$status->name.'" updated !');

        return redirect()->route('admin.statuses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Status $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        $status->delete();

        \request()->session()->flash('success', '"'.$status->name.'" deleted !');

        return redirect()->route('admin.statuses.index');
    }
}
