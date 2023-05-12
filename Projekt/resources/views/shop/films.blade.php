@extends('shop.layout')
@section('content')
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Blu-Ray movie rental mail order platform</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Blu-Ray movie rental mail order
                        platform</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('shop.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('shop.films') }}">More films</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                My account
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="{{ route('shop.account') }}">Personal data</a></li>
                                <li>
                                    <a class="dropdown-item" href="">My busket</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Log out</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div id="margin">

        <div class="table-responsive">
            <table class="table table-dark table-striped" id="margin">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Time</th>
                        <th>Relese Date</th>
                        <th>Country</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($film as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img class="imidz" src="data:image/jpeg;base64,{{ base64_encode($item->image) }}">
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->time }}</td>
                            <td>{{ $item->relese_date }}</td>
                            <td>{{ $item->country }}</td>
                            <td>{{ $item->price }}</td>
                            <td>
                                <form wire:submit.prevent="addToCart({{ $item->id }})" action="" method="POST">
                                        <p class="btn-holder"><a href="{{ route('add_to_basket', $item->id) }}" class="btn btn-primary btn-block text-center" role="button">Add to basket</a> </p>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection