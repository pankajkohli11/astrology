@extends('frontend.layouts.app')
@section('title','Blogs')
@section('content')
<section class="contact-banner">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5>Our</h5>
                <h1>Blogs</h1>
            </div>
        </div>
    </div>
</section>
<section class="blog-wrapper blog-list">
    <div class="container">
       <div class="home-blog-sec">
          <div class="row">
             <div class="col-lg-4 col-md-4 col-12">
                <div class="blog-page">
                   <div class="upper-sec">
                      <div class="image-sec">
                         <a href="#">
                         <img src="/frontend/images/blog1.webp" alt="">
                         </a>
                      </div>
                      <div class="date-sec">
                         <span>25-September-2024</span>
                      </div>
                   </div>
                   <div class="bottom-sec">
                      <div class="admin-area">
                         <div class="admin">
                            <i class="fas fa-user-circle"></i>
                            by <span>Ritesh Sharma</span>
                         </div>
                         <div class="category">
                            <span><a href="#">Astrology</a></span>
                         </div>
                      </div>
                      <h3><a href="#">Astrology in Jaipur: Illuminating Your Life's Path</a></h3>
                      
                      <div class="link-sec">
                         <a href="#">
                            Read More
                         </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-4 col-12">
                <div class="blog-page">
                   <div class="upper-sec">
                      <div class="image-sec">
                         <a href="#">
                         <img src="/frontend/images/blog2.webp" alt="">
                         </a>
                      </div>
                      <div class="date-sec">
                         <span>23-September-2024</span>
                      </div>
                   </div>
                   <div class="bottom-sec">
                      <div class="admin-area">
                         <div class="admin">
                            <i class="fas fa-user-circle"></i>
                            by <span>Ritesh Sharma</span>
                         </div>
                         <div class="category">
                            <span><a href="#">Astrology</a></span>
                         </div>
                      </div>
                      <h3><a href="#">From Stars to Solutions: Hyderabad's Astrology Experts</a></h3>
                     
                      <div class="link-sec">
                         <a href="#">
                            Read More
                         </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-4 col-12">
                <div class="blog-page">
                   <div class="upper-sec">
                      <div class="image-sec">
                         <a href="#">
                         <img src="/frontend/images/blog3.jpeg" alt="">
                         </a>
                      </div>
                      <div class="date-sec">
                         <span>17-September-2024</span>
                      </div>
                   </div>
                   <div class="bottom-sec">
                      <div class="admin-area">
                         <div class="admin">
                            <i class="fas fa-user-circle"></i>
                            by <span>Ritesh Sharma</span>
                         </div>
                         <div class="category">
                            <span><a href="#">Astrology</a></span>
                         </div>
                      </div>
                      <h3><a href="#">Ganesh Chaturthi 2024: Date, Auspicious Time, Celebration Methods, History, and Significance</a></h3>
                     
                      <div class="link-sec">
                         <a href="#">
                            Read More
                         </a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
      
    </div>
 </section>
@endsection