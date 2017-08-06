@extends('layouts.app')


@section('content')
    {{-- TODO Design --}}
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$itemInfo->title}} ({{$itemInfo->itemType->name}})</div>

                    <div class="panel-body">
                        {{ $itemInfo->description }}
                        {{ $itemInfo->isbn }}
                        {{ $itemInfo->price }}
                        {{ $itemInfo->author }}
                        {{ $itemInfo->nsfw }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection