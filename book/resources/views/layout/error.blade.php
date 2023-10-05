@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li style="list-style: none; color: red">{{ $error }}</li>
        @endforeach
    </ul>
@endif

@if(Session::has('success'))
    <strong style="color: green">{{ Session::get('success') }}</strong>
@endif