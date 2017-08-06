@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Items Types</h2>
                    <div class="text-right">
                        <a href="{{route('admin.item-types.create')}}">Create new</a>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>n° Item-infos</th>
                                <th></th>
                            </tr>
                            </thead>
                            @foreach($itemTypes as $itemType)
                                <tr>
                                    <td>{{$itemType->id}}</td>
                                    <td>{{$itemType->name}}</td>
                                    <td>{{$itemType->itemInfos()->count()}}</td>
                                    <td>
                                        @include('snippet.action-buttons', [
                                            'view' => action('Admin\ItemTypeController@show', $itemType),
                                            'edit' => action('Admin\ItemTypeController@edit', $itemType),
                                            'remove' => action('Admin\ItemTypeController@destroy', $itemType),
                                            'id' => $itemType->id
                                        ])
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection