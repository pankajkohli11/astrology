<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Astro')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/horoscope.css')}}">
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-4 header-logo">
                <a href="{{route('home')}}" class="logo">
                    <img src="/frontend/images/logo.png" alt="">
                </a>
            </div>
            <div class="col-8 header-right">
                <ul>
                    <li class="customer-care">
                    <img src="/frontend/images/telephone-call.png" alt="">
                    <div class="customer-info">
                        <p>Customer Care</p>
                        <a href="tel:1234567890">1234 567 890</a>
                    </div>
                    </li>
                    <li>
                        <a href="#" class="main-btn">Consult Now</a>
                    </li>
                    <li>
                        <a href="#" class="sign-in"><i class="fa-regular fa-user"></i>Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>