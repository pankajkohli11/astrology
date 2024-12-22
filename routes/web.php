<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
    
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/', function () {
//     return view('frontend.home');
// });
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/horoscope', [FrontendController::class, 'horoscope'])->name('horoscope');
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contactUs');
Route::get('/blogs', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('/kundli-matching', [FrontendController::class, 'kundliMatch'])->name('kundliMatch');
Route::get('/daily-horoscope', [FrontendController::class, 'dailyHoroscope'])->name('dailyHoroscope');
Route::get('/tomorrow-horoscope', [FrontendController::class, 'tomorrowHoroscope'])->name('tomorrowHoroscope');
Route::get('/weekly-horoscope', [FrontendController::class, 'weeklyHoroscope'])->name('weeklyHoroscope');
Route::get('/monthly-horoscope', [FrontendController::class, 'monthlyHoroscope'])->name('monthlyHoroscope');
Route::get('/yearly-horoscope', [FrontendController::class, 'yearlyHoroscope'])->name('yearlyHoroscope');
Route::get('/horoscope-{year}', [FrontendController::class, 'yearHoroscope'])->name('yearHoroscope');
Route::get('/aries-yearly-horoscope-{year}', [FrontendController::class, 'ariesYearlyHoroscope'])->name('ariesYearlyHoroscope');
Route::get('/yearly-horoscope-{year}-for-taurus', [FrontendController::class, 'yearlyHoroscopeTaurus'])->name('yearlyHoroscopeTaurus');
Route::get('/yearly-horoscope-{year}-for-gemini', [FrontendController::class, 'yearlyHoroscopeGemini'])->name('yearlyHoroscopeGemini');
Route::get('/yearly-horoscope-{year}-for-cancer', [FrontendController::class, 'yearlyHoroscopeCancer'])->name('yearlyHoroscopeCancer');
Route::get('/yearly-horoscope-{year}-for-leo', [FrontendController::class, 'yearlyHoroscopeLeo'])->name('yearlyHoroscopeLeo');
Route::get('/yearly-horoscope-{year}-for-virgo', [FrontendController::class, 'yearlyHoroscopeVirgo'])->name('yearlyHoroscopeVirgo');
Route::get('/yearly-horoscope-{year}-for-libra', [FrontendController::class, 'yearlyHoroscopeLibra'])->name('yearlyHoroscopeLibra');
Route::get('/yearly-horoscope-{year}-for-scorpio', [FrontendController::class, 'yearlyHoroscopeScorpio'])->name('yearlyHoroscopeScorpio');
Route::get('/yearly-horoscope-{year}-for-sagittarius', [FrontendController::class, 'yearlyHoroscopeSagittarius'])->name('yearlyHoroscopeSagittarius');
Route::get('/yearly-horoscope-{year}-for-capricorn', [FrontendController::class, 'yearlyHoroscopeCapricorn'])->name('yearlyHoroscopeCapricorn');
Route::get('/yearly-horoscope-{year}-for-aquarius', [FrontendController::class, 'yearlyHoroscopeAquarius'])->name('yearlyHoroscopeAquarius');
Route::get('/yearly-horoscope-{year}-for-pisces', [FrontendController::class, 'yearlyHoroscopePisces'])->name('yearlyHoroscopePisces');
// Astrology Menu
Route::get('/festivals', [FrontendController::class, 'festivals'])->name('festivals');
Route::get('/planetary-transit', [FrontendController::class, 'planetaryTransit'])->name('planetaryTransit');
Route::get('/love-compatibility', [FrontendController::class, 'loveCompatibility'])->name('loveCompatibility');
Route::get('/kundli-dosh', [FrontendController::class, 'kundliDosh'])->name('kundliDosh');
Route::get('/nakshatra', [FrontendController::class, 'nakshatra'])->name('nakshatra');
Route::get('/astrology-articles', [FrontendController::class, 'astrologyArticles'])->name('astrologyArticles');
Route::get('/astrology-news', [FrontendController::class, 'astrologyNews'])->name('astrologyNews');
Route::get('/planets', [FrontendController::class, 'planets'])->name('planets');
Route::get('/astrology-houses', [FrontendController::class, 'astrologyHouses'])->name('astrologyHouses');
Route::get('/astrology-remedies', [FrontendController::class, 'astrologyRemedies'])->name('astrologyRemedies');
Route::get('/astrology-dasha', [FrontendController::class, 'astrologyDasha'])->name('astrologyDasha');
Route::get('/astrology-yoga', [FrontendController::class, 'astrologyYoga'])->name('astrologyYoga');
Route::get('/vrat-dates', [FrontendController::class, 'astrologyVratDates'])->name('astrologyVratDates');
Route::get('/hindu-rituals', [FrontendController::class, 'astrologyHinduRituals'])->name('astrologyHinduRituals');
Route::get('/jayanti', [FrontendController::class, 'astrologyJayanti'])->name('astrologyJayanti');
Route::get('/muhurata', [FrontendController::class, 'astrologyMuhurata'])->name('astrologyMuhurata');

// Life Problems
Route::get('/marriage-astrology', [FrontendController::class, 'astrologyMarriage'])->name('astrologyMarriage');
Route::get('/business-astrology', [FrontendController::class, 'astrologyBusiness'])->name('astrologyBusiness');
Route::get('/career-astrology', [FrontendController::class, 'astrologyCareer'])->name('astrologyCareer');
Route::get('/court-case-astrology', [FrontendController::class, 'astrologyCourtCase'])->name('astrologyCourtCase');
Route::get('/property-astrology', [FrontendController::class, 'astrologyProperty'])->name('astrologyProperty');
Route::get('/health-astrology', [FrontendController::class, 'astrologyHealth'])->name('astrologyHealth');
Route::get('/finance-astrology', [FrontendController::class, 'astrologyFinance'])->name('astrologyFinance');
Route::get('/betting-and-gambling', [FrontendController::class, 'astrologyGambling'])->name('astrologyGambling');
Route::get('/foreign-settlement-astrology', [FrontendController::class, 'astrologyForeign'])->name('astrologyForeign');
Route::get('/past-life-reading', [FrontendController::class, 'astrologyPastLife'])->name('astrologyPastLife');
Route::get('/birth-time-correction', [FrontendController::class, 'astrologyBirthTimeCorrection'])->name('astrologyBirthTimeCorrection');
Route::get('/children-astrology', [FrontendController::class, 'astrologyChildren'])->name('astrologyChildren');
Route::get('/vastu-for-commercial', [FrontendController::class, 'astrologyCommercial'])->name('astrologyCommercial');
Route::get('/share-market-astrology', [FrontendController::class, 'astrologyShareMarket'])->name('astrologyShareMarket');
Route::get('/what-is-vastu-all-about-vastu', [FrontendController::class, 'astrologyAboutVastu'])->name('astrologyAboutVastu');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/user-info',[ProfileController::class,'userUpdate'])->name('userUpdate');
});


