@extends('layouts.admin.panel')
@section('heading')
    <h2 class="panel-title">Items</h2>
    <div class="text-right">
        <a href="{{route('admin.items.create')}}">Create new</a>
    </div>
@endsection

@section('body')
    @include('admin.items.table')
@endsection