@extends('frontend.layouts.app')
@section('title','Home Page')
@section('content')
<section class="bannner-section">
    <div class="container">
        <div class="row">
            <div class="col-9 banner-left">
                <div class="owl-carousel" id="left-slider">
                    <div class="item">
                        <div class="left-banner">
                            <a href="#">
                            <img src="/frontend/images/banner-bg1.webp" alt="">
                            <div class="banner-content">
                                <img src="/frontend/images/banner1.webp" alt="">
                                <div class="banner-info">
                                    <h3>Wondering About Your Relationship's Future?</h3>
                                    <p>Consult <b>Tarot Pragati</b></p>
                                    <span class="main-btn">Avail Free Call</span>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="left-banner">
                            <a href="#">
                            <img src="/frontend/images/banner-bg2.webp" alt="">
                            <div class="banner-content">
                                <img src="/frontend/images/banner2.webp" alt="">
                                <div class="banner-info">
                                    <h3>Struggling with Financial Problems?</h3>
                                    <p>Consult <b>Acharya Aarav</b></p>
                                    <span class="main-btn">Avail Free Call</span>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="left-banner">
                            <a href="#">
                            <img src="/frontend/images/banner-bg3.webp" alt="">
                            <div class="banner-content">
                                <img src="/frontend/images/banner3.webp" alt="">
                                <div class="banner-info">
                                    <h3>Should I propose to her?</h3>
                                    <p>Talk to Love & Relationship Expert <b>Acharya Kankeshwar</b></p>
                                    <span class="main-btn">Avail Free Call</span>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="left-banner">
                            <a href="#">
                            <img src="/frontend/images/banner-bg4.webp" alt="">
                            <div class="banner-content">
                                <img src="/frontend/images/banner4.webp" alt="">
                                <div class="banner-info">
                                    <h3>Got Into Fight with Girlfriend</h3>
                                    <p>Consult with <b>Best Astrologer</b> to solve Relationship issues</p>
                                    <span class="main-btn">Avail Free Call</span>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 banner-right">
                <div class="right-banner-info">
                    <video src="/frontend/images/banner-video.mp4" autoplay="" playsinline="" muted="" loop=""></video>
                    <a href="#" class="main-btn">First Chat Free</a>
                </div>
                
            </div>
        </div>
    </div>
</section>
<section class="upper-services">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul>
                    <li>
                        <a href="#">
                        <div class="img-service">
                            <img src="/frontend/images/horo.svg" alt="">
                        </div>
                        <p>Horoscope</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <div class="img-service">
                            <img src="/frontend/images/tarot.webp" alt="">
                        </div>
                        <p>Tarot</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <div class="img-service">
                            <img src="/frontend/images/talk.svg" alt="">
                        </div>
                        <p>Talk to Astrologer</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <div class="img-service">
                            <img src="/frontend/images/muhurat.webp" alt="">
                        </div>
                        <p>2024 Muhurats</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <div class="img-service">
                            <img src="/frontend/images/love.svg" alt="">
                        </div>
                        <p>Love Compatibility</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <div class="img-service">
                            <img src="/frontend/images/name.svg" alt="">
                        </div>
                        <p>Name Compatibility</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="chat-with-astrologer">
    <div class="container">
        <div class="head-sec">
            <h2>To Get Free Call with our Astrologers</h2>
            <div class="head-btn">
                <a href="#" class="main-btn"><i class="fa-solid fa-phone"></i></a>
                <a href="#" class="main-btn"><i class="fa-brands fa-rocketchat"></i></a>
            </div>
        </div>
        <div class="owl-carousel" id="chat-slider">
            <div class="item">
                <div class="chat-info">
                    <a href="#">
                        <img src="/frontend/images/astrologer1.webp" alt="">
                        <h5>Acharya Ram Kumar</h5>
                        <p>Vedic Astrology</p>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="chat-info">
                    <a href="#">
                        <img src="/frontend/images/astrologer2.webp" alt="">
                        <h5>Acharya Subhansh</h5>
                        <p>Career</p>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="chat-info">
                    <a href="#">
                        <img src="/frontend/images/astrologer3.webp" alt="">
                        <h5>Acharya Gayatri</h5>
                        <p>Love, Finance</p>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="chat-info">
                    <a href="#">
                        <img src="/frontend/images/astrologer4.webp" alt="">
                        <h5>Acharya Anand</h5>
                        <p>Marriage, Love</p>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="chat-info">
                    <a href="#">
                        <img src="/frontend/images/astrologer5.webp" alt="">
                        <h5>Acharya Ramesh</h5>
                        <p>Career</p>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="chat-info">
                    <a href="#">
                        <img src="/frontend/images/astrologer6.webp" alt="">
                        <h5>Acharya Shyam</h5>
                        <p>Finance</p>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</section>
