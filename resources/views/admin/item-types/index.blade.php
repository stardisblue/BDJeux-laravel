@extends('layouts.admin.panel')

@section('heading')
    <h2 class="panel-title">Items Types</h2>
    <div class="text-right">
        <a href="{{route('admin.item-types.create')}}">Create new</a>
    </div>
@endsection

@section('body')
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
                            'view' => route('admin.item-types.show', $itemType),
                            'edit' => route('admin.item-types.edit', $itemType),
                            'remove' => route('admin.item-types.destroy', $itemType),
                            'id' => $itemType->id
                        ])
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection