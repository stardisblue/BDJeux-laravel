@extends('layouts.panel')

@section('heading')
    <h2 class="panel-title">Status</h2>
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
                    <td>{{-- TODO $status->library_count--}}</td>
                    <td>
                        @include('snippet.action-buttons', [
                            'view' => route('statuses.show', $status),
                        ])
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection