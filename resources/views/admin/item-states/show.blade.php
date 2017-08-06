@extends('layouts.admin.app')

@section('content')
    {{-- TODO Design --}}
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><h2 class="panel-title">{{$itemState->name}}</h2></div>

                <div class="panel-body">
                    @include('snippet.action-buttons',[
                        'edit'=> route('admin.item-states.edit', $itemState),
                        'remove'=> route('admin.item-states.destroy', $itemState),
                        'id'=>$itemState->id
                    ])

                    <div class="panel-content">
                        <h3>Related items</h3>

                        @if($itemState->items()->count() > 0)
                            @include('items.table',['items'=>$itemState->itemsPaginate()])
                        @else
                            <p>empty</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection