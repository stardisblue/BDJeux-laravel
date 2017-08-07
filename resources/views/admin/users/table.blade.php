<div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Student Card Id</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th></th>
        </tr>
        </thead>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->card_id}}</td>
                <td>{{$user->firstname}}</td>
                <td>{{$user->lastname}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td>
                    @include('snippet.action-buttons',[
                        'view'=> route('admin.users.show', $user),
                        'edit'=> route('admin.users.edit', $user),
                        'id'=>$user->id
                    ])
                </td>
            </tr>
        @endforeach
    </table>
</div>
{{ $users->links() }}