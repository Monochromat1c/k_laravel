@extends('layout.main_new')
@section('content')
    <link rel="stylesheet" href="/css/show-edit-delete.css">

    </head>

    <body>
        <div id="container" class="container form-container">
            <div id="form-wrapper"
                class="card background-color-gray-light-5 min-width-dvw-50 max-width-dvw-50 max-height-dvh-90 margin-top-3 margin-auto margin-bottom-2">
                <form id="gender-form" action="/user/destroy/{{ $user->user_id }}" method="post">
                    @method('DELETE')
                    @csrf
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div id="input-wrapper">
                        <h1 class="margin-bottom-2 text-align-center text-color-error-dark-3">Are you sure you want to
                            delete this user?</h1>
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
                            <div class="margin-bottom-1">
                                <label for="first_name">First Name:</label>
                                <input type="text"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="first_name" name="first_name" value="{{ $user->first_name }}" readonly />
                            </div>
                            <div class="margin-bottom-1">
                                <label for="middle_name">Middle Name:</label>
                                <input type="text"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="middle_name" name="middle_name" value="{{ $user->middle_name }}" readonly />
                            </div>
                            <div class="margin-bottom-1">
                                <label for="last_name">Last Name:</label>
                                <input type="text"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="last_name" name="last_name" value="{{ $user->last_name }}" readonly />
                            </div>
                            <div class="margin-bottom-1">
                                <label for="suffix_name">Suffix Name:</label>
                                <input type="text"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="suffix_name" name="suffix_name" value="{{ $user->suffix_name }}" readonly />
                            </div>
                            <div class="margin-bottom-1">
                                <label for="birthday">Birth Date:</label>
                                <input type="date"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="birthday" name="birthday" value="{{ $user->birthday }}" readonly />
                            </div>
                            <div class="margin-bottom-1">
                                <label for="gender">Gender:</label>
                                <input type="text"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="gender" name="gender" value="{{ $user->gender->gender }}" readonly />
                            </div>
                            <div class="margin-bottom-1">
                                <label for="address">Address:</label>
                                <input type="text"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="address" name="address" value="{{ $user->address }}" readonly />
                            </div>
                            <div class="margin-bottom-1">
                                <label for="contact_number">Contact Number:</label>
                                <input type="text"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="contact_number" name="contact_number" value="{{ $user->contact_number }}"
                                    readonly />
                            </div>
                            <div class="margin-bottom-1 grid-column-span-2">
                                <label for="email">Email Address:</label>
                                <input type="text"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="email" name="email" value="{{ $user->email }}" readonly />
                            </div>
                            <div class="margin-bottom-1 grid-column-span-2">
                                <label for="username">Username:</label>
                                <input type="text"
                                    class="padding-half border-radius border display-block min-width-percent-100"
                                    id="username" name="username" value="{{ $user->username }}" readonly />
                            </div>
                        </section>
                        <div id="user-button" class="min-width-percent-100 display-flex justify-space-between">
                            <a href="/users" class="back-button button-gray border-radius-medium">Back</a>
                            <button type="submit" class="submit-button button-error border-radius-medium">Delete</button>
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