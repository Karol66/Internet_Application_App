<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <br />
    <br />
    <br />

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-12">
                <div class="dropdown">
                    <button type="button" class="btn btn-primary" onclick="toggleDropdown()">
                        <i class="bi bi-basket" aria-hidden="true"></i> <span class="badge badge-pill badge-danger"
                            id="cartItemCount">
                            <?php
                            $totalQuantity = 0;
                            foreach ((array) session('basket') as $id => $details) {
                                $totalQuantity += $details['quantity'];
                            }
                            echo $totalQuantity;
                            ?>
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-basket" viewBox="0 0 16 16">
                            <path
                                d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                        </svg>
                        Cart
                    </button>


                    <div class="dropdown-menu" id="cartDropdown">
                        <div class="row total-header-section">
                            <?php $total = 0; ?>
                            <?php foreach ((array) session('basket') as $id => $details): ?>
                            <?php $total += $details['price'] * $details['quantity']; ?>
                            <?php endforeach; ?>
                            <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                <p>Total: <span class="text-info">$ <?php echo $total; ?></span></p>
                            </div>
                        </div>
                        <?php if (session('basket')): ?>
                        <?php foreach (session('basket') as $id => $details): ?>
                        <?php $product = \app\Models\Film::find($id); ?>
                        <div class="row cart-detail">
                            <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                <img class="imidz" src="data:image/jpeg;base64,<?php echo base64_encode($product->image); ?>">
                            </div>
                            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                <p><?php echo $product->name; ?></p>
                                <span class="price text-info">$<?php echo $details['price']; ?></span>
                                <span class="count"> Quantity: <?php echo $details['quantity']; ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                <a class="btn btn-primary btn-block" href="{{ route('shop.basket') }}">My basket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br />

        <div class="container">
            <?php if (session('success')): ?>
            <div class="alert alert-success">
                <?php echo session('success'); ?>
            </div>
            <?php endif; ?>

            @yield('content')
        </div>

        <script>
            function toggleDropdown() {
                var dropdown = document.getElementById("cartDropdown");
                dropdown.classList.toggle("show");
            }
        </script>
</body>

</html>
