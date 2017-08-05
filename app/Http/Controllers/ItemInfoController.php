<?php

namespace App\Http\Controllers;

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
        return view('admin.item_infos.index', ['itemInfos' => ItemInfo::all()]);
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
    }
}
