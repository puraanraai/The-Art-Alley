<div>
    <h1>Users List</h1>
    {{
        print_r($users)
    }}
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->Id}}</td>
            <td>{{$user->Name}}</td>
            <td>{{$user->Email}}</td>
            <td>{{$user->Phone}}</td>
        </tr>
        @endforeach
    </table>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</div>
