@extends('layouts.admin.panel')

@section('heading')
    <h2 class="panel-title text-capitalize">{{$status->name}}</h2>
@endsection

@section('body')
    {{-- TODO Design --}}

    @include('snippet.action-buttons',[
        'edit'=> route('admin.statuses.edit', $status),
        'remove'=> route('admin.statuses.destroy', $status),
        'id'=>$status->id
    ])

    {{-- TODO <h3>Related Stuff</h3>

    @if($statu->items()->count() > 0)
        @include('items.table',['items'=>$statu->itemsPaginate()])
    @else
        <p>empty</p>
    @endif--}}
@endsection