@extends('layouts.admin.form')

@section('form-title','Edit Item')

@section('form')
    <form class="form-horizontal" method="POST" action="{{ route('admin.items.update',$item) }}">
        {{ csrf_field() }}
        {{method_field('PUT')}}
        @component('snippet.form-group',['label'=> 'Item Info', 'name' => 'item_info_id'])
            <select class="form-control" name="item_info_id" id="item_info_id" required>
                @foreach($itemInfos as $itemInfo)
                    <option {{$item->item_info_id == $itemInfo->id || old('item_info_id') == $itemInfo->id ?
                        'selected':''}} value="{{$itemInfo->id}}">{{$itemInfo->title}}</option>
                @endforeach
            </select>
        @endcomponent

        @component('snippet.form-group',['label'=> 'Type', 'name' => 'item_state_id'])
            <select class="form-control" name="item_state_id" id="item_state_id" required>
                @foreach($itemStates as $itemState)
                    <option {{$item->item_state_id == $itemState->id || old('item_state_id') == $itemState->id ?
                        'selected':''}} value="{{$itemState->id}}">{{$itemState->name}}</option>
                @endforeach
            </select>
        @endcomponent

        @component('snippet.form-group',['label'=> 'Owner', 'name' => 'user_id'])
            <select class="form-control" name="user_id" id="user_id" required>
                @foreach($users as $user)
                    <option {{$item->user_id == $user->id || old('user_id') == $user->id ?
                        'selected':''}} value="{{$user->id}}">{{$user->username}}</option>
                @endforeach
            </select>
        @endcomponent

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4 ">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="borrowable" id="borrowable"
                               {{($item->borrowable || old('borrowable')) ? 'checked':''}} value="1"> Borrowable
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
            </div>
        </div>
    </form>
@endsection