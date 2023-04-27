<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\JudgesController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VoteCountController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AwardProgramsController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\VoterLoginController;
use App\Http\Controllers\Auth\VoterRegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('contents.admin.dashboard');
// });

//Admin Routes

Route::prefix('admin')->group(function(){
    Route::get('login', [AdminLoginController::class, 'showAdminLoginForm'])->name('admin.login');
    Route::post('login', [AdminLoginController::class, 'login'])->name('admin.loginn');

    Route::get('', [AwardProgramsController::class, 'getAllAwardPrograms'])->name('award.programs');
    Route::prefix('award-programs')->group(function(){
        Route::post('create', [AwardProgramsController::class, 'AddAwardProgram'])->name('award.program.create');
        Route::prefix('{award_program}')->group(function(){
            Route::get('dashboard', [AwardProgramsController::class, 'getAwardProgramDashboard'])->name('award.program');
            Route::get('edit', [AwardProgramsController::class, 'editAwardProgram'])->name('award.program.edit');
            Route::get('delete', [AwardProgramsController::class, 'deleteAwardProgram'])->name('award.program.delete');
            Route::put('update', [AwardProgramsController::class, 'updateAwardProgram'])->name('award.program.update');
            Route::get('activate', [AwardProgramsController::class, 'activateAwardProgram'])->name('award.program.activate');
            Route::get('deactivate', [AwardProgramsController::class, 'deactivateAwardProgram'])->name('award.program.deactivate');
        
            Route::prefix('categories')->group(function(){
                Route::get('', [CategoryController::class, 'getCategories'])->name('admin.show_categories');
                Route::post('create', [CategoryController::class, 'addCategory'])->name('admin.create_category');
                Route::put('{category}/update', [CategoryController::class, 'updateCategory'])->name('admin.update_category');
                Route::delete('{category}/delete', [CategoryController::class, 'deleteCategory'])->name('admin.delete_category');
                Route::get('{category}/sectors', [CategoryController::class, 'getSpecificSectors'])->name('admin.get_sectors');
            });

            Route::prefix('sectors')->group(function(){
                Route::get('', [SectorController::class, 'getSectors'])->name('admin.show_sectors');
                Route::post('create', [SectorController::class, 'addSector'])->name('admin.create_sector');
                Route::put('{sector}/update', [SectorController::class, 'updateSector'])->name('admin.update_sector');
                Route::delete('{sector}/delete', [SectorController::class, 'deleteSector'])->name('admin.delete_sector');
            });

            Route::prefix('awards')->group(function(){
                Route::get('', [AwardController::class, 'getAwards'])->name('admin.show_awards');
                Route::post('create', [AwardController::class, 'addAward'])->name('admin.create_award');
                Route::put('{award}/update', [AwardController::class, 'updateAward'])->name('admin.update_award');
                Route::delete('{award}/delete', [AwardController::class, 'deleteAward'])->name('admin.delete_award');

            });
            
            Route::prefix('votes')->group(function(){
                Route::get('', [VoteCountController::class, 'getCatSec'])->name('admin.get_cat_sec');
                Route::get('categories/{category}', [VoteCountController::class, 'getSectorsAwards'])->name('admin.get_sectors_awards');

            });

            Route::prefix('voters')->group(function(){
                Route::get('', [VoterController::class, 'getVoters'])->name('admin.get_voters');
            });

            Route::prefix('admins')->group(function(){
                Route::get('', [AdminController::class, 'getAdmins'])->name('admin.get_admins');
            });

            Route::prefix('judges')->group(function(){
                Route::get('', [JudgesController::class, 'getJudges'])->name('admin.get_judges');
                Route::post('create', [JudgesController::class, 'addJudges'])->name('admin.create_judges');
                Route::get('judgingcategory', [JudgesController::class, 'loadJudgingCategoryPage'])->name('admin.load_judging_category_page');
                Route::get('judgingsector/{category_id}', [JudgesController::class, 'loadJudgingCategorySectorPage'])->name('admin.load_judging_category_sector_page');
                Route::get('judging/{category_id}/{sector_id}', [JudgesController::class, 'loadJudgingAwards'])->name('admin.load_judging_awards');
            });

        });
    });

    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');


    
    // Route::get('add', [AdminAuthController::class, 'showAddAdminForm']);
    // Route::post('store', [AdminAuthController::class, 'adminRegister']);
    // Route::delete('delete', [AdminAuthController::class, 'adminDelete']);
    // Route::put('', [AdminAuthController::class, 'adminUpdate']);
    // Route::get('', [AdminAuthController::class, 'setPassword']);

});
// Route::get('/', [LandingController::class, 'showLandingPageIndex'])->name('show_landing_index');


Route::get('register', [VoterRegisterController::class, 'showRegisterForm'])->name('show_register_form');
Route::post('register', [VoterRegisterController::class, 'register'])->name('register');
Route::get('register/success', [VoterRegisterController::class, 'showPostRegisterForm'])->name('register_success');
Route::get('voters/{voter}/verify', [VoterLoginController::class, 'voterVerify'])->name('verify_voter');
Route::get('login', [VoterLoginController::class, 'showLoginForm'])->name('show_login_form');
Route::post('login', [VoterLoginController::class, 'login'])->name('login');
Route::get('/', [LandingPageController::class, 'showLandingIndex'])->name('landing.index');
Route::get('the-award/about-the-award', [LandingPageController::class, 'showAboutTheAward'])->name('about_the_award');
Route::get('the-award/sectors-and-categories', [LandingPageController::class, 'showSectorsAndCategories'])->name('show_sect_cat');
Route::get('the-award/the-organizers', [LandingPageController::class, 'showTheOrganizers'])->name('show_organizers');
Route::get('the-award/contact-us', [LandingPageController::class, 'showContactUs'])->name('show_contact');
Route::get('judges/meet-our-judges', [LandingPageController::class, 'showJudges'])->name('meet_judges');
Route::get('judges/judging-process', [LandingPageController::class, 'showJudgingProcess'])->name('judging_process');
Route::get('sponsors', [LandingPageController::class, 'showSponsors'])->name('show_sponsors');
Route::get('others/faqs', [LandingPageController::class, 'showFaqs'])->name('show_faqs');
Route::get('others/privacy-policy', [LandingPageController::class, 'showPolicy'])->name('show_policy');
Route::get('others/terms-and-conditions', [LandingPageController::class, 'showTc'])->name('show_tc');
Route::get('media/press-announcements', [LandingPageController::class, 'showPress'])->name('show_press');
Route::get('2021/shortlisted-nominees', [LandingPageController::class, 'showShortlistedNominees'])->name('show_shortlisted_nomineees');
Route::get('winners/2021', [LandingPageController::class, 'showWinners'])->name('show_winners');
Route::get('media/pictures', [LandingPageController::class, 'showPicturesCategories'])->name('show_pictures_categories');
Route::get('media/pictures/{award_program}', [LandingPageController::class, 'showPictures'])->name('show_pictures');


Route::get('vote', [LandingPageController::class, 'showVote'])->name('show_vote');
Route::get('{category}/vote', [VoteController::class, 'showVotingPage'])->name('show_awards');
Route::get('{award}/vote/{nominee}', [VoteController::class, 'addVote'])->name('add.vote');
Route::get('{award}/vote/media/{nominee}', [VoteController::class, 'addMediaVote'])->name('add.media.vote');
Route::get('logout', [VoterLoginController::class,'logout'])->name('logout');


