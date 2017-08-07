@extends('layouts.panel')

@section('heading')
    <h2 class="panel-title">Items</h2>
@endsection

@section('body')
    @include('items.table')
@endsection