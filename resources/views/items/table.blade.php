<div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>name</th>
            <th>author</th>
            <th>owner</th>
            <th>allow borrow</th>
        </tr>
        </thead>
        @foreach($items as $item)
            <tr>
                <td>{{$item->itemInfo->name}}</td>
                <td>{{$item->itemInfo->author}}</td>
                <td>{{$item->user->username}}</td>
                <td>{{$item->borrowable ? 'yes': 'no'}}</td>
            </tr>
        @endforeach
    </table>
</div>
{{ $items->links() }}