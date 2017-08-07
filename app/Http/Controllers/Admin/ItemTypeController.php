<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ItemType;
use Illuminate\Http\Request;

class ItemTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.item-types.index', ['itemTypes' => ItemType::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.item-types.create');
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
            'name' => 'required|unique:item_types|max:20',
        ]);

        $itemType = new ItemType();

        $itemType->name = $request->name;

        $itemType->save();

        $request->session()->flash('success', 'Item state "'.$itemType->name.'" created !');

        return redirect()->route('admin.item-states.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ItemType $itemType
     * @return \Illuminate\Http\Response
     */
    public function show(ItemType $itemType)
    {
        return view('admin.item-types.show', ['itemType' => $itemType]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItemType $itemType
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemType $itemType)
    {
        return view('admin.item-types.edit', ['itemType' => $itemType]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\ItemType $itemType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemType $itemType)
    {
        $this->validate($request, [
            'name' => 'required|unique:item_types|max:20',
        ]);

        $itemType->name = $request->name;

        $itemType->update();

        $request->session()->flash('success', '"'.$itemType->name.'" updated !');

        return redirect()->route('admin.item-types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItemType $itemType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemType $itemType)
    {
        $itemType->delete();

        \request()->session()->flash('success', '"'.$itemType->name.'" deleted !');

        return redirect()->route('admin.item-types.index');
    }
}
