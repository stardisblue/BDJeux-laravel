@extends('layouts.panel')

@section('heading')
    <h2 class="panel-title">Items States</h2>
@endsection

@section('body')
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
                            'view' => route('item-states.show', $itemState),
                        ])
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection