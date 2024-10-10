<?php

use App\Models\AdminAuth;
use App\Http\Middleware\CacheClear;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LoggedInCheck;
use App\Http\Controllers\auth\UserAuth;
use App\Http\Controllers\MainDashboard;
use App\Http\Controllers\UserDashboard;
use App\Http\Middleware\LoggedInCheck2;
use App\Http\Middleware\languageconverter;
use App\Http\Middleware\AdminLoggedInCheck;
use App\Http\Controllers\AdminAuthController;
use App\Models\VisitorCounter;

Route::get('admin-login', [AdminAuthController::class, 'login_index']);
Route::post('adminlogin', [AdminAuthController::class, 'login']);


Route::middleware([CacheClear::class])->group(function () {
    Route::middleware([AdminLoggedInCheck::class])->group(function () {
        Route::get('admin-dashboard', [AdminAuthController::class, 'index']);
        Route::get('user-admin-dashboard', [AdminAuthController::class, 'user_admin_index']);
        Route::get('course-admin-dashboard', [AdminAuthController::class, 'course_admin_index']);
        Route::get('tutor-admin-dashboard', [AdminAuthController::class, 'tutor_admin_index']);
        Route::get('admin-logout', [AdminAuthController::class, 'adminlogout']);
    });
});

Route::get('ad_reg', function () {

    $name = 'Admin';
    $email = 'admin@gmail.com';
    $password = Hash::make('123456');


    $admin = new AdminAuth();
    $admin->name = $name;
    $admin->email = $email;
    $admin->password = $password;
    $admin->save();

    return back();
});

Route::middleware([CacheClear::class])->group(function () {
    Route::middleware([LoggedInCheck2::class])->group(function () {

        Route::get('signup', [UserAuth::class, 'index']);
        Route::post('/user-register', [UserAuth::class, 'sign_up']);

        Route::get('/login-here', [UserAuth::class, 'login_index']);
        Route::post('/user-login', [UserAuth::class, 'login']);

        Route::get('/forget-password', [UserAuth::class, 'forget_index']);
        Route::post('/user-forget', [UserAuth::class, 'forget_password']);
        Route::post('/create-password', [UserAuth::class, 'create_password']);
        Route::get('/recover-password/{id}', [UserAuth::class, 'forgetpassword'])->name('forget.verify');


        Route::get('auth/google', [UserAuth::class, 'google_login']);
        Route::any('/auth/google/callback', [UserAuth::class, 'callbackgoogle']);

        Route::get('auth/linkedin', [UserAuth::class, 'linkedin_login']);
        Route::any('/auth/linkedin/callback', [UserAuth::class, 'callbacklinkedin']);


        Route::get('auth/facebook', [UserAuth::class, 'facebook_login']);
        Route::any('/auth/facebook/callback', [UserAuth::class, 'callbackfacebook']);
    });
});


Route::get('/', function () {
   // session(['locale' => 'fr']);
    // Fetch the first record (assuming there is only one record for the visitor count)
    $visitorRecord = VisitorCounter::first();

    if ($visitorRecord) {
        // Increment the visitor count
        $visitorRecord->visitor += 1;
        $visitorRecord->save();
    } else {
        // Handle the case where no record exists, if needed
        VisitorCounter::create(['visitor' => 1]);
    }

    return view('home');
});



Route::fallback(function () {
    return redirect('/');
});

Route::get('/verify-email/{id}', [UserAuth::class, 'verify'])->name('verification.verify');

Route::get('/change-language/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fr', 'hc'])) {
        session(['locale' => $locale]);
        return redirect()->back();
    }
    return redirect()->back();
});


Route::get('/our-course', [MainDashboard::class, 'course_index']);
Route::get('/our-blog', [MainDashboard::class, 'blog_index']);
Route::get('/about-us', [MainDashboard::class, 'about_index']);
Route::get('/our-team', [MainDashboard::class, 'team_index']);
Route::get('/contact-us', [MainDashboard::class, 'contact_index']);

Route::middleware([CacheClear::class])->group(function () {
    Route::middleware([LoggedInCheck::class])->group(function () {

        Route::get('/user-dashboard', [UserDashboard::class, 'index']);
        Route::get('/student-course-taken', [UserDashboard::class, 'course_index']);
        Route::get('/student-notice', [UserDashboard::class, 'notice_index']);
        Route::get('/student-quiz', [UserDashboard::class, 'quize_index']);
        Route::get('/student-faqs', [UserDashboard::class, 'faqs_index']);
        Route::get('/student-orders', [UserDashboard::class, 'order_index']);
        Route::get('/student-calender', [UserDashboard::class, 'calender_index']);
        Route::post('/update-avatar', [UserDashboard::class, 'updateAvatar']);
        Route::get('/user-logout', [UserAuth::class, 'logout']);

        Route::post('/update-date', [UserDashboard::class, 'updateDate'])->name('update.date');
        Route::post('/update-fname', [UserDashboard::class, 'updateFirstName'])->name('update.fname');
        Route::post('/update-sname', [UserDashboard::class, 'updateSurname'])->name('update.sname');
        Route::post('/update-uname', [UserDashboard::class, 'updateUsername'])->name('update.uname');
        Route::post('/update-email', [UserDashboard::class, 'updateEmail'])->name('update.email');
        Route::post('/update-phone', [UserDashboard::class, 'updatePhone'])->name('update.phone');
        Route::post('/update-skill', [UserDashboard::class, 'updateSkill'])->name('update.skill');
        Route::post('/update-bio', [UserDashboard::class, 'updateBio'])->name('update.bio');
    });
});
