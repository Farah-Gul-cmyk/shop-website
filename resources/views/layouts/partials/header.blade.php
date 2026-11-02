<div class="bg-dark text-light py-2 d-none d-lg-block" id="template-mo-zay-top-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-start">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-3">
                        <i class="fa fa-envelope text-success me-2"></i>
                        <a class="text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    </li>
                    <li class="list-inline-item">
                        <i class="fa fa-phone text-success me-2"></i>
                        <a class="text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 text-end">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-3"><a class="text-light" href="https://fb.com/templatemo" target="_blank"><i class="fab fa-facebook-f fa-sm"></i></a></li>
                    <li class="list-inline-item me-3"><a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm"></i></a></li>
                    <li class="list-inline-item me-3"><a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm"></i></a></li>
                    <li class="list-inline-item"><a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center text-decoration-none fw-bold display-4" href="{{ route('home') }}">
            Zay
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#zay_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="zay_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-center mx-lg-auto gap-4">
                    <li class="nav-item">
                        <a class="nav-link fs-5 {{ request()->routeIs('home') ? 'active text-success fw-semibold' : 'text-dark' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 {{ request()->routeIs('about') ? 'active text-success fw-semibold' : 'text-dark' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 {{ request()->routeIs('shop') ? 'active text-success fw-semibold' : 'text-dark' }}" href="{{ route('shop') }}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 {{ request()->routeIs('contact') ? 'active text-success fw-semibold' : 'text-dark' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
            
            <div class="navbar align-self-center d-flex gap-3 align-items-center">
                <a class="nav-icon d-none d-lg-inline text-dark" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search fs-5"></i>
                </a>
                <a class="nav-icon position-relative text-decoration-none text-dark" href="#">
                    <i class="fa fa-fw fa-cart-arrow-down fs-5"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-light text-dark border">7</span>
                </a>
                <a class="nav-icon position-relative text-decoration-none text-dark" href="#">
                    <i class="fa fa-fw fa-user fs-5"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-light text-dark border">+99</span>
                </a>
            </div>
        </div>

    </div>
</nav>
