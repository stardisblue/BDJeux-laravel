@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Items States</h2>
                    <div class="text-right">
                        <a href="{{route('admin.item-states.create')}}">Create new</a>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>n° items</th>
                                <th></th>
                            </tr>
                            </thead>
                            @foreach($itemStates as $itemState)
                                <tr>
                                    <td>{{$itemState->id}}</td>
                                    <td>{{$itemState->name}}</td>
                                    <td>{{$itemState->items()->count()}}</td>
                                    <td>
                                        @include('snippet.action-buttons', [
                                        'view' => action('Admin\ItemStateController@show', $itemState),
                                        'edit' => action('Admin\ItemStateController@edit', $itemState),
                                        'remove' => action('Admin\ItemStateController@destroy', $itemState),
                                        'id' => $itemState->id
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