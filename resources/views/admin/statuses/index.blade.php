@extends('layouts.admin.panel')

@section('heading')
    <h2 class="panel-title">Status</h2>
    <div class="text-right">
        <a href="{{route('admin.statuses.create')}}">Create new</a>
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
            @foreach($statuses as $status)
                <tr>
                    <td>{{$status->id}}</td>
                    <td>{{$status->name}}</td>
                    <td>{{--TODO $status->library_count--}}</td>
                    <td>
                        @include('snippet.action-buttons', [
                        'view' => route('admin.statuses.show', $status),
                        'edit' => route('admin.statuses.edit', $status),
                        'remove' => route('admin.statuses.destroy', $status),
                        'id' => $status->id
                        ])
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection