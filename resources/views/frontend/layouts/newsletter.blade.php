
<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <!-- Start Newsletter Inner -->
            <div class="inner">
                <div class="row">
                    <div class="col-4">
                        <h4>LET'S STAY IN TOUCH</h4>
                        <p>Get updates on offers, events & more</p>
                    </div>
                    <div class="col-8">
                        <form action="{{route('subscribe')}}" method="post" class="newsletter-inner">
                        @csrf
                            <input name="email" placeholder="Your email address" required="" type="email">
                            <button class="btn" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Newsletter Inner -->
        </div>
    </div>
</section>
<!-- End Shop Newsletter -->