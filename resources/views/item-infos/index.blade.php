@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Items Info</div>

                <div class="panel-body">
                    @include('item-infos.table');
                </div>
            </div>
        </div>
    </div>
@endsection