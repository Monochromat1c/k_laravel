@extends('layout.main')
@section('content')
    <link rel="stylesheet" href="/css/dashboard.css">
    </head>

    <body onload="loadPage()">

        <div class="dashboard-container">
            <div id="dashboard">
                <h1></h1>
                <div id="user-form-wrapper">
                    <form id="user-form" action="/user/update/{{ $user->user_id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div id="user-input-wrapper">
                            <h2>Edit User</h2>
                            @if (session()->has('message'))
                                <div id="success-message" class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div id="error_message" id="error" class="alert alert-danger">
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
                                        value="{{ $user->first_name }}" placeholder="Enter your first name" />
                                </div>
                                <div class="mb-3">
                                    <label for="middle_name">Middle Name:</label>
                                    <input type="text" class="form-control" id="middle_name" name="middle_name"
                                        value="{{ $user->middle_name }}" placeholder="Enter your middle name" />
                                </div>
                                <div class="mb-3">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        value="{{ $user->last_name }}" placeholder="Enter your last name" />
                                </div>
                                <div class="mb-3">
                                    <label for="suffix_name">Suffix Name:</label>
                                    <input type="text" class="form-control" id="suffix_name" name="suffix_name"
                                        value="{{ $user->suffix_name }}" placeholder="Enter your suffix name" />
                                </div>
                                <div class="mb-3">
                                    <label for="birthday">Birth Date:</label>
                                    <input type="date" class="form-control" id="birthday" name="birthday"
                                        value="{{ $user->birthday }}" placeholder="Enter your birth date" />
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
                                        value="{{ $user->address }}" placeholder="Enter your address" />
                                </div>
                                <div class="mb-3 column-span-2">
                                    <label for="contact_number">Contact Number:</label>
                                    <input type="text" class="form-control" id="contact_number" name="contact_number"
                                        value="{{ $user->contact_number }}" placeholder="Enter your contact number" />
                                </div>
                                <div class="mb-3 column-span-2">
                                    <label for="email">Email Address:</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        value="{{ $user->email }}" placeholder="Enter your email address" />
                                </div>
                                <div class="mb-3">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control" id="username" name="username"
                                        value="{{ $user->username }}" placeholder="Enter your new username" />
                                </div>
                                <div class="mb-3">
                                    <label for="password">Password:</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        value="{{ $user->password }}" placeholder="Enter your new password" />
                                </div>
                                <div class="mb-3">
                                    <label for="password_confirmation">Confirm Password:</label>
                                    <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation" value="{{ $user->password }}"
                                        placeholder="Confirm your password" />
                                </div>
                            </section>
                            <div id="user-button" class="" style="display: flex; justify-content: space-between;">
                                <a href="/users" class="btn btn-secondary"
                                    style="font-size: 1.5rem; border-radius: 2rem; padding: 1rem 5rem;">Back</a>
                                <button type="submit" class="btn btn-success user-submit-button"
                                    style="font-size: 1.5rem; border-radius: 2rem; padding: 1rem 5rem;">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="/js/error-message.js"></script>
        <script src="/js/success-message.js"></script>
        <script src="/js/links.js"></script>
        <script src="/js/sidebar-toggle.js"></script>
        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    </body>
@endsection
