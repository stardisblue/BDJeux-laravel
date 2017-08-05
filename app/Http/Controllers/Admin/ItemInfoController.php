<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\ItemInfoController as Controller;
use App\Http\Requests\ItemInfo as Request;
use App\ItemInfo;

class ItemInfoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return parent::index();
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
     * @param \App\Http\Requests\ItemInfo $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  ItemInfo $itemInfo
     * @return \Illuminate\Http\Response
     */
    public function show($itemInfo)
    {
        //
        return parent::show($itemInfo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  ItemInfo $itemInfo
     * @return \Illuminate\Http\Response
     */
    public function edit($itemInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\ItemInfo $request
     * @param ItemInfo $itemInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemInfo $itemInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  ItemInfo $itemInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy($itemInfo)
    {
        //
    }
}
