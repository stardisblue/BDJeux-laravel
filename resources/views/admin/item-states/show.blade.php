@extends('layouts.admin.panel')

@section('heading')
    <h2 class="panel-title text-capitalize">{{$itemState->name}}</h2>
@endsection

@section('body')
    {{-- TODO Design --}}

    @include('snippet.action-buttons',[
        'edit'=> route('admin.item-states.edit', $itemState),
        'remove'=> route('admin.item-states.destroy', $itemState),
        'id'=>$itemState->id
    ])

    <h3>Related items</h3>

    @if($itemState->items()->count() > 0)
        @include('admin.items.table',['items'=>$itemState->itemsPaginate()])
    @else
        <p>empty</p>
    @endif
@endsection