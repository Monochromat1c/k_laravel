@extends('layout.main')
@section('content')
    <link rel="stylesheet" href="/css/dashboard.css">
    </head>

    <body>

        <div class="dashboard-container">
            <div id="dashboard">
                {{-- <h1>Dashboard</h1> --}}
                <div id="form-wrapper">
                    <form id="gender-form" action="" method="POST">
                        @csrf
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div id="input-wrapper">
                            <h2>View Gender</h2>
                            @if ($errors->any())
                                <div id="error_message" class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li class="error">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <label for="gender" class="form-label">Gender:</label>
                            <input type="text" id="input" class="form-control" id="gender" name="gender"
                                value="{{ $gender->gender }}" readonly />
                            <div id="gender-button">
                                <a href="/genders" class="btn btn-secondary"
                                    style="font-size: 1.5rem; border-radius: 2rem; padding: 1rem 5rem;">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            var errorMessage = document.getElementById('error_message');

            if (errorMessage) {
                setTimeout(function() {
                    errorMessage.remove();
                }, 3000);
            }

            //This is to load the page inside the Content section to not redirecting to the page
            function loadContent(route, content) {
                fetch(route)
                    .then(response => response.text())
                    .then(data => {
                        // Update the content div with the fetched data
                        document.getElementById('content').innerHTML = data;
                        // Update the URL with the content type
                        history.pushState({}, content, route);
                    })
                    .catch(error => console.error('Error:', error));
            }
        </script>

        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    </body>
@endsection
