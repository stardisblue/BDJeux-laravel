@extends('layouts.admin.panel')

@section('heading')
    <h2 class="panel-title">Items States</h2>
    <div class="text-right">
        <a href="{{route('admin.item-states.create')}}">Create new</a>
    </div>
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
                        'view' => route('admin.item-states.show', $itemState),
                        'edit' => route('admin.item-states.edit', $itemState),
                        'remove' => route('admin.item-states.destroy', $itemState),
                        'id' => $itemState->id
                        ])
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection