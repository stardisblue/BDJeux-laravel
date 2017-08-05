@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Reset Password</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                            {{ csrf_field() }}

                            <input type="hidden" name="token" value="{{ $token }}">


                            @component('snippet.form-group',['label'=> 'E-Mail Address','name'=>'email'])
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ $email or old('email') }}" required autofocus>
                            @endcomponent

                            @component('snippet.form-group',['label'=> 'Password','name'=>'password'])
                                <input id="password" type="password" class="form-control" name="password" required>
                            @endcomponent

                            @component('snippet.form-group',['label'=> 'Confirm Password','name'=>'password_confirmation'])
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required>
                            @endcomponent

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Reset Password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
