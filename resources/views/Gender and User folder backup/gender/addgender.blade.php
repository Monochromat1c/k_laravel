@extends('layout.main')
@section('content')
    <link rel="stylesheet" href="/css/dashboard.css">
    </head>

    <body onload="loadPage()">

        <div class="dashboard-container">
            <div id="sidebar-wrapper">
                <div id="sidebar">
                    <a href="javascript:void(0)" id="closebtn" class="closebtn" onclick="closeNav()"><i
                            class="fa-solid fa-xmark"></i></a>
                    <a href="javascript:void(0)" id="openbtn" class="openbtn" onclick="openNav()"><i
                            class="fa-solid fa-bars"></i></a>
                    <h3 id="title" class="title">
                        &lt;/Hello<span class="world">World</span>&gt;
                    </h3>
                    <img id="sidebar-icon" src="img/bg.png" alt="icon">
                    <h4 id="name" class="name">
                        Jammy Jellyfish
                    </h4>
                    <nav>
                        <ul>
                            <li>
                                <i class="fa-solid fa-mars"></i><a class="links" href="genders">Gender</a>
                            </li>
                            <li><i class="fa-solid
                                    fa-user"></i><a class="links"
                                    href="">User</a></li>
                            <li
                                class="{{ Request::url() == url('/') ? 'active' : '' }} {{ Request::is('/gender/add') ? 'active' : '' }}">
                                <i class="fa-solid fa-venus"></i><a class="links" href="/gender/add">Add New Gender</a>
                            </li>
                            <li><i class="fa-solid fa-user-plus"></i><a class="links" href="">Add New User</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="dashboard">
                <h1>Dashboard</h1>
                <div id="form-wrapper">
                    <form id="gender-form" action="/gender/add" method="POST">
                        @csrf
                        <div id="input-wrapper">
                            <h2>Add New Gender</h2>
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
                            <label for="gender" class="form-label">Enter New Gender:</label>
                            <input type="text" id="input" class="form-control" id="gender"
                                placeholder="Male/Female/Etc." name="gender" />
                            <div id="gender-button">
                                <button type="submit" class="btn btn-success">Save</button>
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
