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
        return view('item-infos.index', ['itemInfos' => ItemInfo::paginate(20)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  ItemInfo $itemInfo
     * @return \Illuminate\Http\Response
     */
    public function show(ItemInfo $itemInfo)
    {
        return view('item-infos.show', ['itemInfo' => $itemInfo]);
    }
}
