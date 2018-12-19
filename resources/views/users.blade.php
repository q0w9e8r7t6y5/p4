<div class='user cf'>

    {{--http://localhost/p4/public/edit/1--}}

    <a href='edit/{{ $user->id }}'><h3>{{ $user->first_name }} {{ $user->last_name }}</h3></a>
    <ul>
        <li>Phone Number: {{ $user->phone }}</li>
        <li>Email: {{ $user->email }}</li>
        <li>User ID: {{ $user->id }}</li>
        <li>Added: {{ $user->created_at->format('m/d/y g:ia') }}</li>
    </ul>
</div>
