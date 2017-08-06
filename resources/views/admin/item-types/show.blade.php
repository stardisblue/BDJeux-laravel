@extends('layouts.admin.app')

@section('content')
    {{-- TODO Design --}}
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><h2 class="panel-title">{{$itemType->name}}</h2></div>

                <div class="panel-body">
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
                </div>
            </div>
        </div>
    </div>
@endsection