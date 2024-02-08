<section id="contact">

    <div class="container">
        <form id="contactForm" action="{{ route('contact_us') }}" method="post" class="p-4 progress-form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-white text-uppercase">Contact Us</h2>
                    <hr class="mt-4 mb-5">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="sentMessage" novalidate>
                        <div class="row" style="justify-content:center;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" type="text"
                                        placeholder="Nome *">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" name="email"
                                        placeholder="Email *">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" name="phone"
                                        placeholder="Telephone *" required>
                                    <p class="help-block text-danger"></p>
                                </div>


                                <div class="form-group">
                                    <textarea class="form-control" id="message" name="meas" placeholder="Message *" required></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <button  id="sendMessageButton" class="btn btn-primary btn-big text-uppercase "
                                    onclick="swalWithBootstrapButtons" type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </form>


    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
 
</script>


