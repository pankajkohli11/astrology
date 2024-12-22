<div class="menu-top">
    <div class="container">
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Horoscope</a>
                    <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="{{route('horoscope')}}">Horoscope</a></li>
                     <li><a class="dropdown-item" href="{{route('dailyHoroscope')}}">Daily Horoscope</a></li>
                     <li><a class="dropdown-item" href="{{route('tomorrowHoroscope')}}">Tomorrow Horoscope</a></li>
                     <li><a class="dropdown-item" href="{{route('weeklyHoroscope')}}">Weekly Horoscope</a></li>
                     <li><a class="dropdown-item" href="{{route('monthlyHoroscope')}}">Monthly Horoscope</a></li>
                     <li><a class="dropdown-item" href="{{route('yearlyHoroscope')}}">Yearly Horoscope</a></li>
                    </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Horoscope {{$year}}</a>
                    <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="{{route('yearHoroscope',['year' => $year])}}">Horoscope {{$year}}</a></li>
                     <li><a class="dropdown-item" href="{{route('ariesYearlyHoroscope',['year' => $year])}}">Aries Yearly Horoscope {{$year}}</a></li>
                     <li><a class="dropdown-item" href="{{ route('yearlyHoroscopeTaurus', ['year' => $year]) }}">Yearly Horoscope {{$year}} for Taurus</a></li>
                     <li><a class="dropdown-item" href="{{route('yearlyHoroscopeGemini',['year' => $year])}}">Yearly Horoscope {{$year}} for Gemini</a></li>
                     <li><a class="dropdown-item" href="{{route('yearlyHoroscopeCancer',['year' => $year])}}">Yearly Horoscope {{$year}} for Cancer</a></li>
                     <li><a class="dropdown-item" href="{{route('yearlyHoroscopeLeo',['year' => $year])}}">Yearly Horoscope {{$year}} for Leo</a></li>
                     <li><a class="dropdown-item" href="{{route('yearlyHoroscopeVirgo',['year' => $year])}}">Yearly Horoscope {{$year}} for Virgo</a></li>
                     <li><a class="dropdown-item" href="{{route('yearlyHoroscopeLibra',['year' => $year])}}">Yearly Horoscope {{$year}} for Libra</a></li>
                     <li><a class="dropdown-item" href="{{route('yearlyHoroscopeScorpio',['year' => $year])}}">Yearly Horoscope {{$year}} for Scorpio</a></li>
                     <li><a class="dropdown-item" href="{{route('yearlyHoroscopeSagittarius',['year' => $year])}}">Yearly Horoscope {{$year}} for Sagittarius</a></li>
                     <li><a class="dropdown-item" href="{{route('yearlyHoroscopeCapricorn',['year' => $year])}}">Yearly Horoscope {{$year}} for Capricorn</a></li>
                     <li><a class="dropdown-item" href="{{route('yearlyHoroscopeAquarius',['year' => $year])}}">Yearly Horoscope {{$year}} for Aquarius</a></li>
                     <li><a class="dropdown-item" href="{{route('yearlyHoroscopePisces',['year' => $year])}}">Yearly Horoscope {{$year}} for Pisces</a></li>
                    </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Astrology</a>
                    <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="{{route('festivals')}}">Festivals</a></li>
                     <li><a class="dropdown-item" href="{{route('planetaryTransit')}}">Planetary Transit</a></li>
                     <li><a class="dropdown-item" href="{{route('loveCompatibility')}}">Love Compatibility</a></li>
                     <li><a class="dropdown-item" href="{{route('kundliDosh')}}">Kundli Doshas</a></li>
                     <li><a class="dropdown-item" href="{{route('nakshatra')}}">Nakshatra</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyArticles')}}">Astrology Articles</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyNews')}}">Astrology News</a></li>
                     <li><a class="dropdown-item" href="{{route('planets')}}">Planets in Different Houses & Signs</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyHouses')}}">Astrology Houses</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyRemedies')}}">Astrology Remedies</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyDasha')}}">Astrology Dasha</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyYoga')}}">Astrology Yoga</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyVratDates')}}">Vrat Dates</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyHinduRituals')}}">Hindu Rituals</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyJayanti')}}">Jayanti</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyMuhurata')}}">Muhurata</a></li>
                    </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Life Problems</a>
                    <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="{{route('astrologyMarriage')}}">Marriage Astrology</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyBusiness')}}">Business Astrology</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyCareer')}}">Career Astrology</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyCourtCase')}}">Court / Legal issues</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyProperty')}}">Property astrology</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyHealth')}}">Health Astrology</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyFinance')}}">Loan and Debt</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyGambling')}}">Betting and Gambling</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyForeign')}}">Foreign Settlement</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyPastLife')}}">Past Life Readings</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyBirthTimeCorrection')}}">Birth Time Correction</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyChildren')}}">Children Astrology</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyAboutVastu')}}">What is Vastu - All about Vastu</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyCommercial')}}">Vastu For Commercial</a></li>
                     <li><a class="dropdown-item" href="{{route('astrologyShareMarket')}}">Share Market Astrology</a></li>
                    </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kundli</a>
                    <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="{{route('kundliMatch')}}">Kundli Matching</a></li>
                    
                    </ul>
            </li>
            <li><a href="{{route('aboutUs')}}">About Us</a></li>
            <li><a href="{{route('contactUs')}}">Contact Us</a></li>
            <li><a href="{{route('blogs')}}">Blogs</a></li>
        </ul>
    </div>
</div>