@extends('admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Items</div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <td>Borrowable</td>
                                    <td>Status</td>
                                </tr>
                                </thead>
                                @foreach($items as $item)
                                @endforeach
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection