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
        </tr>
        </thead>
        @foreach($itemInfos as $itemInfo)
            <tr>
                <td>{{$itemInfo->isbn}}</td>
                <td>{{$itemInfo->title}}</td>
                <td>{{$itemInfo->description}}</td>
                <td>{{$itemInfo->author}}</td>
                <td>{{$itemInfo->price ? $itemInfo->price : '-'}}</td>
            </tr>
        @endforeach
    </table>
    {{ $itemInfos->links() }}
</div>