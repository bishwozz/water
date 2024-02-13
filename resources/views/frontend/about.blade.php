@extends('layout.master')
@section('content')
    {{--  {{ dd($settings) }}  --}}
    <link rel="stylesheet" href="assets/css/abouus.css">



    <!-- Banner -->
    <section id="banner">
        <div class="inner">

            <header>
                <h2 class="animate-charcter">About Us</h2>
            </header>


        </div>

    </section>

    <section class="py-5">
        <div class="container">
            <div class="row gx-4 align-items-center justify-content-between">
                <div class="col-md-5 order-2 order-md-1">
                    <div class="mt-5 mt-md-0">

                        <h2 class="t" style="font-weight:bold;">{{ $about->name }}</h2>
                        <h5 class=" h5 t">{{ $about->page }}
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
    <section>
        <div class="row">
            <div class="col-md-6">
                <div class="bg-image hover-overlay shadow-2-strong" data-mdb-ripple-init data-mdb-ripple-color="light">
                    <img src="" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 gx-5 ">
                <h1 class="t" style="text-align:center; font-weight:bold;">Message From Our Director </h1>
                <p class="t">
                    {{ $directors->des }}
                </p>
                <p class="t">
                    <bold>MD.</bold> {{ $directors->name }}
                </p>
            </div>
        </div>
    </section>


    <!-- Main -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <section class="about-section">
                <div class="container">
                    <div class="row">
                        <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                            <div class="inner-column">
                                <div class="sec-title">
                                    <span class="title">
                                        <h3>{{ $missions->name }}</h3>
                                    </span>
                                </div>
                                <div class="text">
                                    <h2>{{ $missions->pir }}</h2>
                                </div>
                            </div>
                        </div>

                        <div class="box">
                            <h2></h2>
                            <div class="container">
                                <div class="row">

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                        <div class="box-part text-center">

                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                        <div class="box-part text-center">

                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                        <div class="box-part text-center">



                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                        <div class="box-part text-center">



                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                        <div class="box-part text-center">



                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                        <div class="box-part text-center">



                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <!-- Image Column -->
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column wow fadeInLeft">
                                <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img
                                            src="storage/unnamed-uya6.jpg" alt=""></a>
                                </figure>
                                <figure class="image-2"><a href="#" class="lightbox-image" data-fancybox="images"><img
                                            src="storage/download-2-VvRp.jpg" alt=""></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row">
                    <div class="col-md-12">
                        <div class="bg-image hover-overlay shadow-2-strong" data-mdb-ripple-init
                            data-mdb-ripple-color="light">
                            <img src="storage/granular-activated-carbon-fact-sheet-XB47.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 gx-5 mb-4">
                        <h5 class="r" style="text-align: center;">❖Clients SATISFACTION </h5>
                        <p class="s">
                            We are consistently serving our customers for more than four decades. Due to our
                            exceptional product
                            quality and customer service, we have gained high credibility and extensive customer
                            approach over
                            years
                            of experience. Our client feedback system has helped us to understand the needs of our
                            clientele.
                            We have always tried to achieve the highest level of customer satisfaction and are
                            committed to
                            continue with the same spirit.
                            We are promising and genuine supplier of ourproducts.
                            Being the respectful, careful products are delivered on the basis of buyer’s
                            requirements.
                            With continual improvement in our products and services we assist our clients in getting
                            maximum
                            satisfaction in dealings.
                            Our sincere efforts have helped us to clinch many high profile clients from Nepal.
                            Today, we are Supplying in Star Hospital, Ashwin Medical College, Madan Bhandari
                            University of
                            Science
                            and Technology, Bardibas Municipality .
                        </p>
                    </div>
                </div>
            </section>
        </div>


    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
@endsection
