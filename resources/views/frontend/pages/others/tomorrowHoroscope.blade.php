@extends('frontend.layouts.app')
@section('title','Tomorrow Horoscope')
@section('content')
<section class="contact-banner">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5>Tomorrow</h5>
                <h1>Horoscope</h1>
            </div>
        </div>
    </div>
</section>
<section class="horoscope-section">
    <div class="container">
        <div class="inner-horoscope-details">
            <div class="sign-details">
                <div class="sign-list">
                    <a href="#"><img src="/frontend/images/Aries.webp" alt="">Aries</a>
                </div>
                <div class="sign-list">
                    <a href="#"><img src="/frontend/images/Tauras.webp" alt="">Taurus</a>
                </div>
                <div class="sign-list">
                    <a href="#"><img src="/frontend/images/Gemini.webp" alt="">Gemini</a>
                </div>
                <div class="sign-list">
                    <a href="#"><img src="/frontend/images/Cancer.webp" alt="">Cancer</a>
                </div>
                <div class="sign-list">
                    <a href="#"><img src="/frontend/images/Leo.webp" alt="">Leo</a>
                </div>
                <div class="sign-list">
                    <a href="#"><img src="/frontend/images/Virgo.webp" alt="">Virgo</a>
                </div>
                <div class="sign-list">
                    <a href="#"><img src="/frontend/images/Libra.webp" alt="">Libra</a>
                </div>
                <div class="sign-list">
                    <a href="#"><img src="/frontend/images/Scorpio.webp" alt="">Scorpio</a>
                </div>
                <div class="sign-list">
                    <a href="#"><img src="/frontend/images/Sagittarius.webp" alt="">Sagittarius</a>
                </div>
                <div class="sign-list">
                    <a href="#"><img src="/frontend/images/Capricorn.webp" alt="">Capricorn</a>
                </div>
                <div class="sign-list">
                    <a href="#"><img src="/frontend/images/Aquarius.webp" alt="">Aquarius</a>
                </div>
                <div class="sign-list">
                    <a href="#"><img src="/frontend/images/Pices.webp" alt="">Pisces</a>
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
                        <p>Daily Horoscope</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <div class="img-service">
                            <img src="/frontend/images/horo.svg" alt="">
                        </div>
                        <p>Tomorrow Horoscope</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <div class="img-service">
                            <img src="/frontend/images/horo.svg" alt="">
                        </div>
                        <p>Weekly Horoscope</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <div class="img-service">
                            <img src="/frontend/images/horo.svg" alt="">
                        </div>
                        <p>Monthly Horoscope</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <div class="img-service">
                            <img src="/frontend/images/horo.svg" alt="">
                        </div>
                        <p>Yearly Horoscope</p>
                        </a>
                    </li>
                    
                    
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="consultation-horoscope">
    <div class="container">
        <div class="consultation-details">
            <div class="consultation-info">
                <a href="#"><img src="/frontend/images/consultation1.webp" alt="">
                <p>Consultation</p></a>
            </div>
            <div class="consultation-info">
                <a href="#"><img src="/frontend/images/consultation2.webp" alt="">
                <p>Online Report</p>
            </a>
            </div>
            <div class="consultation-info">
                <a href="#"><img src="/frontend/images/consultation3.webp" alt="">
                <p>Voice Report</p>
            </a>
            </div>
            <div class="consultation-info">
                <a href="#"><img src="/frontend/images/consultation4.webp" alt="">
                <p>Life Readings</p>
            </a>
            </div>
        </div>
    </div>
</section>
<section class="horoscope-content">
    <div class="container">
        
        <div class="horo-para">
            <p>A "Tomorrow's Horoscope" is a daily astrological forecast that provides insights into what might happen the following day based on your zodiac sign. It offers guidance on various aspects of life, such as love, career, health, and finances, helping individuals prepare for potential challenges and opportunities. By reading tomorrow's horoscope, people can make informed decisions, plan their day better, and gain a sense of reassurance and direction. It serves as a tool for personal reflection and anticipation, enhancing one's ability to navigate daily life with greater awareness and confidence.</p>
        </div>
    </div>
</section>
@endsection