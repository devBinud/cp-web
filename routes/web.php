<?php

use App\Http\Controllers\PublicCtlr;
use App\Utils\SlugGenerator;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BlogCtlr;
use App\Http\Controllers\CareerCtlr;
use App\Http\Controllers\CaseStudyCtlr;
use App\Http\Controllers\PortfolioCtlr;
use App\Http\Controllers\UserCtlr;

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
//     return view('welcome');
// });

Route::get('/', [PublicCtlr::class, 'index']);
Route::get('/about-us', [PublicCtlr::class, 'about']);
Route::get('/case-study', [PublicCtlr::class, 'allCaseStudy']);
Route::any('/case-study/{slug}', [PublicCtlr::class, 'ViewCaseStudy']);
Route::get('/blog', [PublicCtlr::class, 'blog']);
Route::any('/blog/{slug}', [PublicCtlr::class, 'viewblog']);
Route::any('/category-Search', [PublicCtlr::class, 'catSearch']);
Route::any('/category-Search2', [PublicCtlr::class, 'catSearch2']);
Route::get('/services/digital-marketing', [PublicCtlr::class, 'branding']);
Route::get('/careers', [PublicCtlr::class, 'career']);
Route::get('/cartier', [PublicCtlr::class, 'cartier']);
Route::get('/services/cloud-services', [PublicCtlr::class, 'cloudConsulting']);
Route::get('/company', [PublicCtlr::class, 'company']);
Route::get('/contact', [PublicCtlr::class, 'contact']);
Route::get('/services/custom-software-development', [PublicCtlr::class, 'customProductDevelopment']);
Route::get('/services/data-analytics-and-ai', [PublicCtlr::class, 'dataAnalytics']);
Route::get('/services/data-engineering-solutions', [PublicCtlr::class, 'dataEngineeringSolutions']);
Route::get('/social-media-marketing', [PublicCtlr::class, 'digitalMarketing']);
Route::get('/start', [PublicCtlr::class, 'getStarted']);
Route::get('/korangini', [PublicCtlr::class, 'korangini']);
Route::get('/portfolio', [PublicCtlr::class, 'portfolio']);
Route::get('/services/app-development', [PublicCtlr::class, 'rapidAppDevelopment']);
Route::get('/SEO', [PublicCtlr::class, 'SEO']);
Route::get('/SMO', [PublicCtlr::class, 'SMO']);
Route::get('/services/testing-and-qa', [PublicCtlr::class, 'testing']);
Route::get('/services/ui-ux-design', [PublicCtlr::class, 'UI']);
Route::get('/services/web-application-development', [PublicCtlr::class, 'webApplication']);
Route::get('/privacy', [PublicCtlr::class, 'privacy']);



Route::any('/login', [UserCtlr::class, 'login']);

Route::any('/logout', [UserCtlr::class, 'logout']);

Route::middleware('User')->group(function () {


    // login
    Route::get('generate-slug', function (Request $request) {
        $title = $request->get('title') ?? '';
        return SlugGenerator::generateSlug($title);
    });

    // portfolio
    Route::any('/portfolioAdmin', [PortfolioCtlr::class, 'portfolioAdmin']);
    Route::any('/addPortfolioAdmin', [PortfolioCtlr::class, 'addPortfolioAdmin']);
    Route::any('/edit-portfolio', [PortfolioCtlr::class, 'editPortfolioAdmin']);
    Route::any('/delete-portfolio', [PortfolioCtlr::class, 'deletePortfolioAdmin']);


    // blog
    Route::any('/viewBlog', [BlogCtlr::class, 'viewBlog']);
    Route::any('/addBlogCat', [BlogCtlr::class, 'addBlogCat']);
    Route::any('/viewBlogCat', [BlogCtlr::class, 'viewBlogCat']);
    Route::any('/editBlogCat', [BlogCtlr::class, 'editBlogCat']);
    Route::any('/delete-blog-cat', [BLogCtlr::class, 'deleteBlogCat']);
    Route::any('/addBlogAdmin', [BlogCtlr::class, 'addBlogAdmin']);
    Route::any('/edit-blog-admin', [BLogCtlr::class, 'editBlogAdmin']);
    Route::any('/publish-blog-admin', [BLogCtlr::class, 'publishBlogAdmin']);
    Route::any('/delete-blog', [BLogCtlr::class, 'deleteBlogAdmin']);


    // casestudy
    Route::any('/addCaseStudy', [CaseStudyCtlr::class, 'addCaseStudy']);
    Route::any('/edit-cs', [CaseStudyCtlr::class, 'editCsAdmin']);
    Route::any('/viewCaseStudy', [CaseStudyCtlr::class, 'viewCaseStudy']);
    Route::any('/delete-cs', [CaseStudyCtlr::class, 'deleteCsAdmin']);

    // career
    Route::any('/add-career', [CareerCtlr::class, 'addCareer']);
    Route::any('/view-career', [CareerCtlr::class, 'viewCareer']);
    Route::any('/edit-career', [CareerCtlr::class, 'editCareer']);
    Route::any('/delete-career', [CareerCtlr::class, 'deleteCareer']);

    // registration
    Route::any('/registration', [RegistrationCtlr::class, 'registration']);

    // admin
    Route::any('/dashboard', [UserCtlr::class, 'dashboard']);

    Route::any('/viewregistration', [UserCtlr::class, 'viewregistration']);
});