// Group routes for admin
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
   
    // User Manage
    Route::get('/all/users',[UserController::class,'index'])->name('all.user');
    Route::get('/add/users', [UserController::class, 'create'])->name('add.user');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('edit.user');
    Route::delete('/user/delete/{id}', [UserController::class, 'delete'])->name('edit.delete');
    Route::post('/user/update/', [UserController::class, 'update'])->name('update.user');
    Route::post('register/user', [UserController::class, 'store'])->name('register.store');
    
    // Slider Management
    Route::get('/all/sliders',[SliderController::class,'index'])->name('all.slider');
    Route::get('/add/slider', [SliderController::class, 'create'])->name('add.slider');
    Route::post('slider/store', [SliderController::class, 'store'])->name('slider.store');
    Route::get('/slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('/slider/update/', [SliderController::class, 'update'])->name('update.slider');

    // Website Setting
    Route::get('/web/setting', [SettingController::class, 'index'])->name('admin.web.setting');
    Route::post('/companies', [SettingController::class, 'store'])->name('setting.web'); // Create
    Route::put('/companies/{id}', [SettingController::class, 'store']); // Update
    Route::get('/companies/{id}', [SettingController::class, 'show']); 


    // Auto Fetch Designation with Department
    Route::get('department/designation/get', [DepartmentController::class, 'getDesignation'])->name('department.designation.get');
});

// Group routes for employee adminHolidayEdit
Route::middleware(['auth', 'role:employee'])->group(function () {
    Route::get('/employee', [DashboardController::class, 'employeeDashboard'])->name('employee.dashboard');
});

require __DIR__.'/auth.php';
