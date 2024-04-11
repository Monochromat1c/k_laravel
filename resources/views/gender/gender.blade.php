@extends('layout.main_new')
@section('content')
    </head>

    <body onload="loadPage()">

        <div class="display-flex">
            <div class="sidebar min-width-dvw-20" id="sidebar">
                <div class="text-color-white display-flex flex-direction-column min-height-dvh-100">
                    <input type="checkbox" name="check" id="check" class="checkbox display-none">
                    <label for="check" class="x-container">
                        <i class="fa fa-x border-radius-full x font-size-large"></i>
                    </label>
                    <section class="margin-left-auto margin-right-auto">
                        <img src="/img/bg.png" class="sidebar-icon border-radius-full" alt="" srcset="">
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
                            href="javascript:void(0)">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            <p class="sign-out-label">Sign Out</p>
                        </a>
                    </header>
                    <main class="margin-bottom-3">
                        <div class="container">
                            <div id="dashboard"
                                class="margin-top-3 background-color-gray-light-6 padding-bottom-1 border-radius-large table-container">
                                <section class="table-header padding-left-2 padding-right-2 ">
                                    <h1 class="padding-top-1 padding-bottom-1">List of Available Gender</h1>
                                </section>
                                <div class="margin-top-half padding-left-2 padding-right-2 display-flex flex-direction-column justify-space-between min-height-percent-100" id="table-container">
                                    <table class="min-width-percent-100">
                                        @if (session()->has('message'))
                                            <div id="success-message"
                                                class="background-color-secondary text-color-white padding-1 text-align-center margin-bottom-half">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                        <thead class="background-color-white">
                                            <tr>
                                                <th>Gender</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tableBody" class="min-width-percent-100">
                                            @foreach ($genders as $gender)
                                                <tr class="table-row">
                                                    <td>{{ $gender->gender }}</td>
                                                    <td>{{ $gender->created_at }}</td>
                                                    <td>{{ $gender->updated_at }}</td>
                                                    <td>
                                                        <div class="display-flex justify-center button-group">
                                                            <a href="/gender/show/{{ $gender->gender_id }}"
                                                                class="button-secondary padding-top-half padding-bottom-half padding-left-1 padding-right-1 text-color-white margin-bottom-half margin-top-half">View</a>
                                                            <a href="/gender/edit/{{ $gender->gender_id }}"
                                                                class="button-gray padding-top-half padding-bottom-half padding-left-1 padding-right-1 text-color-white margin-bottom-half margin-top-half">Edit</a>
                                                            <a href="/gender/delete/{{ $gender->gender_id }}"
                                                                class="button-error padding-top-half padding-bottom-half padding-left-1 padding-right-1 text-color-white margin-bottom-half margin-top-half">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="display-flex justify-space-between position-absolute" id="pagination">
                                        {{ $genders->links('vendor.pagination.custom-pagination') }}
                                    </div>
                                </div>
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
