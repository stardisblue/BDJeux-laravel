@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Item</div>

                    <div class="panel-body">
                        {{ $item->borrowable }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection