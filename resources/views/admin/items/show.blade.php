@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2 class="panel-title">Item</h2></div>

                    <div class="panel-body">
                        @include('snippet.action-buttons',[
                            'edit'=> route('admin.items.edit', $item),
                            'remove'=> route('admin.items.destroy', $item),
                            'id'=>$item->id
                        ])
                        <div class="panel-content">
                            {{ $item->itemInfo->title }}
                            {{ $item->itemInfo->description }}
                            {{ $item->itemState->name }}
                            {{ $item->user->username }}
                            {{ $item->borrowable }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection