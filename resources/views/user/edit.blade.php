@extends('layout.main_new')
@section('content')
    <link rel="stylesheet" href="/css/show-edit-delete.css">

    </head>

    <body>
        <div id="container" class="container form-container">
            <div id="form-wrapper"
                class="card background-color-gray-light-5 min-width-dvw-50 max-width-dvw-50 max-height-dvh-90 margin-top-3 margin-auto margin-bottom-2">
                <form id="user-form" action="/user/update/{{ $user->user_id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div id="input-wrapper">
                        <h1 class="margin-bottom-2 text-align-center">Edit User</h1>
                        @if ($errors->any())
                            <div id="error_message"
                                class="alert alert-danger background-color-error text-color-white padding-1 margin-bottom-half">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="error padding-bottom-half">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="margin-bottom-1">
                            <label for="user_image" class="min-width-percent-100">User Profile:</label>
                            <div class="file-input-container">
                                <input type="file"
                                    class="input-file border-radius border display-block min-width-percent-100"
                                    id="user_image" name="user_image" value="{{ $user->user_image }}" />
                            </div>
                        </div>
                        <section class="user-input-container">
                            <div class="margin-bottom-1">
                                <label for="first_name">First Name:</label>
                                <input type="text"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="first_name" name="first_name" value="{{ $user->first_name }}" />
                            </div>
                            <div class="margin-bottom-1">
                                <label for="middle_name">Middle Name:</label>
                                <input type="text"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="middle_name" name="middle_name" value="{{ $user->middle_name }}" />
                            </div>
                            <div class="margin-bottom-1">
                                <label for="last_name">Last Name:</label>
                                <input type="text"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="last_name" name="last_name" value="{{ $user->last_name }}" />
                            </div>
                            <div class="margin-bottom-1">
                                <label for="suffix_name">Suffix Name:</label>
                                <input type="text"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="suffix_name" name="suffix_name" value="{{ $user->suffix_name }}" />
                            </div>
                            <div class="margin-bottom-1">
                                <label for="birthday">Birth Date:</label>
                                <input type="date"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="birthday" name="birthday" value="{{ $user->birthday }}" />
                            </div>
                            <div class="mb-3">
                                <label for="age">Gender</label>
                                <select class="padding-half border-radius border display-block min-width-percent-100"
                                    name="gender_id">
                                    <option value="" selected>Select your gender:</option>
                                    @foreach ($genders as $gender)
                                        <option value="{{ $gender->gender_id }}"
                                            {{ $user->gender_id == $gender->gender_id ? 'selected' : '' }}>
                                            {{ $gender->gender }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="margin-bottom-1">
                                <label for="address">Address:</label>
                                <input type="text"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="address" name="address" value="{{ $user->address }}" />
                            </div>
                            <div class="margin-bottom-1">
                                <label for="contact_number">Contact Number:</label>
                                <input type="text"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="contact_number" name="contact_number" value="{{ $user->contact_number }}" />
                            </div>
                            <div class="margin-bottom-1 grid-column-span-2">
                                <label for="email">Email Address:</label>
                                <input type="text"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="email" name="email" value="{{ $user->email }}" />
                            </div>
                            <div class="margin-bottom-1 grid-column-span-2">
                                <label for="username">Username:</label>
                                <input type="text"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="username" name="username" value="{{ $user->username }}" />
                            </div>
                            <div class="mb-3 grid-column-span-2">
                                <label for="password">Password:</label>
                                <input type="password"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="password" name="password" value="{{ $user->password }}"
                                    placeholder="Enter your new password" />
                            </div>
                            <div class="mb-3 grid-column-span-2">
                                <label for="password_confirmation">Confirm Password:</label>
                                <input type="password"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="password_confirmation" name="password_confirmation"
                                    value="{{ $user->password }}" placeholder="Confirm your password" />
                            </div>
                        </section>
                        <div id="user-button" class="min-width-percent-100 display-flex justify-space-between">
                            <a href="/users" class="back-button button-gray border-radius-medium">Back</a>
                            <button type="submit"
                                class="submit-button button-secondary border-radius-medium">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script src="/js/error-message.js"></script>
        <script src="/js/success-message.js"></script>
        <script src="/js/links.js"></script>
        <script src="/js/sidebar-toggle.js"></script>
    </body>
@endsection
