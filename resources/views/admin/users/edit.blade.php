@extends('layouts.admin.form')

@section('form-title','Edit Item')

@section('form')
    <form class="form-horizontal" method="POST" action="{{ route('admin.users.update',$user) }}">
        {{ csrf_field() }}
        {{method_field('PUT')}}
        @component('snippet.form-group',['label'=> 'Student Card Number','name'=>'id_card'])
            <input id="id_card" type="number" class="form-control" name="id_card"
                   value="{{$user->card_id or old('id_card') }}">
        @endcomponent

        @component('snippet.form-group',['label'=> 'FirstName','name'=>'firstname'])
            <input id="firstname" class="form-control" name="firstname"
                   value="{{$user->firstname or old('firstname') }}" required autofocus>
        @endcomponent

        @component('snippet.form-group',['label'=> 'LastName','name'=>'lastname'])
            <input id="lastname" class="form-control" name="lastname" value="{{ $user->lastname or old('lastname') }}"
                   required>
        @endcomponent

        @component('snippet.form-group',['label'=> 'Username','name'=>'username'])
            <input id="username" class="form-control" name="username" value="{{ $user->username or old('username') }}"
                   required>
        @endcomponent

        @component('snippet.form-group',['label'=> 'E-Mail Address','name'=>'email'])
            <input id="email" type="email" class="form-control" name="email"
                   value="{{$user->email or old('email') }}" required>
        @endcomponent

        <hr class="separator">

        @component('snippet.form-group',['label'=> 'Password','name'=>'password'])
            <input id="password" type="password" class="form-control" name="password">
        @endcomponent

        <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control"
                       name="password_confirmation">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button class="btn btn-primary">
                    Update
                </button>
            </div>
        </div>
    </form>
@endsection