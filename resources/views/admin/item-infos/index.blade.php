@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Item Infos</h2>
                    <div class="text-right">
                        <a href="{{route('admin.item-infos.create')}}">Create new</a>
                    </div>
                </div>

                <div class="panel-body">
                        @include('admin.item-infos.table')
                </div>
            </div>
@endsection