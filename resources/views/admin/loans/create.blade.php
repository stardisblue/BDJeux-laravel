@extends('layouts.admin.form')

@section('form-title','Create Loan')

@section('form')
    <form class="form-horizontal" method="POST" action="{{ route('admin.loans.store') }}">
        {{ csrf_field() }}

        @component('snippet.form-group',['label'=> 'item', 'name' => 'item_id'])
            @isset($item)
                <input name="item_id" id="item_id" class="form-control" value="{{$item->id}}"
                       required type="hidden">
                <p class="form-control-static">{{$item->title}}</p>
            @endisset
            @isset($items)
                <select class="form-control" name="item_id" id="item_id" required>
                    @foreach($items as $item)
                        <option value="{{$item->id}}" {{old('item_id') == $item->id ?
                            'selected':''}}>{{$item->itemInfo->title .' ('.$item->user->username.')'}}</option>
                    @endforeach
                </select>
            @endisset
        @endcomponent

        @component('snippet.form-group',['label'=> 'Borrower', 'name' => 'user_id'])
            @isset($user)
                <input name="user_id" id="user_id" class="form-control" value="{{$user->id}}"
                       required type="hidden">
                <p class="form-control-static">{{$user->username}}</p>
            @endisset
            @isset($users)
                <select class="form-control" name="user_id" id="user_id" required>
                    @foreach($users as $user)
                        <option value="{{$user->id}}" {{old('user_id') == $user->id ?
                        'selected':''}}>{{$user->username}}</option>
                    @endforeach
                </select>
            @endisset
        @endcomponent

        @component('snippet.form-group',['label'=> 'State', 'name' => 'status_id'])
            <select class="form-control" name="status_id" id="status_id" required>
                @foreach($statuses as $status)
                    <option value="{{$status->id}}" {{old('status_id') == $status->id ?
                        'selected':''}}>{{$status->name}}</option>
                @endforeach
            </select>
        @endcomponent

        @component('snippet.form-group',['label'=> 'Date Begin', 'name' => 'date_begin'])
            <input class="form-control" type="datetime" name="date_begin" id="date_begin"
                   value="{{ $date_begin or old('date_begin')}}" required>
        @endcomponent

        @component('snippet.form-group',['label'=> 'Date End', 'name' => 'date_end'])
            <input class="form-control" type="datetime" name="date_end" id="date_end"
                   value="{{ $date_end or old('date_end') }}" required>
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