<?php
ob_start();
?>

<!-- Page header (same style as the other pages) -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Home</h2>
        <p class="text-muted mb-0">Welcome to TravSec. Manage your anti-theft travel bags, customers and orders.</p>
    </div>
</div>

<!-- Hero carousel (colour panels for now; swap in bag photos after Step 11) -->
<div id="homeCarousel" class="carousel slide mb-4 shadow-sm rounded overflow-hidden" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="home-slide home-slide-1 d-flex flex-column justify-content-center px-4 px-md-5">
                <h1 class="display-5 fw-bold mb-2">Travel light. Stay protected.</h1>
                <p class="lead mb-4">Anti-theft travel bags designed to keep your belongings safe on the move.</p>
                <div><a href="products.php" class="btn btn-warning btn-lg">Browse products</a></div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="home-slide home-slide-2 d-flex flex-column justify-content-center px-4 px-md-5">
                <h1 class="display-5 fw-bold mb-2">Take an order in under a minute</h1>
                <p class="lead mb-4">Choose a customer, add bags, print the invoice.</p>
                <div><a href="orders.php" class="btn btn-warning btn-lg">Create an order</a></div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="home-slide home-slide-3 d-flex flex-column justify-content-center px-4 px-md-5">
                <h1 class="display-5 fw-bold mb-2">Know your customers</h1>
                <p class="lead mb-4">Keep customer and staff records in one place.</p>
                <div><a href="customers.php" class="btn btn-warning btn-lg">View customers</a></div>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Shortcuts to the four modules -->
<div class="row g-3">
    <div class="col-12 col-md-6 col-xl-3">
        <a href="products.php" class="text-decoration-none">
            <div class="card h-100 shadow-sm home-tile">
                <div class="card-body">
                    <i class="bi bi-bag fs-2 text-primary"></i>
                    <h5 class="card-title mt-2 text-dark">Products</h5>
                    <p class="card-text text-muted mb-0">Add bags and update prices and stock.</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-12 col-md-6 col-xl-3">
        <a href="customers.php" class="text-decoration-none">
            <div class="card h-100 shadow-sm home-tile">
                <div class="card-body">
                    <i class="bi bi-people fs-2 text-primary"></i>
                    <h5 class="card-title mt-2 text-dark">Customers</h5>
                    <p class="card-text text-muted mb-0">Register buyers and keep their contact details.</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-12 col-md-6 col-xl-3">
        <a href="staffs.php" class="text-decoration-none">
            <div class="card h-100 shadow-sm home-tile">
                <div class="card-body">
                    <i class="bi bi-person-badge fs-2 text-primary"></i>
                    <h5 class="card-title mt-2 text-dark">Staffs</h5>
                    <p class="card-text text-muted mb-0">Manage the team who serve your orders.</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-12 col-md-6 col-xl-3">
        <a href="orders.php" class="text-decoration-none">
            <div class="card h-100 shadow-sm home-tile">
                <div class="card-body">
                    <i class="bi bi-cart3 fs-2 text-primary"></i>
                    <h5 class="card-title mt-2 text-dark">Orders</h5>
                    <p class="card-text text-muted mb-0">Create orders, add items and print invoices.</p>
                </div>
            </div>
        </a>
    </div>
</div>

<style>
    .home-slide {
        min-height: 320px;
        color: #fff;
    }
    .home-slide-1 { background: linear-gradient(120deg, #212529 0%, #343a40 100%); }
    .home-slide-2 { background: linear-gradient(120deg, #0b3d2e 0%, #14604a 100%); }
    .home-slide-3 { background: linear-gradient(120deg, #1d2b53 0%, #2f4690 100%); }

    /* Show the tile is clickable */
    .home-tile { transition: box-shadow .15s ease, transform .15s ease; }
    .home-tile:hover { box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; transform: translateY(-2px); }

    @media (prefers-reduced-motion: reduce) {
        .home-tile { transition: none; }
        .home-tile:hover { transform: none; }
    }
</style>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>