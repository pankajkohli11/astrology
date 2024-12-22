@extends('frontend.layouts.app')
@section('title','About')
@section('content')
<section class="contact-banner">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5>Kmow more</h5>
                <h1>About Us</h1>
            </div>
        </div>
    </div>
</section>
<section class="about-us-home abt-inner" id="abt">
    <div class="container">
       <div class="row">
          <div class="col-5 abt-left aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
             <div class="abt-cont">
                <h2>About Astro Hanumanta</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
             </div>
             
          </div>
          <div class="col-7 abt-right">
             <div class="abt-co-img">
                <div class="abt-co-img-left">
                   <img src="/frontend/images/about2.jpeg" class="img-fluid" alt="">
                </div>
                <div class="abt-co-img-right">
                   <img src="/frontend/images/about1.avif" class="img-fluid" alt="">
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection