@extends('layouts.admin.form')

@section('form-title','Edit status')

@section('form')
    <form class="form-horizontal" method="POST" action="{{ route('admin.statuses.update', $status) }}">
        {{ csrf_field() }}
        {{method_field('PUT')}}

        @component('snippet.form-group',['label'=> 'Name', 'name' => 'name'])
            <input name="name" id="name" class="form-control" value="{{ $status->name or old('name')}}"
                   required autofocus>
        @endcomponent

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button class="btn btn-primary">
                    Update
                </button>
            </div>
        </div>
    </form>
@endsection