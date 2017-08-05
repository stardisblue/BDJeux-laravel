<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ItemState;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ItemStateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.item_states.index', ['itemStates' => ItemState::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ItemState $itemState
     * @return \Illuminate\Http\Response
     */
    public function show(ItemState $itemState)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItemState $itemState
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemState $itemState)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\ItemState $itemState
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemState $itemState)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItemState $itemState
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemState $itemState)
    {
        return new Response('gg');
    }
}
