@extends('layout.main')
@section('content')
    <link rel="stylesheet" href="/css/dashboard.css">
    </head>

    <body onload="closeNav()">

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
                                <i class="fa-solid fa-mars"></i><a class="links" href="/genders">Gender</a>
                            </li>
                            <li><i class="fa-solid
                                    fa-user"></i><a class="links"
                                    href="/users">User</a></li>
                            <li><i class="fa-solid fa-venus"></i><a class="links" href="/gender/add">Add New Gender</a>
                            </li>
                            <li><i class="fa-solid fa-user-plus"></i><a class="links" href="/user/add">Add New User</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="dashboard">
                {{-- <h1>Dashboard</h1> --}}
                @yield('dynamic_content')
            </div>
        </div>

        <script src="/js/links.js"></script>
        <script src="/js/sidebar-toggle.js"></script>
        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    </body>
@endsection
