@if(count($errors) > 0)

    <div class='alert alert-danger' role='alert'>

        <ul>
            @foreach ($errors->all() as $error)
                <li><b>{{ $error }}</b></li>
            @endforeach
        </ul>
    </div>

@endif
