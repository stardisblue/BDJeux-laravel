@extends('layouts.admin.form')

@section('form-title','Create item Type')

@section('form')
    <form class="form-horizontal" method="POST" action="{{ route('admin.item-types.store') }}">
        {{ csrf_field() }}

        @component('snippet.form-group',['label'=> 'Name', 'name' => 'name'])
            <input name="name" id="name" class="form-control" value="{{ old('name')}}" required autofocus>
        @endcomponent

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button class="btn btn-primary">
                    Create
                </button>
            </div>
        </div>
    </form>
@endsection