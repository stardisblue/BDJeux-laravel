@extends('layouts.admin.panel')
@section('heading')
    <h2 class="panel-title">Users</h2>
    <div class="text-right">
        <a href="{{route('admin.users.create')}}">Create new</a>
    </div>
@endsection

@section('body')
    @include('admin.users.table')
@endsection