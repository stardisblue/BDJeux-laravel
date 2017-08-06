@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create ItemInfo</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('admin.item-states.update',
                        $itemState)
                        }}">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}

                            @component('snippet.form-group',['label'=> 'Name', 'name' => 'name'])
                                <input name="name" id="name" class="form-control" value="{{ $itemState->name or old
                                ('name')}}" required
                                       autofocus>
                            @endcomponent

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection