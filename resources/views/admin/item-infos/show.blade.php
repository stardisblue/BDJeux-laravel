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

    {{ $itemInfo->description }}
    {{ $itemInfo->isbn }}
    {{ $itemInfo->price }}
    {{ $itemInfo->author }}
    {{ $itemInfo->nsfw ? 'yes' : 'no' }}

    @if($itemInfo->items()->count() > 0)
        <h2>Related Items</h2>
        @include('admin.items.table',['items' => $itemInfo->itemsPaginate()])
    @endif
@endsection