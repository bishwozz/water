{{-- @php
use App\Models\Products;

$products = Products::orderBy('name')->get();
@endphp --}}

@extends('layout.master')
@section('content')
    <link rel="stylesheet" href="assets/css/pli.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">


    <!-- Banner -->
    <section id="banner">
        <div class="inner">

            <header>
                <h2 class="animate-charcter">Welcome To Wattra Technology</h2>
            </header>


        </div>

    </section>




    <section id="body">
        <section class="py-5">
            <div class="container">
                <div class="row gx-4 align-items-center justify-content-between">
                    <div class="col-md-5 order-2 order-md-1">
                        <div class="mt-5 mt-md-0">
                            <h2 class="p " style="font-weight:bold;">Company Profile</h2>
                            <h5 class=" ">{{ $about->page }}
                            </h5>

                        </div>
                    </div>
                    <div class="col-md-6 offset-md-1 order-1 order-md-2">
                        <div class="row gx-2 gx-lg-3">
                            <div class="col-6">
                                <div class="mb-2"><img class="img-fluid rounded-3"
                                        src="storage/intertbedsupport2-2gcE.jpg" height="500" width="500">
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


    </section>
    <div class="box">
        <h2>LEADING SUPPLIER OF SAND MEDIA & WATER TREATMENT PLANT</h2>
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <div class="box-part text-center">
                        <div class="title">
                            <h4>Packaging</h4>
                        </div>

                        <div class="text">
                            <span>We provide our customers best packaging services such as pouches, bags, carboys
                                and
                                drums, as
                                well
                                as
                                cartons; to ensure the preservation of quality in all our products.

                            </span>
                        </div>



                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <div class="box-part text-center">
                        <div class="title">
                            <h4>Quality</h4>
                        </div>

                        <div class="text">
                            <span>We Are The Leading distributer Of Water Treatment Plant & Sand Media Products.
                                Offering
                                Best Quality Of Products. We Strongly Belive In Maintaining High
                                Standard Of Quality .</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <div class="box-part text-center">


                        <div class="title">
                            <h4>Warehouse</h4>
                        </div>

                        <div class="text">
                            <span>We have well-built and large warehouses, well suited to the storage needs of our
                                specialised
                                formulations. They are clean and hygienic; apart from being meticulously organised.
                            </span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Main -->
    <section id="raw">


        @include('product.slider')


    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="assets/js/rus.js"></script>
@endsection
