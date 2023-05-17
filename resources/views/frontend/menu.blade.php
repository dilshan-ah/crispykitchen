@extends('frontend/master')

        @section('main-content')
        <header class="site-header site-menu-header">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 mx-auto">
                            <h1 class="text-white">Our Menus</h1>

                            <strong class="text-white">Perfect for all Breakfast, Lunch and Dinner</strong>
                        </div>

                    </div>
                </div>

                <div class="overlay"></div>
            </header>

            <section class="menu section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-lg-5 mb-4">Breakfast Menu</h2>
                        </div>

                        @if(count($products)>0)

                        @foreach($products as $product)
                        @if($product->category_name == "Breakfast")
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-thumb">
                                <img src="images/products/{{$product->image}}" class="img-fluid menu-image" alt="">

                                <div class="menu-info d-flex flex-wrap align-items-center">
                                    <h4 class="mb-0">{{$product->name}}</h4>

                                    <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>{{$product->price}}</span>

                                    <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                        <h6 class="reviews-text mb-0 me-3">4.4/5</h6>

                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>

                                        <p class="reviews-text mb-0 ms-4">128 Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach

                        @endif


                    </div>
                </div>
            </section>

            <section class="menu section-padding bg-white">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-lg-5 mb-4">Lunch Menu</h2>
                        </div>

                        @if(count($products)>0)

                        @foreach($products as $product)
                        @if($product->category_name == "Launch")
                        <div class="col-lg-6 col-12">
                            <div class="menu-thumb">
                                <img src="images/products/{{$product->image}}" class="img-fluid menu-image" alt="">

                                <div class="menu-info d-flex flex-wrap align-items-center">
                                    <h4 class="mb-0">{{$product->name}}</h4>

                                    <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>{{$product->price}}</span>

                                    <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                        <h6 class="reviews-text mb-0 me-3">4.4/5</h6>

                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>

                                        <p class="reviews-text mb-0 ms-4">128 Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach

                        @endif

                        

                    </div>
                </div>
            </section>

            <section class="menu section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-lg-5 mb-4">Dinner Menu</h2>
                        </div>

                        @if(count($products)>0)

                        @foreach($products as $product)
                        @if($product->category_name == "Dinner")
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-thumb">
                                <img src="images/products/{{$product->image}}" class="img-fluid menu-image" alt="">

                                <div class="menu-info d-flex flex-wrap align-items-center">
                                    <h4 class="mb-0">{{$product->name}}</h4>

                                    <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>{{$product->price}}</span>

                                    <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                        <h6 class="reviews-text mb-0 me-3">4.4/5</h6>

                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>

                                        <p class="reviews-text mb-0 ms-4">128 Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach

                        @endif

                    </div>
                </div>
            </section>

            @endsection