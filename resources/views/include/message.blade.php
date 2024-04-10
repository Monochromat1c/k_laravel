@if (session()->has('message_success'))
    <div class="alert alert-success" role="alert">
        {{ session('message_success') }}
@endif

@if ($errors->any())
    <div id="error_message" class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
