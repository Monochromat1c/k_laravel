@extends('layout.main_new')
@section('content')
    </head>

    <body onload="loadPage()">

        <div class="display-flex">
            <div class="sidebar min-width-dvw-20 min-height-dvh-100" id="sidebar">
                <div class="text-color-white display-flex flex-direction-column justify-center align-items-center">
                    <input type="checkbox" name="check" id="check" class="checkbox display-none">
                    <label for="check" class="x-container">
                        <i class="fa fa-x border-radius-full x font-size-large"></i>
                    </label>
                    <h1>Sidebar</h1>
                    Sidebar
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
                                class="margin-top-3 background-color-gray-light-6 padding-2 border-radius-large table-container">
                                <section class="table-header">
                                    <h1>List of Available Gender</h1>
                                    <div class="display-flex justify-space-between" id="pagination">
                                        {{ $genders->links('vendor.pagination.custom-pagination') }}
                                    </div>
                                </section>
                                <div class="margin-top-half">
                                    <table class="min-width-percent-100">
                                        @if (session()->has('message'))
                                            <div id="success-message" class="alert alert-success">
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
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>

        <script src="/js/search.js"></script>
        <script src="/js/success-message.js"></script>
        <script src="/js/sidebar-toggle.js"></script>
    </body>
@endsection
