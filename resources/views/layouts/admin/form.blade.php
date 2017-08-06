@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">@yield('form-title')</h2>
                    </div>
                    <div class="panel-body">
                        @yield('form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection