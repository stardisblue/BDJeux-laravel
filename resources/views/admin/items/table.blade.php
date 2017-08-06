<div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Owner</th>
            <th>borrowable</th>
            <th></th>
        </tr>
        </thead>
        @foreach($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->itemInfo->title}}</td>
                <td>{{$item->itemInfo->author}}</td>
                <td>{{$item->user->username}}</td>
                <td>{{$item->borrowable ? 'yes': 'no'}}</td>
                <td>
                    @include('snippet.action-buttons',[
                        'view'=> route('admin.items.show', $item),
                        'edit'=> route('admin.items.edit', $item),
                        'remove'=> route('admin.items.destroy', $item),
                        'id'=>$item->id
                    ])
                </td>
            </tr>
        @endforeach
    </table>
</div>
{{ $items->links() }}