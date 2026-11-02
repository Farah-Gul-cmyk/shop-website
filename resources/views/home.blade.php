@extends('layouts.master')

@section('title', 'Home | Zay Shop')
@section('description', 'Explore quality products at Zay Shop.')

@section('content')

<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="{{ asset('assets/img/banner_img_01.jpg') }}" alt="Banner 1">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-success"><b>Zay</b> eCommerce</h1>
                            <h3 class="h2">Tiny and Perfect eCommerce Template</h3>
                            <p>
                                Zay Shop is an eCommerce HTML5 CSS template with latest version of Bootstrap 5. 
                                This template is 100% free provided by <a rel="sponsored" class="text-success" href="https://templatemo.com" target="_blank">TemplateMo</a> website.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="{{ asset('assets/img/banner_img_02.jpg') }}" alt="Banner 2">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">Proident occaecat</h1>
                            <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                            <p>
                                You are permitted to use this Zay CSS template for your commercial websites. You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="{{ asset('assets/img/banner_img_03.jpg') }}" alt="Banner 3">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">Repr in voluptate</h1>
                            <h3 class="h2">Ullamco laboris nisi ut</h3>
                            <p>
                                We bring you 100% free CSS templates for your websites. If you wish to support TemplateMo, please make a small contribution via PayPal or contact us.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-success rounded-circle p-3" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-success rounded-circle p-3" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Categories of The Month</h1>
            <p>
                Explore our handpicked categories designed to match your lifestyle and everyday needs.
            </p>
        </div>
    </div>
    <div class="row">
        @foreach($categories as $category)
            <div class="col-12 col-md-4 p-5 mt-3">
                @php
                    $imgMap = [0 => 'category_img_01.jpg', 1 => 'category_img_02.jpg', 2 => 'category_img_03.jpg'];
                    $selectedImg = $imgMap[$loop->index % 3] ?? 'category_img_01.jpg';
                    $catImage = asset('assets/img/' . $selectedImg);
                @endphp
                <a href="#"><img src="{{ $catImage }}" class="rounded-circle img-fluid border" alt="{{ $category->name }}"></a>
                <h5 class="text-center mt-3 mb-3">{{ $category->name }}</h5>
                <p class="text-center"><a href="{{ route('shop') }}" class="btn btn-success">Go Shop</a></p>
            </div>
        @endforeach
    </div>
</section>

<section class="bg-light py-5">
    <div class="container">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Featured Product</h1>
                <p>
                    Check out our top-rated featured products built for quality and comfort.
                </p>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        @php
                            $prodImgMap = [0 => 'feature_prod_01.jpg', 1 => 'feature_prod_02.jpg', 2 => 'feature_prod_03.jpg'];
                            $selectedProdImg = $prodImgMap[$loop->index % 3] ?? 'feature_prod_01.jpg';
                            $prodImage = asset('assets/img/' . $selectedProdImg);

                            // Original template ki exact descriptions index ke hisab se mapping
                            $descMap = [
                                0 => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia deserunt.',
                                1 => 'Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.',
                                2 => 'Curabitur ac mi sit amet diam luctus porta. Phasellus pulvinar sagittis diam, et scelerisque ipsum lobortis nec.'
                            ];
                            $selectedDesc = $descMap[$loop->index % 3] ?? $product->description;
                        @endphp
                        
                        <a href="#">
                            <img src="{{ $prodImage }}" class="card-img-top" alt="{{ $product->name }}">
                        </a>

                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-end">${{ $product->price }}</li>
                            </ul>
                            <a href="#" class="h2 text-decoration-none text-dark">{{ $product->name }}</a>
                            <p class="card-text">
                                {{ $selectedDesc }}
                            </p>
                            <span class="text-muted">Reviews (24)</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection