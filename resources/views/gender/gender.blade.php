@extends('layout.main_new')
@section('content')
    </head>

    <body onload="loadPage()">

        <div class="display-flex">
            <div class="sidebar min-width-dvw-20 max-width-dvw-20 min-height-dvh-100" id="sidebar">
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
                    <header class="navbar background-color-primary max-width-dvw-100">
                        <h1 class="site-title text-color-white">
                            <input type="checkbox" name="check" id="check" class="checkbox display-none">
                            <label for="check" class="margin-right-1">
                                <i class="fa fa-bars border-radius-full font-size-large"></i>
                            </label>
                        </h1>
                        <h1 class="margin-left-auto margin-right-auto text-color-white">
                            Dashboard
                        </h1>
                    </header>
                    <main class="margin-bottom-3">
                        <div class="container">
                            <div id="dashboard" class="margin-top-3 background-color-indigo-light-9  padding-2 border-radius-large">
                                <h1>List of Available Gender</h1>
                                <div class="margin-top-half">
                                    <div class="">
                                        <div class="display-flex justify-space-between" id="pagination">
                                            {{ $genders->links('vendor.pagination.custom-pagination') }}
                                        </div>
                                    </div>
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
                                        <tbody id="tableBody">
                                            @foreach ($genders as $gender)
                                                <tr>
                                                    <td>{{ $gender->gender }}</td>
                                                    <td>{{ $gender->created_at }}</td>
                                                    <td>{{ $gender->updated_at }}</td>
                                                    <td>
                                                        <div class="display-flex justify-center">
                                                            <a href="/gender/show/{{ $gender->gender_id }}"
                                                                class="button-secondary text-color-white">View</a>
                                                            <a href="/gender/edit/{{ $gender->gender_id }}"
                                                                class="button-gray text-color-white">Edit</a>
                                                            <a href="/gender/delete/{{ $gender->gender_id }}"
                                                                class="button-error text-color-white">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{-- <footer></footer> --}}
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>

        <div class="dashboard-container">
            <div id="sidebar-wrapper">
                <div id="sidebar">
                    <h3 id="title" class="title">
                        &lt;/Hello<span class="world">World</span>&gt;
                    </h3>
                    <img id="sidebar-icon" src="img/bg.png" alt="icon">
                    <h4 id="name" class="name">
                        Jammy Jellyfish
                    </h4>
                    <nav>
                        <ul>
                            <li class="{{ Request::url() == url('/') ? 'active' : '' }} {{ Request::is('genders') ? 'active' : '' }} sidebar-link"
                                data-title="View Gender List">
                                <i class="fa-solid fa-mars"></i><a class="links" href="/genders">Gender</a>
                            </li>
                            <li class="sidebar-link" data-title="View User List"><i class="fa-solid
        fa-user"></i><a
                                    class="links" href="/users">User</a></li>
                            <li class="sidebar-link" data-title="Add New Gender"><i class="fa-solid fa-venus"></i><a
                                    class="links" href="/gender/add">Add New Gender</a></li>
                            <li class="sidebar-link" data-title="Add New User"><i class="fa-solid fa-user-plus"></i><a
                                    class="links" href="/user/add">Add New User</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
            <div id="dashboard">
                <h1>Dashboard</h1>
                <div class="gender-table-container container">
                    <div class="table-header">
                        <h2>Gender List</h2>
                        <div id="pagination">
                            {{-- <form id="searchForm" class="d-flex" role="search">
                                    <input id="searchInput" class="form-control me-2" type="search"
                                        placeholder="Search for available gender" aria-label="Search">
                                </form> --}}
                            {{ $genders->links('vendor.pagination.custom-pagination') }}
                        </div>
                    </div>
                    <table class="table table-striped">
                        @if (session()->has('message'))
                            <div id="success-message" class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <thead>
                            <tr>
                                <th>Gender</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            @foreach ($genders as $gender)
                                <tr>
                                    <td>{{ $gender->gender }}</td>
                                    <td>{{ $gender->created_at }}</td>
                                    <td>{{ $gender->updated_at }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/gender/show/{{ $gender->gender_id }}"
                                                class="btn btn-outline-primary">View</a>
                                            <a href="/gender/edit/{{ $gender->gender_id }}"
                                                class="btn btn-outline-warning">Edit</a>
                                            <a href="/gender/delete/{{ $gender->gender_id }}"
                                                class="btn btn-outline-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <footer></footer> --}}
                </div>
            </div>
        </div>

        <script src="/js/search.js"></script>
        <script src="/js/success-message.js"></script>
        <script src="/js/sidebar-toggle.js"></script>
    </body>
@endsection
