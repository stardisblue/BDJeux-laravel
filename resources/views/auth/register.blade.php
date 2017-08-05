@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            @component('snippet.form-group',['label'=> 'Student Card Number','name'=>'id_card'])
                                <input id="id_card" type="number" class="form-control" name="id_card"
                                       value="{{ old('id_card') }}">
                            @endcomponent

                            @component('snippet.form-group',['label'=> 'FirstName','name'=>'firstname'])
                                <input id="firstname" class="form-control" name="firstname"
                                       value="{{ old('firstname') }}" required autofocus>
                            @endcomponent

                            @component('snippet.form-group',['label'=> 'LastName','name'=>'lastname'])
                                <input id="lastname" class="form-control" name="lastname" value="{{ old('lastname') }}"
                                       required>
                            @endcomponent

                            @component('snippet.form-group',['label'=> 'Username','name'=>'username'])
                                <input id="username" class="form-control" name="username" value="{{ old('username') }}"
                                       required>
                            @endcomponent

                            @component('snippet.form-group',['label'=> 'E-Mail Address','name'=>'email'])
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}" required>
                            @endcomponent

                            @component('snippet.form-group',['label'=> 'Password','name'=>'password'])
                                <input id="password" type="password" class="form-control" name="password" required>
                            @endcomponent

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
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
