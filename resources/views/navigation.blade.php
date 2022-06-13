<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<title>SD Pagi Sore</title>
</head>
<nav class="navbar bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('blue-eyes.png') }}" width="90" height="50">
        </a>
        <div class="relative flex items-top justify-center min-h-screen">
            @if (Route::has('login'))
                <div class="hidden fixed ">
                    @auth
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                {{Auth::user()->name}}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item" href="#">Something</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Log Out</a></li>
                            </ul>
                        </div>
                        
                    @else
                        <a href="{{ route('login') }}">
                            <button class="btn btn-sm btn-outline-primary">log In</button>
                         </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                                <button class="btn btn-sm btn-outline-primary">Register</button>
                             </a> 
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>

</nav>
    <ul class="nav justify-content-center bg-dark">
        <li class="nav-item">
            <a class="nav-link active" href="/home">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/home/tentang">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
    </ul>
    <br/>
    <br/>
    @yield('title')
    @yield('content')

    <br/>
    <br/>
    <footer>
        <p align="center" >&copy; <a href="https://www.google.com">kumaha aing</a>. 2022</p>

</html>


