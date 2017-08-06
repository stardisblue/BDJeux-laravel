@extends('layouts.admin.panel')

@section('heading')
    <h2 class="panel-title text-capitalize">{{$itemType->name}}</h2>
@endsection

@section('body')
    @include('snippet.action-buttons',[
        'edit'=> route('admin.item-types.edit', $itemType),
        'remove'=> route('admin.item-types.destroy', $itemType),
        'id'=>$itemType->id
    ])

    <h3>Related Items</h3>
    @if($itemType->itemInfos()->count() > 0)
        @include('admin.item-infos.table',['itemInfos'=>$itemType->itemInfosPaginate()])
    @else
        <p>empty</p>
    @endif
@endsection