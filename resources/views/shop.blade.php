@extends('layouts.master')

@section('title', 'Shop | Zay Shop')
@section('description', 'Browse products at Zay Shop.')

@section('content')

<div class="container py-5">
    <div class="row">

        
        <div class="col-lg-3">

            <h1 class="h2 pb-4">Categories</h1>

            <ul class="list-unstyled templatemo-accordion">

                
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between text-dark text-decoration-none"
                       data-bs-toggle="collapse"
                       href="#gender">

                        Gender
                        <i class="fa fa-fw fa-chevron-circle-down mt-1 category-arrow"></i>
                    </a>

                    <ul id="gender" class="collapse list-unstyled ps-3">
                        <li><a class="text-dark text-decoration-none" href="#">Men</a></li>
                        <li><a class="text-dark text-decoration-none" href="#">Women</a></li>
                    </ul>
                </li>

                
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between text-dark text-decoration-none"
                       data-bs-toggle="collapse"
                       href="#sale">

                        Sale
                        <i class="fa fa-fw fa-chevron-circle-down mt-1 category-arrow"></i>
                    </a>

                    <ul id="sale" class="collapse list-unstyled ps-3">
                        <li><a class="text-dark text-decoration-none" href="#">Sport</a></li>
                        <li><a class="text-dark text-decoration-none" href="#">Luxury</a></li>
                    </ul>
                </li>

                
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between text-dark text-decoration-none"
                       data-bs-toggle="collapse"
                       href="#product">

                        Product
                        <i class="fa fa-fw fa-chevron-circle-down mt-1 category-arrow"></i>
                    </a>

                    <ul id="product" class="collapse list-unstyled ps-3">
                        <li><a class="text-dark text-decoration-none" href="#">Bag</a></li>
                        <li><a class="text-dark text-decoration-none" href="#">Sweather</a></li>
                        <li><a class="text-dark text-decoration-none" href="#">Sunglass</a></li>
                    </ul>
                </li>

            </ul>
        </div>

        
        <div class="col-lg-9">

            
            <div class="row mb-4">

                <div class="col-md-6">
                    <ul class="list-inline shop-top-menu pb-3 pt-1">

                        <li class="list-inline-item">
                            <a class="text-dark text-decoration-none" href="#">All</a>
                        </li>

                        <li class="list-inline-item">
                            <a class="text-dark text-decoration-none" href="#">Men's</a>
                        </li>

                        <li class="list-inline-item">
                            <a class="text-dark text-decoration-none" href="#">Women's</a>
                        </li>

                    </ul>
                </div>

                <div class="col-md-6 pb-4">
                    <select class="form-control">
                        <option>Featured</option>
                        <option>A to Z</option>
                        <option>Item</option>
                    </select>
                </div>

            </div>

            @php
                $products = [
                    ['image' => 'shop_01.jpg', 'name' => 'Oupidatat non', 'price' => '$250.00'],
                    ['image' => 'shop_02.jpg', 'name' => 'Oupidatat non', 'price' => '$250.00'],
                    ['image' => 'shop_03.jpg', 'name' => 'Oupidatat non', 'price' => '$250.00'],
                    ['image' => 'shop_04.jpg', 'name' => 'Oupidatat non', 'price' => '$250.00'],
                    ['image' => 'shop_05.jpg', 'name' => 'Oupidatat non', 'price' => '$250.00'],
                    ['image' => 'shop_06.jpg', 'name' => 'Oupidatat non', 'price' => '$250.00'],
                    ['image' => 'shop_07.jpg', 'name' => 'Oupidatat non', 'price' => '$250.00'],
                    ['image' => 'shop_08.jpg', 'name' => 'Oupidatat non', 'price' => '$250.00'],
                    ['image' => 'shop_09.jpg', 'name' => 'Oupidatat non', 'price' => '$250.00'],
                ];
            @endphp

            
            <div class="row g-4">

                @foreach($products as $product)

                    <div class="col-12 col-md-6 col-lg-4">

                        <div class="card product-wap rounded-0 h-100">

                            
                            <div class="card rounded-0">

                                <img class="card-img rounded-0 img-fluid"
                                     src="{{ asset('assets/img/' . $product['image']) }}"
                                     alt="{{ $product['name'] }}">

                                
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">

                                    <ul class="list-unstyled mb-0">

                                        <li>
                                            <a class="btn btn-success text-white" href="#">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="btn btn-success text-white mt-2" href="#">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="btn btn-success text-white mt-2" href="#">
                                                <i class="fas fa-cart-plus"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                            </div>

                            
                            <div class="card-body">

                                <a href="#" class="h3 text-decoration-none">
                                    {{ $product['name'] }}
                                </a>

                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                </ul>

                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>

                                <p class="text-center mb-0">
                                    {{ $product['price'] }}
                                </p>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

            
            <div class="row mt-4">

                <div class="col text-end">

                    <ul class="pagination pagination-lg justify-content-end">

                        <li class="page-item disabled">
                            <a class="page-link rounded-0 shadow-sm" href="#">1</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm" href="#">2</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm" href="#">3</a>
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>
</div>


<section class="bg-light py-5">
    <div class="container py-5 my-4">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Our Brands</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
            
            <div class="col-lg-9 m-auto tempaltemo-carousel py-3">
                <div class="row d-flex flex-row justify-content-between align-items-center">
                    
                    
                    <div class="col-1 text-center">
                        <a class="h1 text-decoration-none" href="#templatemo-slide-brand" data-bs-slide="prev"><i class="fa fa-chevron-left text-dark"></i></a>
                    </div>
                    
                    
                    <div class="col-10">
                        <div class="row">
                            <div class="col-3 p-md-5">
                                <a href="#"><img class="img-fluid brand-img" src="{{ asset('assets/img/brand_01.png') }}" alt="Brand Logo 1"></a>
                            </div>
                            <div class="col-3 p-md-5">
                                <a href="#"><img class="img-fluid brand-img" src="{{ asset('assets/img/brand_02.png') }}" alt="Brand Logo 2"></a>
                            </div>
                            <div class="col-3 p-md-5">
                                <a href="#"><img class="img-fluid brand-img" src="{{ asset('assets/img/brand_03.png') }}" alt="Brand Logo 3"></a>
                            </div>
                            <div class="col-3 p-md-5">
                                <a href="#"><img class="img-fluid brand-img" src="{{ asset('assets/img/brand_04.png') }}" alt="Brand Logo 4"></a>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-1 text-center">
                        <a class="h1 text-decoration-none" href="#templatemo-slide-brand" data-bs-slide="next"><i class="fa fa-chevron-right text-dark"></i></a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection