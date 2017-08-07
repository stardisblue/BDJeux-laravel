<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Item as Request;
use App\Item;
use App\ItemInfo;
use App\ItemState;
use App\User;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.items.index', ['items' => Item::paginate(20)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(\Illuminate\Http\Request $request)
    {
        $data = ['itemStates' => ItemState::all()];
        if (isset($request->item_info)) {
            $data['itemInfo'] = ItemInfo::findOrFail($request->item_info);
        } else {
            $data['itemInfos'] = ItemInfo::all();
        }

        if (isset($request->user)) {
            $data['user'] = User::findOrFail($request->user);
        } else {
            $data['users'] = User::all();
        }


        return view('admin.items.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Item $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Item($request->all());

        $item->save();

        $request->session()->flash('success',
            'Item '.$item->itemInfo->title.', <i>'.$item->user->username.'</i> created !');

        return redirect()->route('admin.items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('admin.items.show', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('admin.items.edit', [
            'item' => $item,
            'itemInfos' => ItemInfo::all(),
            'users' => User::all(),
            'itemStates' => ItemState::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Item $request
     * @param  \App\Item $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $item->update($request->all());

        $request->session()->flash('success',
            'Item : '.$item->itemInfo->title.', <i>'.$item->user->username.'</i> updated !');

        return redirect()->route('admin.items.show', $item);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();

        \request()->session()->flash('success',
            'Item : '.$item->itemInfo->title.', <i>'.$item->user->username.'</i> deleted !');

        return redirect()->route('admin.items.index');
    }
}
