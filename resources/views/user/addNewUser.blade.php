@extends('layout.main_new')
@section('content')
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/show-edit-delete.css">


    </head>

    <body>

        <div class="display-flex">
            <div class="sidebar min-width-dvw-20" id="sidebar">
                <div class="text-color-white display-flex flex-direction-column min-height-dvh-100">
                    <input type="checkbox" name="check" id="check" class="checkbox display-none">
                    <label for="check" class="x-container">
                        <i class="fa fa-x border-radius-full x font-size-large"></i>
                    </label>
                    <section class="margin-left-auto margin-right-auto">
                        <img src="/img/bg.png" class="sidebar-icon border-radius-full display-flex margin-auto"
                            alt="icon" srcset="">
                        <h2 class="margin-top-1 text-align-center">Administrator</h2>
                    </section>
                    <section>
                        <nav class="sidebar-link-container margin-top-5">
                            <ul class="list-container" id="list-container">
                                <h3 class="text-align-center">List</h3>
                                <li class="margin-bottom-half">
                                    <i class="padding-right-half fa-solid fa-mars"></i>
                                    <a href="/genders">Gender List</a>
                                </li>
                                <li class="margin-bottom-2">
                                    <i class="padding-right-half fa-solid fa-user"></i>
                                    <a href="/users">User List</a>
                                </li>
                                <h3 class="text-align-center">Form</h3>
                                <li class="margin-bottom-half">
                                    <i class="padding-right-half fa-solid fa-venus"></i>
                                    <a href="/gender/add">Gender Form</a>
                                </li>
                                <li class="margin-bottom-half">
                                    <i class="padding-right-half fa-solid fa-user-plus"></i>
                                    <a href="/user/add">User Form</a>
                                </li>
                            </ul>
                        </nav>
                    </section>
                </div>
            </div>
            <div class="content min-width-dvw-100">
                <div class="site">
                    <header class="navbar background-color-indigo-dark-9 max-width-dvw-100">
                        <h1 class="site-title text-color-white">
                            <input type="checkbox" name="check" id="check" class="checkbox display-none">
                            <label for="check" class="margin-right-1">
                                <i class="fa fa-bars border-radius-full font-size-large"></i>
                            </label>
                        </h1>
                        <h1 class="text-color-white">
                            Dashboard
                        </h1>
                        <a class="sign-out-btn button-error text-color-white padding-left-1 padding-right-1 padding-top-half padding-bottom-half display-flex align-items-center"
                            href="/user/process/logout">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            <p class="sign-out-label">Sign Out</p>
                        </a>
                    </header>
                    <main class="margin-bottom-3">
                        <div id="container" class="container form-container">
                            <div id="form-wrapper"
                                class="card background-color-gray-light-5 min-width-dvw-50 max-width-dvw-50 max-height-dvh-90 margin-top-3 margin-auto margin-bottom-2">
                                <form id="user-form" action="/user/add" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @if (session()->has('message'))
                                        <div id="success-message"
                                            class="alert alert-success background-color-secondary text-color-white padding-1 text-align-center margin-bottom-half">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                    <div id="input-wrapper">
                                        <h1 class="margin-bottom-2 text-align-center">Add New User</h1>
                                        @if ($errors->any())
                                            <div id="success-message"
                                                class="alert alert-success background-color-error text-color-white padding-1 margin-bottom-half">
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
                                                    id="user_image" name="user_image" />
                                            </div>
                                        </div>
                                        <section class="user-input-container">
                                            <div class="margin-bottom-1">
                                                <label for="first_name">First Name:</label>
                                                <input type="text"
                                                    class="padding-half border-radius border display-block min-width-percent-100"
                                                    id="first_name" name="first_name" />
                                            </div>
                                            <div class="margin-bottom-1">
                                                <label for="middle_name">Middle Name:</label>
                                                <input type="text"
                                                    class="padding-half border-radius border display-block min-width-percent-100"
                                                    id="middle_name" name="middle_name" />
                                            </div>
                                            <div class="margin-bottom-1">
                                                <label for="last_name">Last Name:</label>
                                                <input type="text"
                                                    class="padding-half border-radius border display-block min-width-percent-100"
                                                    id="last_name" name="last_name" />
                                            </div>
                                            <div class="margin-bottom-1">
                                                <label for="suffix_name">Suffix Name:</label>
                                                <input type="text"
                                                    class="padding-half border-radius border display-block min-width-percent-100"
                                                    id="suffix_name" name="suffix_name" />
                                            </div>
                                            <div class="margin-bottom-1">
                                                <label for="birthday">Birth Date:</label>
                                                <input type="date"
                                                    class="padding-half border-radius border display-block min-width-percent-100"
                                                    id="birthday" name="birthday" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="age">Gender</label>
                                                <select
                                                    class="padding-half border-radius border display-block min-width-percent-100"
                                                    name="gender_id">
                                                    <option value="" selected>Select your gender:</option>
                                                    @foreach ($genders as $gender)
                                                        <option value="{{ $gender->gender_id }}">{{ $gender->gender }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="margin-bottom-1">
                                                <label for="address">Address:</label>
                                                <input type="text"
                                                    class="padding-half border-radius border display-block min-width-percent-100"
                                                    id="address" name="address" />
                                            </div>
                                            <div class="margin-bottom-1">
                                                <label for="contact_number">Contact Number:</label>
                                                <input type="text"
                                                    class="padding-half border-radius border display-block min-width-percent-100"
                                                    id="contact_number" name="contact_number" />
                                            </div>
                                            <div class="margin-bottom-1 grid-column-span-2">
                                                <label for="email">Email Address:</label>
                                                <input type="text"
                                                    class="padding-half border-radius border display-block min-width-percent-100"
                                                    id="email" name="email" />
                                            </div>
                                            <div class="margin-bottom-1 grid-column-span-2">
                                                <label for="username">Username:</label>
                                                <input type="text"
                                                    class="padding-half border-radius border display-block min-width-percent-100"
                                                    id="username" name="username" />
                                            </div>
                                            <div class="mb-3 grid-column-span-2">
                                                <label for="password">Password:</label>
                                                <input type="password"
                                                    class="padding-half border-radius border display-block min-width-percent-100"
                                                    id="password" name="password"
                                                    placeholder="Enter your new password" />
                                            </div>
                                            <div class="mb-3 grid-column-span-2">
                                                <label for="password_confirmation">Confirm Password:</label>
                                                <input type="password"
                                                    class="padding-half border-radius border display-block min-width-percent-100"
                                                    id="password_confirmation" name="password_confirmation"
                                                    placeholder="Confirm your password" />
                                            </div>
                                        </section>
                                        <div id="user-button" class="min-width-percent-100 display-flex">
                                            <button type="submit"
                                                class="submit-button button-secondary border-radius-medium margin-left-auto">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>

        <script src="/js/search.js"></script>
        <script src="/js/links.js"></script>
        <script src="/js/success-message.js"></script>
        <script src="/js/sidebar-toggle.js"></script>
    </body>
@endsection
