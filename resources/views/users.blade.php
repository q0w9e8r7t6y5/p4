
<div class='user cf'>

<table>
    <tr>
        <th>User ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Added</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td><a href='edit/{{ $user->id }}'><b>{{ $user->first_name }} {{ $user->last_name }}</b></a></td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->created_at }}</td>
            <td><form action="edit/{{ $user->id }}">
                    <input type="submit" value="Edit & Delete" />
                </form>
            </td>
        </tr>
    @endforeach

    </table>

</div>

