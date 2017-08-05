@extends('admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Items Types</div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <td>id</td>
                                    <td>name</td>
                                </tr>
                                </thead>
                                @foreach($itemTypes as $itemType)
                                    <tr>
                                        <td>{{$itemType->id}}</td>
                                        <td>{{$itemType->name}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection