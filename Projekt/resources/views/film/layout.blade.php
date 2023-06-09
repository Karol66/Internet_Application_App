<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/admin_panel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">


    <style>
        body {
            background-color: #1c1f23;
            color: white;
            font-family: 'Roboto Slab', serif;
        }

        .form-control-dark {
            color: #fff;
            background-color: #ffffff1a;
            border-color: #ffffff1a;
        }

        .form-control-dark:focus {
            border-color: transparent;
            box-shadow: 0 0 0 3px #ffffff1a;
        }

        /* Add this style to make the search bar narrower */
        @media (min-width: 992px) {
            .form-control-dark {
                height: 40px;
                width: 900px;
                display: inline-block;
                margin-right: 5px;
            }
        }

        @media (max-width: 992px) {
            .form-control-dark {
                height: 40px;
                width: 130px;
                display: inline-block;
                margin-right: 5px;
            }
        }


        .sidebar {
            background-color: #5a1212 !important;
        }

        .nav-link:hover {
            color: #c32828 !important;
        }

        a {
            color: white !important;
        }

        .btn-success {
            background-color: rgba(44, 117, 59, 0.897);
            border-color: transparent;
        }

        input[type="file"] {
            display: none;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .film-image {
            width: 350px;
            height: 500px;
            margin-top: 40px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: 1px solid #ccc;
            display: inline-block;
            overflow: hidden;
        }

        .film-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            margin: 0;
        }

        .form-fields {
            padding-top: 20px;
        }

        .form-fields .form-group {
            width: 100%;
        }

        .form-control {
            width: 60%;
            background-color: rgba(255, 255, 255, 0.1);
            border: transparent;
            color: white;
        }

        @media (min-width: 768px) {
            .film-image {
                float: left;
                margin-right: 20px;
            }

            .form-fields {
                float: left;
                width: calc(100% - 380px);
            }
        }

        @media (max-width: 767px) {
            .form-check {
                flex-basis: 100%;
            }
        }

        .form-check-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .form-check-group .form-check {
            flex-basis: calc(50% - 5px);
            max-width: calc(50% - 5px);
            margin-bottom: 10px;
        }

        @media (max-width: 575px) {
            .form-check-group .form-check {
                flex-basis: 100%;
                max-width: 100%;
            }
        }
    </style>


</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Movie <span
                style="color: #a51a1a;">cave</span></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="w-100 d-flex" action="{{ route('film.search') }}" method="GET">
            <input class="form-control form-control-dark me-2" name="search" type="text" placeholder="Search"
                aria-label="Search" style="width: 50%">
            <button class="btn btn-success" type="submit">Search</button>
        </form>

        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="{{ route('logout') }}">Sign out</a>
            </div>
        </div>
    </header>


    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('film.index') }}">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('film.films') }}">
                                <span data-feather="shopping-cart"></span>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">
                                <span data-feather="users"></span>
                                Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('film.transactions') }}">
                                <span data-feather="bar-chart-2"></span>
                                Transactions
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('film.add') }}">
                                <span data-feather="layers"></span>
                                Add New Film
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>

    <script>
        feather.replace();
    </script>

</body>

</html>
