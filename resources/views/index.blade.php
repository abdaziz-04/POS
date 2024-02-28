@extends('header')

<body style="background-color: #9de2ff;">
    <section class="container mt-5">
        <div class="row">
            <!-- Card Product -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.ytimg.com/vi/7SSu0KtXI2c/maxresdefault.jpg" class="card-img-top"
                        alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Products</h5>
                        <p class="card-text">Explore our amazing products.</p>
                        <a href="products.html" class="btn btn-primary">Go to Products</a>
                    </div>
                </div>
            </div>

            <!-- Card Sale -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://mayang.klopos.com/image_spanduk/temp/530/530060816800220901215302.jpg"
                        class="card-img-top" alt="Sale Image">
                    <div class="card-body">
                        <h5 class="card-title">Sales</h5>
                        <p class="card-text">Check out our latest promotions.</p>
                        <a href="sales.html" class="btn btn-primary">Go to Sales</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
