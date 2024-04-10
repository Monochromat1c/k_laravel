@extends('layout.main')
@section('content')
    <link rel="stylesheet" href="/css/dashboard.css">
    </head>

    <body>

        <div class="dashboard-container">
            <div id="dashboard">
                <div id="form-wrapper">
                    <form id="gender-form" action="/gender/update/{{ $gender->gender_id }}" method="post">
                        @method('PUT')
                        @csrf
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div id="input-wrapper">
                            <h2>Edit Gender</h2>
                            @if ($errors->any())
                                <div id="error_message" class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li class="error">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <label for="gender" class="form-label">Edit Existing Gender:</label>
                            <input type="text" id="input" class="form-control" id="gender"
                                placeholder="Male/Female/Etc." name="gender" value="{{ $gender->gender }}" />
                            <div id="gender-button" style="display:flex; justify-content: space-between;">
                                <a href="/genders" class="btn btn-secondary"
                                    style="font-size: 1.5rem; border-radius: 2rem; padding: 1rem 5rem;">Back</a>
                                <button style="font-size: 1.5rem; border-radius: 2rem; padding: 1rem 5rem;" type="submit"
                                    class="btn btn-success">Update Gender</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="/js/error-message.js"></script>
        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    </body>
@endsection
