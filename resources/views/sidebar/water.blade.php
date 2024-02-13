@extends('layout.master')

@section('content')
    <style>
        #banner {
            background-image: url('storage/water.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-color: #f0f0f0;
        }
    </style>

    <!-- Main -->
    <section id="banner">
        <div class="inner">
            <header>
                <h2 class="animate-charcter">Water Treatment Plants</h2>
            </header>
        </div>
    </section>


    <!--Main Body-->
    <section class="py-5">
        <div class="container">
            <div class="row gx-4 align-items-center justify-content-between">
                <div class="col-md-5 order-2 order-md-1">
                    <div class="mt-5 mt-md-0">
                        <h2 class="p " style="font-weight:bold;">{{ $wtr->name }}</h2>
                        <h5 class=" ">{{ $wtr->page }}
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
        <h2>Water Treatment Plant</h2>
        <div class="container">
            <div class="row">

                @foreach ($water as $wtrs)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <div class="box-part text-center">
                            <div class="title">

                                <a href="{{ url('all/' . $wtrs->id) }}">
                                    <img src="{{ 'storage/' . $wtrs->image }}" height="300" width="300"></a>


                            </div>

                            <div class="text">
                                <span>
                                    <h4> {{ $wtrs->name }}</h4>

                                </span>
                            </div>



                        </div>
                    </div>
                @endforeach

            </div>
        </diV>
    </div>
@endsection
