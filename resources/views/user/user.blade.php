@extends('layout.main')
@section('content')
    <link rel="stylesheet" href="/css/dashboard.css">
    </head>

    <body onload="loadPage()">

        <div class="dashboard-container">
            <div id="sidebar-wrapper">
                <div id="sidebar">
                    <a href="javascript:void(0)" id="closebtn" class="closebtn" onclick="closeNav()"
                        data-title="Minimize Sidebar"><i class="fa-solid fa-xmark"></i></a>
                    <a href="javascript:void(0)" id="openbtn" class="openbtn" onclick="openNav()"
                        data-title="Maximize Sidebar"><i class="fa-solid fa-bars"></i></a>
                    <h3 id="title" class="title">
                        &lt;/Hello<span class="world">World</span>&gt;
                    </h3>
                    <img id="sidebar-icon" src="img/bg.png" alt="icon">
                    <h4 id="name" class="name">
                        Jammy Jellyfish
                    </h4>
                    <nav>
                        <ul>
                            <li class="sidebar-link" data-title="View Gender List">
                                <i class="fa-solid fa-mars"></i><a class="links" href="/genders">Gender</a>
                            </li>
                            <li class="{{ Request::url() == url('/') ? 'active' : '' }} {{ Request::is('users') ? 'active' : '' }} sidebar-link" data-title="View User List"><i class="fa-solid
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
                        <h2>User List</h2>
                        <div id="pagination">
                                {{-- <form id="searchForm" class="d-flex" role="search">
                                    <input id="searchInput" class="form-control me-2" type="search"
                                        placeholder="Search for available gender" aria-label="Search">
                                </form> --}}
                            {{ $users->links('vendor.pagination.custom-pagination') }}
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
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Suffix Name</th>
                                <th>Gender</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->middle_name }}</td>
                                    <td>{{ $user->suffix_name }}</td>
                                    <td>{{ $user->gender->gender }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/user/show/{{ $user->user_id }}"
                                                class="btn btn-outline-primary">View</a>
                                            <a href="/user/edit/{{ $user->user_id }}"
                                                class="btn btn-outline-warning">Edit</a>
                                            <a href="/user/delete/{{ $user->user_id }}"
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
        <script src="/js/links.js"></script>
        <script src="/js/sidebar-toggle.js"></script>
        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    </body>
@endsection
