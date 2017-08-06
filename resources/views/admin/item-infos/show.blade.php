@extends('layouts.admin.app')

@section('content')
    {{-- TODO Design --}}
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">{{$itemInfo->title}} ({{$itemInfo->itemType->name}})</h2>
                    </div>

                    <div class="panel-body">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection