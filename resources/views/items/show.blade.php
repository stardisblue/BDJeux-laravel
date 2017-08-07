@extends('layouts.panel')

@section('heading')
    <h2 class="panel-title">Item</h2>
@endsection

@section('body')
    @include('items.single')
@endsection