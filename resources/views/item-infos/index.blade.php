@extends('layouts.panel')

@section('heading')
    <h2 class="panel-title">Item Infos</h2>
@endsection

@section('body')
    @include('item-infos.table')
@endsection