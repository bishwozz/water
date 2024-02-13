<link rel="stylesheet" href="assets/css/contact.css">

<section id="contact">

    <div class="body">
        <form id="contactForm" action="{{ route('contact') }}" method="post" class="p-4 progress-form"
            enctype="multipart/form-data">
            @csrf
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h3 class="mb-2 mt-3">Contact Us</h3>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="your-name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="your-name" name="name" required>
                                </div>
                                {{--  <div class="col-md-6">
                                    <label for="your-surname" class="form-label"> Surname</label>
                                    <input type="text" class="form-control" id="your-surname" name="your-surname"
                                        required>
                                </div>  --}}
                                <div class="col-md-6">
                                    <label for="your-email" class="form-label">Phone </label>
                                    <input type="tel" class="form-control" id="your-email" name="phone" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="your-subject" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="your-subject" name="email"
                                        required>
                                </div>
                                <div class="col-12">
                                    <label for="your-message" class="form-label"> Message</label>
                                    <textarea class="form-control" id="your-message" name="meas" rows="5" required></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="submit"
                                                id="contactForm"class="contact_form_submit">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

</section>

<section class="map_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="map_inner">
                    <h4>Find Us on Google Map</h4>

                    <div class="map_bind">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.239689397989!2d85.26283687447251!3d27.709884825381327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb230017fd8f5b%3A0x799f30a0ed2aa2d8!2sWattra%20Technology%20(WareHouse)!5e0!3m2!1sen!2snp!4v1707453882768!5m2!1sen!2snp"
                            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</form>


</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script></script>
