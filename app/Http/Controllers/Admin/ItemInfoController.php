<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ItemInfo as Request;
use App\ItemInfo;
use App\ItemType;

class ItemInfoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.item_infos.index', ['itemInfos' => ItemInfo::paginate(20)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.item_infos.create', ['itemTypes' => ItemType::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\ItemInfo $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $itemInfo = new ItemInfo();
        $itemInfo->save($request->all());

        $request->session()->flash('success', '"'.$itemInfo->title.'" created!');

        return redirect()->route('admin.item-infos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  ItemInfo $itemInfo
     * @return \Illuminate\Http\Response
     */
    public function show(ItemInfo $itemInfo)
    {
        return view('admin.item_infos.show', ['itemInfo' => $itemInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  ItemInfo $itemInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemInfo $itemInfo)
    {
        return view('admin.item_infos.edit', ['itemInfo' => $itemInfo, 'itemTypes' => ItemType::all()]);
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
        $itemInfo->update($request->all());
        $request->session()->flash("success",'"'.$itemInfo->title.'" updated!');

        return redirect()->route('admin.item-infos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  ItemInfo $itemInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemInfo $itemInfo)
    {
        $itemInfo->delete();
        \request()->session()->flash('success', '"'.$itemInfo->title.'" deleted!');

        return redirect()->route('admin.item-infos.index');
    }
}
