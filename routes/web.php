<?php

use App\Http\Controllers\Backend\AboutTabGroupController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\ClientFeedbackController;
use App\Http\Controllers\Backend\ClientMultiImageCntroller;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\FooterController;
use App\Http\Controllers\Backend\HomeAboutController;
use App\Http\Controllers\Backend\HomeMultiImageController;
use App\Http\Controllers\Backend\PartnerMultiimageController;
use App\Http\Controllers\Backend\PartnersController;
use App\Http\Controllers\Backend\PortfolioCategoryController;
use App\Http\Controllers\Backend\SectionCaptionController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\WorkingController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\HomeHeroController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Models\ClientFeedback;
use App\Models\partners;
use App\Models\PartnersMultiImage;
use Illuminate\Support\Facades\Route;


// all fronend routes
Route::controller(FrontendController::class)->group(function () {
  Route::get('/', 'index')->name('home.page');
  Route::get('services/details/{id}/{slug}', 'servicesDetails')->name('servics.deatails');
  Route::get('portfolio/details/{id}/{slug}', 'portfolioDetails')->name('portfolio.details');
  Route::get('/blog/details/{id}/{slug}', 'blogDetails')->name('blog.details.');
  Route::get('all/blogs/', 'allBlog')->name('all.blog');
  Route::get('category/{slug}', 'categoryBlog')->name('category.blog');
  Route::get('tag/{tags}', 'tagBlog')->name('tag.blog');



  // about page
  Route::get('about', 'aboutPage')->name('about.page');
  // services page
  Route::get('service', 'servicesPage')->name('services.page');
  // all portfolio
  Route::get('all/portfolio', 'allPortfolio')->name('all.portfolio');
  // contact us
  Route::get('contact', 'contactUs')->name('contact.us');

  // cv download
  Route::get('cv/download', 'cvDwonload')->name('cv.download');
  Route::post('send/message', 'sendMessage')->name('send.message');
});



Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// all backend rroutes
Route::middleware(['auth', 'verified'])->group(function () {
  Route::controller(AdminController::class)->group(function () {
    Route::get('admin/dashboard', 'adminDashboard')->name('admin.dashboard');
    /**admin prifle all routes */
    Route::get('admin/profile', 'AdminProfile')->name('admin.profile');
    Route::put('update/profile', 'Updateprofile')->name('update.profile');
  });

  // Home Hero all routes
  Route::controller(HomeHeroController::class)->group(function () {
    Route::get('mange/home/hero', 'homeHero')->name('mange.home.hero');
    Route::put('update/home/hero/{id}', 'UpdateHomeHero')->name('update.home.hero');
  });

  // home about multi iamge
  Route::resource('home/about/multiimage', HomeMultiImageController::class);
  // home about all routes
  Route::controller(HomeAboutController::class)->group(function () {
    Route::get('home/about/edit', 'homeAboutEdit')->name('home.about.edit');
    Route::put('home/about/update/{id}', 'homeAboutUpdate')->name('home.about.update');
  });

  // services all routes
  Route::resource('services', ServicesController::class);
  // working all routes
  Route::resource('working', WorkingController::class);
  // portfolio category all routes
  Route::resource('portfoliocategory', PortfolioCategoryController::class);
  // portfolio category all routes
  Route::resource('portfolio', PortfolioController::class);
  // partners multi image
  Route::resource('partners-multiimage', PartnerMultiimageController::class);
  // partners informations
  Route::controller(PartnersController::class)->group(function () {
    Route::get('edit/partners/information', 'edit')->name('edit.partner.ifnormation');
    Route::put('update/partners/information/{id}', 'update')->name('update.partner.ifnormation');
  });

  // client feedback 
  Route::resource('client/feedback', ClientFeedbackController::class);
  // client multi image
  Route::resource('client-multiimage', ClientMultiImageCntroller::class);

  // blog category all routes
  Route::resource('blog-category', BlogCategoryController::class);
  // all blog route
  Route::resource('blog', BlogController::class);

  // footer all routes
  Route::controller(FooterController::class)->group(function () {
    Route::get('edit/footer', 'edit')->name('edit.footer');
    Route::put('update/footer/{id}', 'update')->name('update.footer');
  });

  // all contact routes
  Route::controller(ContactController::class)->group(function () {
    Route::get('edit/location', 'EditLocation')->name('edit.location');
    Route::put('update/location/{id}', 'UpdateLocation')->name('update.location');
  });

  //=================================================about page================================
  Route::resource('about/tab-group', AboutTabGroupController::class);



  // ================= all section caption controller
  Route::controller(SectionCaptionController::class)->group(function () {
    // services caption
    Route::get('service/caption/edit', 'ServicescapEdit')->name('services.caoption.edit');
    Route::put('service/caption/update/{id}', 'Servicescapupdate')->name('services.caoption.update');

    // work-process caption
    Route::get('work-process/caption/edit', 'workprocessscapEdit')->name('work.processs.caoption.edit');
    Route::put('work-process/caption/update/{id}', 'workprocessscapupdate')->name('work.processs.caoption.update');

    // creative-work caption
    Route::get('creative-work/caption/edit', 'creativecapEdit')->name('creative.work.caoption.edit');
    Route::put('creative-work/caption/update/{id}', 'creativecapupdate')->name('creative.work.caoption.update');

    // client-feedback caption
    Route::get('client-feedback/caption/edit', 'clientfeedbackEdit')->name('client.feedback.caoption.edit');
    Route::put('client-feedback/caption/update/{id}', 'clientfeedbackupdate')->name('client.feedback.caoption.update');
  });
});
