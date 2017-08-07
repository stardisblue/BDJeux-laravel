@extends('layouts.admin.panel')
@section('heading')
    <h2 class="panel-title">Loans</h2>
    <div class="text-right">
        <a href="{{route('admin.loans.create')}}">Create new</a>
    </div>
@endsection

@section('body')
    @include('admin.loans.table');
@endsection