@extends('frontend.layouts.app')
@section('title','Contact')
@section('content')
<section class="contact-banner">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5>Get in touch</h5>
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</section>
<section class="contact-details">
    <div class="container">
        <div class="row">
            <div class="col-7 contact-content">
                <h3>Astro Hanumanta</h3>
                <p>Hotel ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine.</p>
                <div class="reservations">
                    <div class="icon">
                        <img src="/frontend/images/phone-ringing.png" alt="">
                    </div>
                    <div class="text">
                        <p>Reservation</p>
                        <a href="tel:(123) 456-7890">(123) 456-7890</a>
                    </div>
                </div>
                <div class="reservations">
                    <div class="icon">
                        <img src="/frontend/images/envelope-back.png" alt="">
                    </div>
                    <div class="text">
                        <p>Email Info</p>
                        <a href="mailto:abcd@example.com">abcd@example.com</a>
                    </div>
                </div>
                <div class="reservations">
                    <div class="icon">
                        <img src="/frontend/images/map.png" alt="">
                    </div>
                    <div class="text">
                        <p>Address</p>
                        <p class="adds">India </p>
                    </div>
                </div>
            </div>
            <div class="col-5 contact-form">
                <h3>Get in touch</h3>
                  <div class="form">
                    <form method="POST" action="" accept-charset="UTF-8" id="wendy-contact-us" class="form-wrapper"><input name="_token" type="hidden" value="jlAyAkNiJwkwQwb1js3PglRSvDBXDRLt4OzQXv6u">
                    <div class="row">
                                <div class="form-floating col-6">
                                    <input class="form-control" type="text" name="name" required="required" id="name" placeholder="Enter Name" title="Enter Name">
                                    <label for="name">Full Name</label>
                                </div>
                                <div class="form-floating col-6">
                                    <input class="form-control" type="tel" name="mobile" required="required" id="phone" placeholder="Enter Number" title="Enter Phone Number">
                                    <label for="phone">Phone number</label>
                                </div>
                                <div class="form-floating col-12">
                                    <input class="form-control" type="email" name="email" required="required" id="email" placeholder="Enter Email" title="Enter Email">
                                    <label for="email">Email</label>
                                </div>
                                
                                <div class="form-floating col-12">
                                        <textarea class="form-control" placeholder="Enter Message" title="Enter Message" id="floatingTextarea" name="message"></textarea>
                          <label for="floatingTextarea">Message</label>
                                </div>
                                
                                <div class="quote_btn col-6">
                                   <button class="main-btn" type="submit">Send Message</button>
                                </div>
                                </div>
                                </form>
                </div>
                <p class="form-message"></p>
            </div>
        </div>
    </div>
</section>
@endsection