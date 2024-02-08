@extends('layout.master')
@section('content')
    <link rel="stylesheet" href="assets/css/contact.css">
    <!-- Banner -->
  <section id="banner">
        <div class="inner">

            <header>
                <h2>Contat Us</h2>
            </header>


        </div>

    </section>

    </section>
    <div class="pro">

        @include('frontend.contact_form')
      
    </div>
    <div class="card">
        <div class="card-cody bg-white">
            <div class="col-12 col-lg-12">
                <h1 class="h1"style="text-align:center; font-weight:bold;">Map</h1>
                <div class="embed embed-responsive-4by3">
                    <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://www.google.com/maps/place/Wattra+Technology+(WareHouse)/27.7098801,85.2654118,17z/!3m1!4b1!4m6!3m5!1s0x39eb230017fd8f5b:0x799f30a0ed2aa2d8!8m2!3d27.7098801!4d85.2654118!16s%2Fg%2F11ld956hv9?entry=ttu"></iframe>
                    < </div>
                </div>
            </div>
        </div>
    @endsection
