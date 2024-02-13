@extends('layout.master')
@section('content')
    <link rel="stylesheet" href="assets/css/raw.css">

    <style>
        #banner {
            background-image: url('storage/water_filtration_media_thumb.jpg');
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
                <h2 class="animate-charcter">Products</h2>
            </header>


        </div>

    </section>

    <!--Main Body-->
    <section class="py-5">
        <div class="container">
            <div class="row gx-4 align-items-center justify-content-between">
                <div class="col-md-5 order-2 order-md-1">
                    <div class="mt-5 mt-md-0">
                        <h2 class="p " style="font-weight:bold;">{{ $raws->name }}</h2>
                        <h5 class=" ">{{ $raws->page }}
                        </h5>

                    </div>
                </div>
                <div class="col-md-6 offset-md-1 order-1 order-md-2">
                    <div class="row gx-2 gx-lg-3">
                        <div class="col-6">
                            <div class="mb-2"><img class="img-fluid rounded-3" src="storage/intertbedsupport2-2gcE.jpg"
                                    height="500" width="500">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2"><img class="img-fluid rounded-3"
                                    src="storage/silex-filter-media-500x500-eMxg.webp">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2"><img class="img-fluid rounded-3"
                                    src="storage/activated-carbon-pallets-500x500-xszZ.webp">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2"><img class="img-fluid rounded-3"
                                    src="storage/75-manganese-dioxide-mno2-1639050683-6110650-E6Iu.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="box">
        <h2>Chemicals, Minerals And Filter Media</h2>
        <div class="container">
            <div class="row">

                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <div class="box-part text-center">
                            <div class="title">

                                <a href="{{ url('product/' . $product->id) }}">
                                    <img src="{{ 'storage/' . $product->image }}" height="300" width="300"></a>


                            </div>

                            <div class="text">
                                <span>
                                    <h4> {{ $product->name }}</h4>
                                    {{ $product->second }}
                                </span>
                            </div>



                        </div>
                    </div>
                @endforeach

            </div>
        </diV>
    </div>






    <!-- Two -->
@endsection
