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
            <th>NSFW</th>
            <th>n° items</th>
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
                <td>{{$itemInfo->nsfw ? "yes" : 'no'}}</td>
                <td>{{$itemInfo->items()->count()}}</td>
                <td>
                    @include('snippet.action-buttons',[
                        'view'=> route('item-infos.show', $itemInfo),
                    ])
                </td>
            </tr>
        @endforeach
    </table>
    {{ $itemInfos->links() }}
</div>