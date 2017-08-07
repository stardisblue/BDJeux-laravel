@extends('layouts.panel')

@section('heading')
    <h2 class="panel-title text-capitalize">{{$status->name}}</h2>
@endsection

@section('body')
    {{-- TODO Design
    <h3>Related items</h3>

    @if($itemState->items()->count() > 0)
        @include('items.table',['items'=>$itemState->itemsPaginate()])
    @else
        <p>empty</p>
    @endif --}}
@endsection