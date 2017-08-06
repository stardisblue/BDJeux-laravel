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

    @if($itemInfo->items()->count() > 0)
        <h2>Related Items</h2>
        @include('admin.items.table',['items' => $itemInfo->itemsPaginate()])
    @endif
@endsection