<section class="contact-area pt-130 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="contact-area-content content-right-spacer">
                    <div class="info-iconic-boxes">
                        <div class="info-iconic-box wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                            <div class="info-icon info-icon-gradient-1">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="info-body">
                                <h5>Our Location</h5>
                                <p>4 Old Park LaneLondon W1K 1QW <br>United Kingdom</p>
                            </div>
                        </div>
                        <div class="info-iconic-box wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                            <div class="info-icon info-icon-gradient-2">
                                <i class="fal fa-envelope-open-text"></i>
                            </div>
                            <div class="info-body">
                                <h5>Email Address</h5>
                                <p></p>
                                <p><a href="mailto:hello@edropship.co.uk">hello@edropship.co.uk</a> </p>
                            </div>
                        </div>
                        <div class="info-iconic-box wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                            <div class="info-icon info-icon-gradient-3">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="info-body">
                                <h5>Urgent Call</h5>
                                <p><a href="tel:+447958557597">+447958557597</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-form-area content-right-spacer">
                    <div class="section-title mb-40">
                        <div class="section-heading-tag">
                            <span class="single-heading-tag">Send Us Message</span>
                        </div>
                        <div >
                        <h2> Send your inquiries *</h2>
                    </div>
                </div>
                    <div class="contact-respond">

                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert"></button>
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <form action="{{ route('form.submit') }}" method="post">
                            @csrf
                            <input type="hidden" name="source" value="{{ $source }}">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name"
                                    name="name" required="">
                                <label for="Name">Name</label>
                            </div>
                            <div class="input-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address"
                                name="email" required="">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-group">
                                <select class="form-select" name="client" aria-label="Default select example">
                                    <option value="client" selected> Client </option>
                                      <option value="vendor"> Vendor/suppler </option>
                                      <option value="wholeseller"> Wholeseller </option>
                                      <option value="exporter"> Exporter </option>
                                </select>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number"
                                    name="phone" required="">
                                <label for="phone">Phone</label>
                            </div>
                            <div class="input-group form-textarea">
                                <textarea class="form-control" id="message" name="message" placeholder="Message"
                                    name="message"></textarea>
                                <label for="message">Message</label>
                            </div>
                            <div class="input-group">
                                <button type="submit" class="filled-btn">Send Message <i
                                        class="fas fa-arrow-right"></i></button>
                            </div>
                        </form>
                </div> <!-- /.contact-respond -->
            </div> <!-- /.contact-form-area -->
        </div>
    </div> <!-- /.row -->
</div> <!-- /.container -->
</section> <!-- /.contact-area -->
