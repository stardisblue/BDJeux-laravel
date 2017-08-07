<div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Owner</th>
            <th>Borrower</th>
            <th>Status</th>
            <th>date begin</th>
            <th>date end</th>
            <th>date back</th>
            <th></th>
        </tr>
        </thead>
        @foreach($loans as $loan)
            <tr>
                <td>{{$loan->id}}</td>
                <td>{{$loan->item->itemInfo->title}}</td>
                <td>{{$loan->item->user->username}}</td>
                <td>{{$loan->user->username}}</td>
                <td>{{$loan->status->name}}</td>
                <td>{{$loan->begin}}</td>
                <td>{{$loan->end}}</td>
                <td>{{$loan->back}}</td>
                <td>
                    @include('snippet.action-buttons',[
                        'view'=> route('admin.loans.show', $loan),
                        'edit'=> route('admin.loans.edit', $loan),
                        'remove'=> route('admin.loans.destroy', $loan),
                        'id'=>$loan->id
                    ])
                </td>
            </tr>
        @endforeach
    </table>
</div>
{{ $loans->links() }}