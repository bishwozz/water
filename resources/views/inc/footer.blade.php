<!-- Footer -->
{{--  @php
    use App\Models\Setting;

    $settings = Setting::all()->get();
@endphp  --}}

<footer class="container-fluid bg-grey py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 ">

                        <div class="logo-part">
                            <h5>{{ $settings->name }}</h5>
                            {{ $settings->ware }}<br>

                        </div>
                    </div>
                    <div class="col-md-6 px-4">
                        <h6> About Company</h6>
                        <p>{{ $settings->title }}<br>
                            {{ $settings->head }}<br>
                            {{ $settings->phone }}<br>
                            {{ $settings->reg }}<br>
                            {{ $settings->pan }}<br></p>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 px-4">

                        <div class="row ">
                            <div class="col-md-6">
                                <ul>
                                    <li> <a href="#"> Home</a> </li>
                                    <li> <a href="#"> About</a> </li>
                                    <li> <a href="#"> Contact</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <h6> Newsletter</h6>
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                        <form class="form-footer my-3">
                            <input type="text" placeholder="search here...." name="search">
                            <input type="button" value="Go">
                        </form>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
