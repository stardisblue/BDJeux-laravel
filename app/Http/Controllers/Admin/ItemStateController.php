<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ItemState;
use Illuminate\Http\Request;

class ItemStateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.item-states.index', ['itemStates' => ItemState::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.item-states.create');
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
            'name' => 'required|unique:item_states|max:20',
        ]);

        $itemState = new ItemState();

        $itemState->name = $request->name;

        $itemState->save();

        $request->session()->flash('success', 'Item state "'.$itemState->name.'" created !');

        return redirect()->route('admin.item-states.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ItemState $itemState
     * @return \Illuminate\Http\Response
     */
    public function show(ItemState $itemState)
    {
        return view('admin.item-states.show',
            ['itemState' => $itemState]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItemState $itemState
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemState $itemState)
    {
        return view('admin.item-states.edit', ['itemState' => $itemState]);
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
        $this->validate($request, [
            'name' => 'required|unique:item_states|max:20',
        ]);

        $itemState->name = $request->name;

        $itemState->update();

        $request->session()->flash('success', '"'.$itemState->name.'" updated !');

        return redirect()->route('admin.item-states.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItemState $itemState
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemState $itemState)
    {
        $itemState->delete();

        \request()->session()->flash('success', '"'.$itemState->name.'" deleted !');

        return redirect()->route('admin.item-states.index');
    }
}
