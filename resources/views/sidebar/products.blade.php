@extends('layout.master')
@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
    <style>
        #banner {
            background-image: url('/storage/water_filtration_media_thumb.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-color: #f0f0f0;
        }

        #banner h2 {

            font-size: 50px;
            font-weight: bold;
        }
    </style>

    <section id="banner">
        <div class="inner">

            <header>
                <h2 class="animate-charcter ">Products Details</h2>
            </header>


        </div>

    </section>

    <div class="pd-wrap">

        <div class="container">
            <div class="heading-section">
                <h2>Product Details</h2>
            </div>
            <div class="row d-flex ">
                <div class="col-md-6">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" align="center">
                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img src=" {{ '/storage/' . $products->image }}"
                                    height="400" width="550" class="rounded"> </div>
                        </div>
                        <ol class=" mt-2  carousel-indicators list-inline">
                            <div class="slider">
                                @foreach ($images->take(3) as $image)
                                    @if (is_array($image->image))
                                        @foreach ($image->image as $imagePath)
                                            <img src="{{ asset('/storage/' . $imagePath) }}" height="70"
                                                width="100" />
                                        @endforeach
                                    @else
                                        <img src="{{ asset('/storage/' . $image->image) }}" height="70" width="100" />
                                    @endif
                                @endforeach
                            </div>
                        </ol>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-dtl">
                        <div class="product-info">

                            <div class="product-name">
                                <h2>{{ $products->name }}</h2>

                            </div>
                            <div class="reviews-counter">
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" checked />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" checked />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" checked />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                                <span>3 Reviews</span>
                            </div>
                            <h5>{{ $products->grade }}<br>
                                {{ $products->size }}<br>
                                {{ $products->pack }}</h5>
                        </div>
                        <p>{{ $products->dis }}</p>
                    </div>
                    {{--  <div class="row">
                        <div class="col">
                            @foreach ($images as $image)
                                @if (is_array($image->image))
                                    @foreach ($image->image as $imagePath)
                                        <img src="{{ asset('/storage/' . $imagePath) }}" height="70" width="100" />
                                    @endforeach
                                @else
                                    <img src="{{ asset('/storage/' . $image->image) }}" height="70" width="100" />
                                @endif
                            @endforeach
                        </div>
                    </div>  --}}


                </div>
                <div class="product-info-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description"
                                role="tab" aria-controls="description" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab"
                                aria-controls="review" aria-selected="false">Reviews </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            {{ $products->discription }}
                        </div>
                        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                         





                            <form form id="reviewForm" class="p-4 progress-form" enctype="multipart/form-data"
                                method="POST" action="{{ route('review.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Your rating</label>
                                    <div class="reviews-counter">
                                        <div class="rate">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text" checked>5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text" checked>4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text">1 star</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="phone" class="form-label">Phone</label>
                                            <div class="form-group">
                                                <input type="tel" name="phone" class="form-control" id="phone"
                                                    placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" id="email"
                                                    placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="message" class="form-label">Message</label>
                                            <div class="form-group">
                                                <textarea type="text" name="meas" class="form-control"id="message" placeholder=" " required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button type="save"
                                                        id="reviewForm"class="contact_form_submit">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="thumb" class="owl-carousel product-thumb">
            <div class="item">
                <img
                    src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" />
            </div>
            <div class="item">
                <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
            </div>
            <div class="item">
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
            </div>
            <div class="item">
                <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
            </div>
            <div class="item">
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
            </div>
            <div class="item">
                <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
            </div>
            <div class="item">
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="	sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
@endsection
