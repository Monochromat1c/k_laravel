@extends('layout.main_new')
@section('content')
    <link rel="stylesheet" href="/css/show-edit-delete.css">

    </head>

    <body>
            <div id="container" class="container display-flex justify-center">
                <div id="form-wrapper" class="card background-color-gray-light-5 min-width-dvw-50 max-width-dvw-50 max-height-dvh-90 margin-top-3 margin-bottom-2">
                    <form id="gender-form" class="" action="" method="POST">
                        @csrf
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div id="input-wrapper">
                            <h1 class="margin-bottom-2 text-align-center">View User</h1>
                            @if ($errors->any())
                                <div id="error_message" class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li class="error">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <section class="user-input-container">
                                <div class="display-flex flex-direction-column margin-bottom-1">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" class="padding-half border-radius border" id="first_name" name="first_name"
                                        value="{{ $user->first_name }}" readonly />
                                </div>
                                <div class="display-flex flex-direction-column margin-bottom-1">
                                    <label for="middle_name">Middle Name:</label>
                                    <input type="text" class="padding-half border-radius border" id="middle_name" name="middle_name"
                                        value="{{ $user->middle_name }}" readonly />
                                </div>
                                <div class="display-flex flex-direction-column margin-bottom-1">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" class="padding-half border-radius border" id="last_name" name="last_name"
                                        value="{{ $user->last_name }}" readonly />
                                </div>
                                <div class="display-flex flex-direction-column margin-bottom-1">
                                    <label for="suffix_name">Suffix Name:</label>
                                    <input type="text" class="padding-half border-radius border" id="suffix_name" name="suffix_name"
                                        value="{{ $user->suffix_name }}" readonly />
                                </div>
                                <div class="display-flex flex-direction-column margin-bottom-1">
                                    <label for="birthday">Birth Date:</label>
                                    <input type="date" class="padding-half border-radius border" id="birthday" name="birthday"
                                        value="{{ $user->birthday }}" readonly />
                                </div>
                                <div class="display-flex flex-direction-column margin-bottom-1">
                                    <label for="gender">Gender:</label>
                                    <input type="text" class="padding-half border-radius border" id="gender" name="gender"
                                        value="{{ $user->gender->gender }}" readonly />
                                </div>
                                <div class="display-flex flex-direction-column margin-bottom-1 column-span-2">
                                    <label for="address">Address:</label>
                                    <input type="text" class="padding-half border-radius border" id="address" name="address"
                                        value="{{ $user->address }}" readonly />
                                </div>
                                <div class="display-flex flex-direction-column margin-bottom-1 column-span-2">
                                    <label for="contact_number">Contact Number:</label>
                                    <input type="text" class="padding-half border-radius border" id="contact_number" name="contact_number"
                                        value="{{ $user->contact_number }}" readonly />
                                </div>
                                <div class="display-flex flex-direction-column margin-bottom-1 column-span-2">
                                    <label for="email">Email Address:</label>
                                    <input type="text" class="padding-half border-radius border" id="email" name="email"
                                        value="{{ $user->email }}" readonly />
                                </div>
                                <div class="display-flex flex-direction-column margin-bottom-1 column-span-2">
                                    <label for="username">Username:</label>
                                    <input type="text" class="padding-half border-radius border" id="username" name="username"
                                        value="{{ $user->username }}" readonly />
                                </div>
                                <div id="user-button" class="">
                                    <a href="/users" class="button-gray text-color-white padding-button-1 border-radius-large float-inline-end">Back</a>
                                </div>
                            </section>
                        </div>
                    </form>
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
