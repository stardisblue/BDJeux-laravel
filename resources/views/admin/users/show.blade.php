@extends('layouts.admin.panel')

@section('heading')
    <h2 class="panel-title">User</h2>
@endsection
@section('body')
    @include('snippet.action-buttons',[
        'edit'=> route('admin.users.edit', $user),
        'remove'=> route('admin.users.destroy', $user),
        'id'=>$user->id
    ])

    <ul>
        <li>{{$user->id}}</li>
        <li>{{$user->card_id}}</li>
        <li>{{$user->firstname}}</li>
        <li>{{$user->lastname}}</li>
        <li>{{$user->username}}</li>
        <li>{{$user->email}}</li>
        <li>{{$user->role}}</li>
    </ul>

    <h3>Owns</h3>
    <div class="text-right">
        <a href="{{route('admin.items.create',['user'=> $user->id])}}">Create new</a>
    </div>
    @if($user->own()->count() > 0)
        @include('admin.items.table',['items' => $user->ownPaginate()])
    @else
        <p>empty</p>
    @endif
    <h3>Loans</h3>
    <div class="text-right">
        <a href="{{route('admin.loans.create',['user'=> $user->id])}}">Create new</a>
    </div>
@endsection