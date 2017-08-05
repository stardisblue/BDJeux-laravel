@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="text-left">Items Info</div>
                    <div class="text-right"><a href="{{route('admin.item-infos.create')}}">Create new</a></div>
                </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Type</th>
                            <th>ISBN</th>
                            <th>Title</th>
                            <th>description</th>
                            <th>author</th>
                            <th>price</th>
                            <th></th>
                        </tr>
                        </thead>
                        @foreach($itemInfos as $itemInfo)
                            <tr>
                                <td>{{$itemInfo->itemType->name}}</td>
                                <td>{{$itemInfo->isbn}}</td>
                                <td>{{$itemInfo->title}}</td>
                                <td>{{$itemInfo->description}}</td>
                                <td>{{$itemInfo->author}}</td>
                                <td>{{$itemInfo->price ? $itemInfo->price : '-'}}</td>
                                <td>
                                    @include('snippet.action-buttons',[
                                        'view'=> route('admin.item-infos.show', $itemInfo),
                                        'edit'=> route('admin.item-infos.edit', $itemInfo),
                                        'remove'=> route('admin.item-infos.destroy', $itemInfo),
                                        'id'=>$itemInfo->id
                                    ])
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $itemInfos->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection