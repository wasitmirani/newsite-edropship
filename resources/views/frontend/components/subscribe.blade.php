<section class="newsletter-search-area newsletter-search-v2 wow fadeInUp pt-100" data-wow-delay="0ms" data-wow-duration="1500ms">
    <div class="container">
        <div class="newsletter-search-internal text-center bg-royal-blue pt-75 pb-80">
            <div class="newsletter-search-section-images d-none d-xl-block wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms" style="background-image: url({{ asset('assets/img/particle/hello-announcement.png')}}), url({{ asset('assets/img/particle/subscription-area-v2-right.png')}});"></div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="section-title section-title-white">
                        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Subscribe Newsletters</h2>
                        <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">Start your trial today! Hit us up if need any guidance or assistance. </p>
                    </div>
                    <div class="newsletter-search-form wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <form method="POST" action="{{ route('get-address-from-ip')}}">
                            @csrf
                            <input type="hidden" name="country" id="country" class="form-control">
                            <div class="form-group">
                                <input type="text" name="phone" id="yourPhoneNumber" class="form-control" placeholder="Phone Number">
                                <input type="email" name="email" id="emailAddress" class="form-control" placeholder="Email Address">
                                <button type="submit" name="submit" value="Go" class="filled-btn bg-royal-blue">Subscribe Now <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.newsletter-search-internal -->
    </div> <!-- /.container -->
    <div class="section-bg-overflow bg-dark-black-v2"></div>
</section>
