@extends('layouts.admin.panel')

@section('heading')
    <h2 class="panel-title">{{$itemInfo->title}} ({{$itemInfo->itemType->name}})</h2>
@endsection

@section('body')
    {{-- TODO Design --}}

    @include('snippet.action-buttons',[
        'edit'=> route('admin.item-infos.edit', $itemInfo),
        'remove'=> route('admin.item-infos.destroy', $itemInfo),
        'id'=>$itemInfo->id
    ])

    @include('item-infos.single')

    <h3>Related Items</h3>
    <div class="text-right">
        <a href="{{route('admin.items.create',['item_info'=> $itemInfo->id])}}">Create new</a>
    </div>
    @if($itemInfo->items()->count() > 0)
        @include('admin.items.table',['items' => $itemInfo->itemsPaginate()])
    @else
        <p>empty</p>
    @endif
@endsection