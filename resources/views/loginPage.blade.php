@extends('layout.main_new')
@section('content')
    <link rel="stylesheet" href="/css/loginForm.css">
    </head>

    <body>
        <div class="site">
            <main>
                <div class="form__container">
                    <div class="form__image">
                        <div class="kezia ">
                            Cute cute gid ni kezia a HAHAHAHA
                        </div>
                        <img src="/img/user.png" alt="">
                    </div>
                    <div class="form">
                        <form action="/user/process/login" method="post">
                            @csrf
                            <h1>Welcome!</h1>
                            <h3 class="margin-bottom-1">New here? <a href="javascript:void(0)">Create an account now</a>
                            </h3>
                            <h2 class="margin-bottom-1">Log In</h2>
                            <div class="display-flex flex-direction-column">
                                <label for="username">Username:</label>
                                <input type="text" class="padding-half text-color-black" id="username" name="username"
                                    placeholder="Enter your username" />
                                @error('username')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="display-flex flex-direction-column margin-bottom-1">
                                <label for="password">Password:</label>
                                <input type="password" class="padding-half text-color-black" id="password" name="password"
                                    placeholder="Enter your password" />
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="float-inline-end button-secondary border-radius-medium padding-button-2">Log In</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>

        {{-- Form --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.form__container').on('click focusin', function() {
                    $(this).addClass('active');
                });

                $(document).on('click focusin', function(e) {
                    if (!$(e.target).closest('.form__container').length) {
                        $('.form__container').removeClass('active');
                    }
                });
            });
        </script>
        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    </body>
@endsection
