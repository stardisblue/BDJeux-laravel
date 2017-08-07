@extends('layouts.admin.form')

@section('form-title','Create Item')

@section('form')
    <form class="form-horizontal" method="POST" action="{{ route('admin.items.store') }}">
        {{ csrf_field() }}

        @component('snippet.form-group',['label'=> 'Item Info', 'name' => 'item_info_id'])
            @isset($itemInfo)
                <input name="item_info_id" id="item_info_id" class="form-control" value="{{$itemInfo->id}}"
                       required type="hidden">
                <p class="form-control-static">{{$itemInfo->title}}</p>
            @endisset
            @isset($itemInfos)
                <select class="form-control" name="item_info_id" id="item_info_id" required>
                    @foreach($itemInfos as $itemInfo)
                        <option value="{{$itemInfo->id}}" {{old('item_info_id') == $itemInfo->id ?
                            'selected':''}}>{{$itemInfo->title}}</option>
                    @endforeach
                </select>
            @endisset
        @endcomponent

        @component('snippet.form-group',['label'=> 'Owner', 'name' => 'user_id'])
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

        @component('snippet.form-group',['label'=> 'State', 'name' => 'item_state_id'])
            <select class="form-control" name="item_state_id" id="item_state_id" required>
                @foreach($itemStates as $itemState)
                    <option value="{{$itemState->id}}" {{old('item_state_id') == $itemState->id ?
                        'selected':''}}>{{$itemState->name}}</option>
                @endforeach
            </select>
        @endcomponent

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4 ">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="borrowable" id="borrowable"
                               {{ old('borrowable') ? 'checked':''}} value="1"> Borrowable
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button class="btn btn-primary">
                    Create
                </button>
            </div>
        </div>
    </form>
@endsection