@extends('frontend.layouts.app')
@section('title','Daily Horoscope')
@section('content')
<section class="contact-banner">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5>Today's</h5>
                <h1>Horoscope-Daily Prediction</h1>
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
        <div class="horo-main-img">
        <img src="/frontend/images/horo-banner.webp" alt="">
    </div>
        <div class="horo-para">
            <p>Welcome to the Daily  Horoscope page of Dr. Vinay Bajrangi! Here, you’ll discover profound insights tailored to guide you through the complexities of daily life. Our horoscopes are not just generic predictions; they are carefully crafted analyses based on the intricate movements of celestial bodies, including the transit of stars through Zodiac signs and Nakshatras.</p>
            <p>Understanding your horoscope is essential as it provides a roadmap to navigate life's challenges and opportunities. The stars can reveal insights about your personality, relationships, and even potential life events. By aligning yourself with these cosmic energies, you can make informed decisions and foster personal growth.</p>
            <p>Dr. Vinay Bajrangi’s expertise in astrology allows him to offer accurate and relevant predictions. His approach combines traditional astrological wisdom with modern techniques, ensuring that each reading resonates deeply with each individual's unique astrological makeup.</p>
            <h2>How does Dr Vinay Bajrangi create these horoscopes?</h2>
            <p>Dr. Bajrangi meticulously analyzes the transit of stars and planets, focusing not just on Zodiac signs but also on Nakshatras. This comprehensive method enhances the accuracy and depth of each prediction.</p>
            <h2>Why are horoscopes important?</h2>
            <p>Horoscopes provide essential insights into your daily life, helping you understand the energies at play. They can guide you in making informed decisions in personal and professional matters.</p>
            <div class="ads">
                <h2>Get Personalised Career/Business Horoscope for 2025</h2>
                <a href="#" class="main-btn">Get Report</a>
            </div>
            <h2>How accurate are the predictions?</h2>
            <p>The predictions are highly accurate, thanks to Dr. Bajrangi’s extensive knowledge and experience in astrology. Each forecast is crafted with careful consideration of astrological transits and their implications.</p>
            <h2>Can horoscopes help me with relationships?</h2>
            <p>Absolutely! Our horoscopes often address relationship dynamics, offering guidance on compatibility and potential challenges based on astrological influences</p>
            <h2>How frequently are the horoscopes updated?</h2>
            <p>Daily horoscopes are updated every day to reflect the latest astrological insights. Weekly and yearly horoscopes are also available to provide broader perspectives.</p>
        </div>
    </div>
</section>
@endsection