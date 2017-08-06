@extends('layouts.panel')

@section('heading')
    <h2 class="panel-title text-capitalize">{{$itemType->name}}</h2>
@endsection

@section('body')

    <h3>Related Items</h3>
    @if($itemType->itemInfos()->count() > 0)
        @include('item-infos.table',['itemInfos'=>$itemType->itemInfosPaginate()])
    @else
        <p>empty</p>
    @endif
@endsection