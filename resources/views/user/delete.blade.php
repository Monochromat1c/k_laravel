@extends('layout.main')
@section('content')
    <link rel="stylesheet" href="/css/dashboard.css">
    </head>

    <body>

        <div class="dashboard-container">
            <div id="dashboard">
                <div id="form-wrapper">
                    <form id="gender-form" action="/user/destroy/{{ $user->user_id }}" method="post">
                        @method('DELETE')
                        @csrf
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div id="input-wrapper">
                            <h2>Do you want to delete this user?</h2>
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
                                <div class="mb-3">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        value="{{ $user->first_name }}" placeholder="Enter your first name"  readonly />
                                </div>
                                <div class="mb-3">
                                    <label for="middle_name">Middle Name:</label>
                                    <input type="text" class="form-control" id="middle_name" name="middle_name"
                                        value="{{ $user->middle_name }}" placeholder="Enter your middle name"  readonly />
                                </div>
                                <div class="mb-3">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        value="{{ $user->last_name }}" placeholder="Enter your last name"  readonly />
                                </div>
                                <div class="mb-3">
                                    <label for="suffix_name">Suffix Name:</label>
                                    <input type="text" class="form-control" id="suffix_name" name="suffix_name"
                                        value="{{ $user->suffix_name }}" placeholder="Enter your suffix name"  readonly />
                                </div>
                                <div class="mb-3">
                                    <label for="birthday">Birth Date:</label>
                                    <input type="date" class="form-control" id="birthday" name="birthday"
                                        value="{{ $user->birthday }}" placeholder="Enter your birth date"  readonly />
                                </div>
                                <div class="mb-3">
                                    <label for="age">Gender</label>
                                    <select class="form-select user-form-select" name="gender_id">
                                        <option value="" selected>Select your gender:</option>
                                        @foreach ($genders as $gender)
                                            <option value="{{ $gender->gender_id }}"
                                                {{ $user->gender_id == $gender->gender_id ? 'selected' : '' }}>
                                                {{ $gender->gender }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 column-span-2">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        value="{{ $user->address }}" placeholder="Enter your address"  readonly />
                                </div>
                                <div class="mb-3 column-span-2">
                                    <label for="contact_number">Contact Number:</label>
                                    <input type="text" class="form-control" id="contact_number" name="contact_number"
                                        value="{{ $user->contact_number }}" placeholder="Enter your contact number"  readonly />
                                </div>
                                <div class="mb-3 column-span-2">
                                    <label for="email">Email Address:</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        value="{{ $user->email }}" placeholder="Enter your email address"  readonly />
                                </div>
                                <div class="mb-3 column-span-2">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control" id="username" name="username"
                                        value="{{ $user->username }}" placeholder="Enter your new username"  readonly />
                                </div>
                                <div class="mb-3 column-span-2">
                                    <label for="password">Password:</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        value="{{ $user->password }}" placeholder="Enter your new password"  readonly />
                                </div>
                            </section>
                            <div id="user-button" class="" style="display: flex; justify-content: space-between;">
                                <a href="/users" class="btn btn-secondary"
                                    style="font-size: 1.5rem; border-radius: 2rem; padding: 1rem 5rem;">Go Back</a>
                                <button style="font-size: 1.5rem; border-radius: 2rem; padding: 1rem 5rem;" type="submit"
                                    class="btn btn-danger">Delete User</button>
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
