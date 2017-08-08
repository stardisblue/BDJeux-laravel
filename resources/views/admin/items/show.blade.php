@extends('layouts.admin.panel')

@section('heading')
    <h2 class="panel-title">Item</h2>
@endsection
@section('body')
    @include('snippet.action-buttons',[
        'edit'=> route('admin.items.edit', $item),
        'remove'=> route('admin.items.destroy', $item),
        'id'=>$item->id
    ])

    @include('items.single')

    @if($item->borrowable)
        <h3>Loans</h3>
        <div class="text-right">
            <a href="{{route('admin.loans.create',['item'=> $item->id])}}">Create new</a>
        </div>
    @endif
@endsection