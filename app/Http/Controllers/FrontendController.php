<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function horoscope(){
        return view('frontend.pages.others.horoscope');
    }

    public function kundliMatch(){
        return view('frontend.pages.others.kundli-matching');
    }

    public function aboutUs(){
        return view('frontend.pages.others.aboutUs');
    }

    public function blogs(){
        return view('frontend.pages.others.blogs');
    }

    public function contactUs(){
        return view('frontend.pages.others.contactUs');
    }

    public function dailyHoroscope(){
        return view('frontend.pages.others.dailyHoroscope');
    }

    public function tomorrowHoroscope(){
        return view('frontend.pages.others.tomorrowHoroscope');
    }

    public function weeklyHoroscope(){
        return view('frontend.pages.others.weeklyHoroscope');
    }

    public function monthlyHoroscope(){
        return view('frontend.pages.others.monthlyHoroscope');
    }

    public function yearlyHoroscope(){
        return view('frontend.pages.yearlyHoroscope');
    }

    public function yearHoroscope(){
        return view('frontend.pages.yearHoroscope');
    }

    public function ariesYearlyHoroscope(){
        return view('frontend.pages.others.ariesYearlyHoroscope');
    }

    public function yearlyHoroscopeTaurus(){
        return view('frontend.pages.yearlyHoroscope.taurus');
    }

    public function yearlyHoroscopeGemini(){
        return view('frontend.pages.yearlyHoroscope.gemini');
    }

    public function yearlyHoroscopeCancer(){
        return view('frontend.pages.yearlyHoroscope.cancer');
    }

    public function yearlyHoroscopeLeo(){
        return view('frontend.pages.yearlyHoroscope.leo');
    }

    public function yearlyHoroscopeVirgo(){
        return view('frontend.pages.yearlyHoroscope.virgo');
    }

    public function yearlyHoroscopeLibra(){
        return view('frontend.pages.yearlyHoroscope.libra');
    }

    public function yearlyHoroscopeScorpio(){
        return view('frontend.pages.yearlyHoroscope.scorpio');
    }

    public function yearlyHoroscopeSagittarius(){
        return view('frontend.pages.yearlyHoroscope.sagittarius');
    }

    public function yearlyHoroscopeCapricorn(){
        return view('frontend.pages.yearlyHoroscope.capricorn');
    }

    public function yearlyHoroscopeAquarius(){
        return view('frontend.pages.yearlyHoroscope.aquarius');
    }

    public function yearlyHoroscopePisces(){
        return view('frontend.pages.yearlyHoroscope.pisces');
    }

    

    public function festivals(){
        return view('frontend.pages.astrology.festivals');
    }

    public function planetaryTransit(){
        return view('frontend.pages.astrology.planetary-transit');
    }

    public function loveCompatibility(){
        return view('frontend.pages.astrology.love-compatibility');
    }

    public function kundliDosh(){
        return view('frontend.pages.astrology.kundli-doshas');
    }

    public function nakshatra(){
        return view('frontend.pages.astrology.nakshatra');
    }

    public function astrologyArticles(){
        return view('frontend.pages.astrology.astrology-articles');
    }

    public function astrologyNews(){
        return view('frontend.pages.astrology.astrology-news');
    }

    public function planets(){
        return view('frontend.pages.astrology.planets');
    }

    public function astrologyHouses(){
        return view('frontend.pages.astrology.astrology-houses');
    }

    public function astrologyRemedies(){
        return view('frontend.pages.astrology.astrology-remedies');
    }

    public function astrologyDasha(){
        return view('frontend.pages.astrology.astrology-dasha');
    }

    public function astrologyYoga(){
        return view('frontend.pages.astrology.astrology-yoga');
    }

    public function astrologyVratDates(){
        return view('frontend.pages.astrology.vrat-dates');
    }

    public function astrologyHinduRituals(){
        return view('frontend.pages.astrology.hindu-rituals');
    }

    public function astrologyJayanti(){
        return view('frontend.pages.astrology.jayanti');
    }

    public function astrologyMuhurata(){
        return view('frontend.pages.astrology.muhurata');
    }

    // Life Problems
    public function astrologyMarriage(){
        return view('frontend.pages.lifeProblems.marriage-astrology');
    }

    public function astrologyBusiness(){
        return view('frontend.pages.lifeProblems.business-astrology');
    }

    public function astrologyCareer(){
        return view('frontend.pages.lifeProblems.career-astrology');
    }

    public function astrologyCourtCase(){
        return view('frontend.pages.lifeProblems.court-case-astrology');
    }

    public function astrologyProperty(){
        return view('frontend.pages.lifeProblems.property-astrology');
    }


    public function astrologyHealth(){
        return view('frontend.pages.lifeProblems.health-astrology');
    }


    public function astrologyFinance(){
        return view('frontend.pages.lifeProblems.finance-astrology');
    }


    public function astrologyForeign(){
        return view('frontend.pages.lifeProblems.foreign-settlement-astrology');
    }


    public function astrologyGambling(){
        return view('frontend.pages.lifeProblems.betting-and-gambling');
    }


    public function astrologyPastLife(){
        return view('frontend.pages.lifeProblems.past-life-reading');
    }


    public function astrologyBirthTimeCorrection(){
        return view('frontend.pages.lifeProblems.birth-time-correction');
    }


    public function astrologyAboutVastu(){
        return view('frontend.pages.lifeProblems.vastu-shastra');
    }


    public function astrologyChildren(){
        return view('frontend.pages.lifeProblems.children-astrology');
    }


    public function astrologyCommercial(){
        return view('frontend.pages.lifeProblems.vastu-for-commercial');
    }


    public function astrologyShareMarket(){
        return view('frontend.pages.lifeProblems.share-market-astrology');
    }

}
