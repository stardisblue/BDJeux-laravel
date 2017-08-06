@extends('layouts.admin.app')

@section('content')
    {{-- TODO Design --}}
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">{{$itemState->name}}</div>

                <div class="panel-body">
                    <div class="table-responsive">
                        Related items

                        @if(count($itemState->items) > 0)
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>name</th>
                                    <th>author</th>
                                    <th>owner</th>
                                    <th>allow borrow</th>
                                    <th></th>
                                </tr>
                                </thead>
                                @foreach($itemState->items as $item)
                                    <tr>
                                        <td>{{$item->itemInfo->name}}</td>
                                        <td>{{$item->itemInfo->author}}</td>
                                        <td>{{$item->user->username}}</td>
                                        <td>{{$item->borrowable ? 'yes': 'no'}}</td>
                                        <td>
                                            @include('snippet.action-buttons',[
                                                'view'=> route('admin.item-state.show', $item),
                                                'edit'=> route('admin.item-state.edit', $item),
                                                'remove'=> route('admin.item-state.destroy', $item),
                                                'id'=>$item->id
                                            ])
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            {{ $itemState->items->links() }}
                        @else
                            <p>empty</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection