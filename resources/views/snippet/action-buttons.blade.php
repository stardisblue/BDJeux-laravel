<div class="actions text-right">
    <div class="btn-group" role="group">

        @if(isset($view))
            <a href="{{$view}}" type="button" class="btn btn-default" title="view"><span class="glyphicon
                    glyphicon-eye-open"></span></a>
        @endif

        @if(isset($edit))
            <a href="{{$edit}}" type="button" class="btn btn-default" title="edit"><span class="glyphicon
    glyphicon-pencil"></span></a>
        @endif

        @if(isset($remove))
            <a href="{{$remove}}" type="button" class="btn btn-danger" title="remove" onclick="event.preventDefault();
                    document.getElementById('remove-form-{{$id}}').submit();"><span
                        class="glyphicon glyphicon-remove"></span></a>
        @endif
    </div>

    @if(isset($remove))
        <form id="remove-form-{{$id}}" action="{{$remove}}" method="POST"
              style="display: none;">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
        </form>
    @endif
</div>