<section class="life-predictions">
    <div class="container">
        <div class="head-sec">
            <h2>Your Life Predictions</h2>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="life-prediction-content">
                    <a href="#">
                        <h5>Palm Reading</h5>
                        <p>Introducing our palmistry feature: snap a photo of your palm, and receive instant insights into your personality and future. Discover the secrets of your destiny with just a click.</p>
                        <img src="/frontend/images/chiromancy.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="life-prediction-content">
                    <a href="#">
                        <h5>Match Your Kundli</h5>
                        <img src="/frontend/images/match.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="life-prediction-content">
                    <a href="#">
                        <h5>Marriage Prediction</h5>
                        <img src="/frontend/images/couple.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-6">
                <div class="life-prediction-content">
                    <a href="#">
                        <h5>Check your Kundli</h5>
                        <p>Unlock the secrets of your destiny. Explore the depths of your life's journey, from career and love to marriage and business, with our expertly designed free Kundli.</p>
                        <img src="/frontend/images/crescent-moon.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="life-prediction-content">
                    <a href="#">
                        <h5>Shaadi Shubh Muhurat</h5>
                        
                        <img src="/frontend/images/deadline.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="life-prediction-content">
                    <a href="#">
                        <h5>Future Spouse Name</h5>
                        
                        <img src="/frontend/images/kiss.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="all-predictions">
    <div class="container">
        <div class="head-sec">
            <h2>Get all Predictions</h2>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="predictions-content">
                    <a href="#">
                        <h5>Car Prediction</h5>
                        <img src="/frontend/images/predictions1.webp" alt="">
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="predictions-content">
                    <a href="#">
                        <h5>Tarot Reading</h5>
                        <img src="/frontend/images/predictions2.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="predictions-content">
                    <a href="#">
                        <h5>Lucky number & colour</h5>
                        <img src="/frontend/images/predictions3.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="predictions-content">
                    <a href="#">
                        <h5>Find your Career Path</h5>
                        <img src="/frontend/images/predictions4.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="predictions-content">
                    <a href="#">
                        <h5>Numerology Predictions</h5>
                        <img src="/frontend/images/predictions5.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="predictions-content">
                    <a href="#">
                        <h5>Matching Personalities</h5>
                        <img src="/frontend/images/predictions6.webp" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-us-home" id="abt">
    <div class="container">
       <div class="row">
          <div class="col-5 abt-left aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
             <div class="abt-cont">
                <h2>About Astro Hanumanta</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
             </div>
             <div class="pro">
                <a href="#" class="main-btn">View More +</a>
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
<section class="blog-wrapper">
    <div class="container">
        <div class="head-sec">
            <h2>Blogs</h2>
            <a href="#" class="main-btn">View More</a>
        </div>
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
 <section class="testimonial-section">
    <div class="container">
        <div class="head-sec">
            <h2>What Clients Says</h2>
        </div>
        <div class="row">
            <div class="col-5">
                <div class="testimonial-img">
                    <div class="test-img clicked">
                        <img src="/frontend/images/test1.jpg" alt="">
                    </div>
                    <div class="test-img">
                        <img src="/frontend/images/test2.png" alt="">
                    </div>
                    <div class="test-img">
                        <img src="/frontend/images/test3.jpg" alt="">
                    </div>
                    <div class="test-img">
                        <img src="/frontend/images/test4.png" alt="">
                    </div>
                    <div class="test-img">
                        <img src="/frontend/images/test5.jpg" alt="">
                    </div>
                    <div class="test-img">
                        <img src="/frontend/images/test6.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="testimonial-content">
                    <div class="test-content active-content">
                        <p>Pellentesque ullamcorper magna vulputate vestibulum sollicitudin. Proin ac nibh vestibulum augue congue accumsan. Pellentesque id dignissim metus, vel rutrum nisl. In quis risus sem. Ut et lacus gravida ligula faucibus dictum.</p>
                        <h3>John Smith <span>- Astrologer</span></h3>
                    </div>
                    <div class="test-content">
                        <p>Etiam maximus ex vel ipsum commodo luctus. Mauris diam orci, semper quis leo vitae, pulvinar ultrices nulla. Praesent et erat arcu. Praesent blandit, ligula a tincidunt convallis, nunc velit dictum ex, at feugiat nulla mauris ac urna.</p>
                        <h3>R. Lilly <span>- Astrologer</span></h3>
                    </div>
                    <div class="test-content">
                        <p>Curabitur placerat venenatis auctor. Nullam scelerisque tempus cursus. Duis eu lacinia lectus. Mauris at blandit dolor. Aenean nisl odio, rhoncus et diam id, consequat lobortis felis. Fusce luctus suscipit velit.</p>
                        <h3>G. Zirkle <span>- Astrologer</span></h3>
                    </div>
                    <div class="test-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                        <h3>David Parker <span>- Astrologer</span></h3>
                    </div>
                    <div class="test-content">
                        <p>Duis venenatis nec mi vitae efficitur. Sed cursus egestas diam, at malesuada turpis interdum quis. Maecenas pretium diam quis neque molestie, sed fermentum orci varius. Pellentesque habitant morbi tristique</p>
                        <h3>Kenneth <span>- Astrologer</span></h3>
                    </div>
                    <div class="test-content">
                        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam vel ante id nulla consequat rhoncus vel ac nibh. Pellentesque porttitor quam ut vestibulum lacinia. Morbi a risus faucibus, facilisis magna.</p>
                        <h3>A. Dennett <span>- Astrologer</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
@endsection