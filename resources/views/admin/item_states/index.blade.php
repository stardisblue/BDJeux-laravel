@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Items States</div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th></th>
                                </tr>
                                </thead>
                                @foreach($itemStates as $itemState)
                                    <tr>
                                        <td>{{$itemState->id}}</td>
                                        <td>{{$itemState->name}}</td>
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