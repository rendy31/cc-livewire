<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carier Center</title>
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header class="d-flex flex-wrap justify-content-center py-2  border-bottom">
        <div class="container">
            <a href="/"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="{{ url('assets/img/logostikes.png') }}" alt="logostikes" style="width: 50px;">
                <span class="fs-4 fw-bold ms-2">Carier Center</span>
            </a>

            <ul class="nav ">
                <!-- <p class="text-end">Log Out</p> -->
            </ul>
        </div>
    </header>

    <nav class="navbar sticky-bottom navbar-expand-lg bg-body-tertiary p-0 shadow">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a wire:navigate class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Blog
                        </a>
                        <ul class="dropdown-menu p-0">
                            <li><a wire:navigate class="dropdown-item" href="{{ route('category.index') }}">Category</a></li>
                            <li><a wire:navigate class="dropdown-item" href="{{ route('post.index') }}">Post</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a href="#" class="text-decoration-none btn btn-sm btn-danger me-3">Logout</a>
        </div>
    </nav>

    <!-- CONTENT START HERE -->
    {{ $slot }}
    <!-- CONTENT END HERE -->

    <footer>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                    </a>
                    <span class="mb-3 mb-md-0 text-body-secondary">© 2024 ITEKES Suaka Insan</span>
                </div>
            </footer>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script data-navigate-once src="{{ url('assets/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
