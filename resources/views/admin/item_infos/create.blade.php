@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create ItemInfo</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('admin.item-infos.store') }}">
                            {{ csrf_field() }}

                            @component('snippet.form-group',['label'=> 'Type', 'name' => 'item_type_id'])
                                <select class="form-control" name="item_type_id" id="item_type_id" required>
                                    @foreach($itemTypes as $itemType)
                                        <option value="{{$itemType->id}}">{{$itemType->name}}</option>
                                    @endforeach
                                </select>
                            @endcomponent

                            @component('snippet.form-group',['label'=> 'ISBN', 'name' => 'isbn'])
                                <input minlength="11" maxlength="13" name="isbn" id="isbn" class="form-control"
                                       value="{{ old('isbn') }}">
                            @endcomponent

                            @component('snippet.form-group',['label'=> 'Title', 'name' => 'title'])
                                <input name="title" id="title" class="form-control" value="{{ old('title')}}" required
                                       autofocus>
                            @endcomponent

                            @component('snippet.form-group',['label'=> 'Description', 'name' => 'description'])
                                <textarea id="description" class="form-control" name="description"
                                          required>{{old('description')}}</textarea>
                            @endcomponent

                            @component('snippet.form-group',['label'=> 'Author', 'name' => 'author'])
                                <input name="author" id="author" class="form-control"
                                       value="{{ old('author') }}" required>
                            @endcomponent

                            @component('snippet.form-group',['label'=> 'Price', 'name' => 'price'])
                                <input type="number" name="price" id="price" class="form-control"
                                       value="{{ old('price') }}">
                            @endcomponent

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4 ">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="nsfw" id="nsfw"
                                                   {{ old('nsfw') ? 'checked':''}} value="1">
                                            <abbr title="Not Safe For Work">NSFW</abbr>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
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