<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Career;
use App\Models\CaseStudy;
use App\Utils\HttpMethodUtil;
use App\Utils\JsonUtil;
use Illuminate\Http\Request;

class PublicCtlr extends Controller
{
    private $blog;
    private $casestudy;
    private $career;
    public function __construct()
    {
        $this->blog = new Blog();
        $this->casestudy = new CaseStudy();
        $this->career = new Career();
    }

    public function about()
    {
        return view('public.about');
    }
    public function index()
    {
        $data = $this->casestudy->getAllCsPublic();
        return view('public.index')->with([
            'data' => $data,
        ]);
    }
    public function allCaseStudy()
    {
        $data = $this->casestudy->getAllCsPublic();
        return view('public.allCaseStudy')->with([
            'data' => $data,
        ]);
    }

    public function ViewCaseStudy(Request $request, $slug)
    {
        if (HttpMethodUtil::isMethodGet()) {

            $data = $this->casestudy->getDataBySlug($slug);
            $allCs = $this->casestudy->getAllCs();
            if (!$this->casestudy->isSlugAvailable($slug)) {
                return abort(404);
            }

            return view('public.casestudy')->with([
                'data' => $data,
                'allCs' => $allCs,
            ]);
        } else {
            return JsonUtil::methodNotAllowed();
        }
    }

    public function blog()
    {
        if (HttpMethodUtil::isMethodGet()) {
            $data = $this->blog->getAllBlogPublic();
            // dd($data);
            $allCat = $this->blog->getAllBlogCat();
            // dd($allCat);
            return view('public.blog')->with([
                'datas' => $data,
                'allCat' => $allCat,
            ]);
        } else {
            return JsonUtil::methodNotAllowed();
        }
    }
    public function viewblog(Request $request, $slug)
    {
        if (HttpMethodUtil::isMethodGet()) {

            $data = $this->blog->getDataBySlug($slug);
            $allblog = $this->blog->getAllBlog();
            $Cat = $this->blog->getBlogCatByName();
            if (!$this->blog->isSlugAvailable($slug)) {
                return abort(404);
            }

            return view('public.blog_details')->with([
                'data' => $data,
                'allblogs' => $allblog,
                'blogCat' => $Cat,
            ]);
        } else {
            return JsonUtil::methodNotAllowed();
        }
    }
    public function catSearch(Request $request)
    {

        if (HttpMethodUtil::isMethodGet()) {
            $data = $request->get('catName');
            // $allCat = $this->blog->getAllCat();

            $bahubaliData = $this->blog->getSearchData($data);
            $allCat = $this->blog->getAllBlogCat();
            // $alldata = $this->blog->getAllBlogPublic();
            // dd(2);
            // dd($bahubaliData);

            return view('public.blog-cat')->with([
                'data' => $data,
                'allCat' => $allCat,
                'bahubaliData' => $bahubaliData,
                // 'allData' => $alldata,
            ]);
        } else {
            return JsonUtil::methodNotAllowed();
        }
    }

    public function catSearch2(Request $request)
    {

        if (HttpMethodUtil::isMethodGet()) {
            $data = $request->get('catName');
            // $allCat = $this->blog->getAllCat();

            $bahubaliData = $this->blog->getSearchData($data);
            $allCat = $this->blog->getAllBlogCat();
            // $alldata = $this->blog->getAllBlogPublic();
            // dd(2);
            // dd($bahubaliData);

            return view('public.blog-cat2')->with([
                'data' => $data,
                'allCat' => $allCat,
                'bahubaliData' => $bahubaliData,
                // 'allData' => $alldata,
            ]);
        } else {
            return JsonUtil::methodNotAllowed();
        }
    }

    public function branding()
    {
        return view('public.branding&Strategy');
    }
    public function career()
    {
        if (HttpMethodUtil::isMethodGet()) {
            $data = $this->career->getAllCareerPublic();
            return view('public.careers')->with([
                'data' => $data,
            ]);
            // dd($data);
        } else {
            return JsonUtil::methodNotAllowed();
        }
    }
    public function cartier()
    {
        return view('public.cartier');
    }
    public function cloudConsulting()
    {
        return view('public.cloudConsulting');
    }
    public function company()
    {
        return view('public.company');
    }
    public function contact()
    {
        return view('public.contact');
    }
    public function customProductDevelopment()
    {
        return view('public.customProductDevelopment');
    }

    public function dataAnalytics()
    {
        return view('public.dataAnalytics');
    }
    public function dataEngineeringSolutions()
    {
        return view('public.dataEngineeringSolutions');
    }
    public function digitalMarketing()
    {
        return view('public.digitalMarketing');
    }
    public function getStarted()
    {
        return view('public.getStarted');
    }
    public function korangini()
    {
        return view('public.korangini');
    }
    public function portfolio()
    {
        return view('public.portfolio');
    }
    public function rapidAppDevelopment()
    {
        return view('public.rapidAppDevelopment');
    }
    public function SEO()
    {
        return view('public.SEO');
    }
    public function SMO()
    {
        return view('public.SMO');
    }
    public function testing()
    {
        return view('public.testing&QA');
    }
    public function UI()
    {
        return view('public.UIUX');
    }

    public function webApplication()
    {
        return view('public.webApplicationDevelopment');
    }
  	public function privacy()
    {
        return view('public.privacy');
    }
}
