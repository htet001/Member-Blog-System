<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
    /* Custom CSS styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
    }

    .navbar {
        background-color: #ffa200;
    }

    .navbar-collapse {
        flex-grow: 0;
    }

    .navbar-brand,
    .navbar-nav .nav-link {
        color: #fff;
    }

    .nav-link {
        background-color: #e74c3c;
        border: none;
        border-radius: 25px;
        margin-right: 10px;
    }

    .navbar-nav .nav-link:hover {
        background-color: white;
        color: black;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}"><i class="fa-sharp fa-solid fa-house-chimney"
                    style="color: #ffffff;"></i> Easy Market</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Search Bar -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <span class="nav-link"><i class="fa fa-user-circle" aria-hidden="true"></i>
                            {{auth()->user()->name}}</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout"><i class="fa-sharp fa-solid fa-sign-out"
                                aria-hidden="true"></i>
                            Logout</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="register">
                            <i class="fa-sharp fa-solid fa-user-plus"></i> Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">
                            <i class="fa-sharp fa-solid fa-arrow-right-to-bracket"></i>
                            Login</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>