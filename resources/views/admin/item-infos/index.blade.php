@extends('layouts.admin.panel')

@section('heading')
    <h2 class="panel-title">Item Infos</h2>
    <div class="text-right">
        <a href="{{route('admin.item-infos.create')}}">Create new</a>
    </div>
@endsection

@section('body')
    @include('admin.item-infos.table')
@endsection