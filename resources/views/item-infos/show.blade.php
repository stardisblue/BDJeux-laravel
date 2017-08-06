@extends('layouts.panel')

@section('heading')
    <h2 class="panel-title">{{$itemInfo->title}} ({{$itemInfo->itemType->name}})</h2>
@endsection

@section('body')
    {{-- TODO Design --}}
    @include('item-infos.single')

    @if($itemInfo->items()->count() > 0)
        <h2>Related Items</h2>
        @include('items.table',['items' => $itemInfo->itemsPaginate()])
    @endif
@endsection