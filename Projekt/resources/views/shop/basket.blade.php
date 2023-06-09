@extends('shop.layout')

@section('content')

    @if (session('message'))
        <div class="alert alert-warning" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <div id="margin">
        <div class="table-responsive">
            <table class="table table-dark table-striped" id="margin">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Number Of Days</th>
                        <th>Total Piece Prices</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (session('basket'))
                        @foreach (session('basket') as $id => $details)
                            <tr data-id="{{ $id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td data-th="Product">
                                    <div class="row">
                                        <div>
                                            @php
                                                $product = \App\Models\Film::find($id);
                                                $image = base64_encode($product->image);
                                            @endphp
                                            <img class="imidz" src="data:image/png;base64,{{ $image }}" />
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">{{ $details['name'] }}</h4>
                                    </div>
                                </td>
                                <td data-th="Price">${{ $details['price'] }}</td>
                                <td>
                                    <form action="{{ route('update_basket', $id) }}" method="POST">
                                        @csrf
                                        <div class="input-group">
                                            <input type="number" name="quantity" value="{{ $details['quantity'] }}"
                                                class="form-control form-control-sm quantity cart-update short-input"
                                                min="1" data-id="{{ $id }}" style="width: 30px;" />
                                            <input type="hidden" name="film_id" value="{{ $id }}">
                                            <button type="submit" class="btn btn-primary buy">Update</button>
                                        </div>
                                    </form>
                                </td>
                                <td data-th="Subtotal" class="text-center">
                                    <span class="subtotal">$ {{ $details['price'] * $details['quantity'] }}</span>
                                </td>
                                <td>
                                    <form action="{{ route('shop.delete') }}" method="POST" class="delete-form"
                                        onsubmit="return confirm('Confirm delete?')">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="id" value="{{ $id }}">
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z">
                                                </path>
                                                <path
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z">
                                                </path>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>

            </table>
        </div>

        <div style="text-align: right">
            <tr>
                <td>
                    <h3> ${{ $total }} </h3>
                </td>
            </tr>
            <tr>
                <td class="text-right">
                    <a href="{{ route('shop.films') }}" class="btn btn-danger">
                        <i class="bi bi-arrow-return-left"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
                        </svg>
                        Continue Shopping
                    </a>
                    <a href="{{ route('shop.payment') }}"class="btn btn-success" id="pay-btn" style="flex: 1;">
                        <i class="bi bi-credit-card"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-credit-card" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                            <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                        </svg>
                        Pay
                    </a>
                </td>
            </tr>
        </div>
    </div>
@endsection
