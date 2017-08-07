@extends('layouts.admin.panel')

@section('heading')
    <h2 class="panel-title">Loan</h2>
@endsection
@section('body')
    @include('snippet.action-buttons',[
        'edit'=> route('admin.loans.edit', $item),
        'remove'=> route('admin.loans.destroy', $item),
        'id'=>$item->id
    ])

    @include('loans.single')
@endsection