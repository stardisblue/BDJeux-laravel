@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Items Info</div>

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
                                            'view'=> route('item-infos.show', $itemInfo),
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