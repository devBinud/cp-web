<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Utils\HttpMethodUtil;
use App\Utils\JsonUtil;
use App\Utils\RegexUtil;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BlogCtlr extends Controller
{
    private $blog;
    public function __construct()
    {
        $this->blog = new Blog();
    }


    public function addBlogCat(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.add-blog-category')->with([
                'page' => 'add_category',
            ]);
        } elseif (HttpMethodUtil::isMethodPost()) {
            $catName = $request->get('catName') ?? '';
            // dd($catName);
            $catslug = $request->get('catslug') ?? '';
            $description = $request->get('description') ?? '';

            // dd($metaTags);

            if (empty($catName) || $catName == "") {
                return JsonUtil::getResponse(false, "Category Name is required!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            if (empty($catslug) || $catslug == "") {
                return JsonUtil::getResponse(false, "Category Slug is required!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
        }

        $values = [
            'cat_name' => $catName,
            'cat_slug' => $catslug,
            'cat_description' => $description,
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => 1,

        ];
        try {
            $this->blog->insertBlogCat($values);
            return JsonUtil::getResponse(true, "Blog Category saved successfully!", JsonUtil::$_STATUS_OK);
        } catch (Exception $e) {

            return JsonUtil::getResponse(false, $e->getMessage(), JsonUtil::$_UNPROCESSABLE_ENTITY);
        }
    }

    public function viewBlogCat()
    {
        if (HttpMethodUtil::isMethodGet()) {
            $data = $this->blog->getBlogCat();
            return view('admin.view-blog-cat')->with([
                'page' => 'view_category',
                'datas' => $data,
                'sn' => $data == null ? 0 : ($data->currentPage() - 1) * $data->perPage(),
            ]);
        }
    }
    public function editBlogCat(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            $catId = $request->get('cat_id') ?? '';
            if (empty($catId) || $catId == "") {
                return abort(404);
            } elseif (!RegexUtil::isNumeric($catId)) {
                return abort(404);
            }
            $catData = $this->blog->getBlogCategoryById($catId);
            // dd($catData);
            return view('admin.edit-blog-cat')->with([
                'page' => 'edit_category',
                'catData' => $catData,
            ]);
        } elseif (HttpMethodUtil::isMethodPost()) {
            $catId = $request->get('cat_id') ?? '';
            $catName  = $request->get('catName');
            $catslug  = $request->get('catslug');
            $description  = $request->get('description');
            // dd($catId);

            if (empty($catName) || $catName == "") {
                return JsonUtil::getResponse(false, "Category Name is required!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            if (empty($catslug) || $catslug == "") {
                return JsonUtil::getResponse(false, "Category Slug is required!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
        }

        $values = [
            'cat_name' => $catName,
            'cat_slug' => $catslug,
            'cat_description' => $description,
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => 1,

        ];
        try {
            $this->blog->updateBlogCat($catId, $values);

            return JsonUtil::getResponse(true, "Blog Category updated successfully!", JsonUtil::$_STATUS_OK);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return JsonUtil::getResponse(false, $e->getMessage(), JsonUtil::$_INTERNAL_SERVER_ERROR);
        }
    }

    public function deleteBlogCat(Request $request)
    {
        $catId = $request->get('cat_id') ?? '';

        if (!$this->blog->isBlogCatIdValid($catId)) {
            return JsonUtil::getResponse(false, "Invalid Category", JsonUtil::$_BAD_REQUEST);
        }

        try {
            $this->blog->deleteBlogCatData($catId);
            return JsonUtil::getResponse(true, "Category deleted successfully!", JsonUtil::$_STATUS_OK);
        } catch (Exception $e) {
            return JsonUtil::$_INTERNAL_SERVER_ERROR;
        }
    }

    public function viewBlog(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            $data = $this->blog->getAllBlog();
            return view('admin.view-blog')->with([
                'page' => 'view-blog',
                'datas' => $data,
                'sn' => $data == null ? 0 : ($data->currentPage() - 1) * $data->perPage(),
            ]);
        } else {
            return JsonUtil::methodNotAllowed();
        }
    }

    public function addBlogAdmin(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            $data = $this->blog->getAllBlog();
            // dd($this->blog->getAllBlogCat());
            return view('admin.add-blog')->with([
                'page' => 'add-blog',
                'datas' => $data,
                'blogCat' => $this->blog->getAllBlogCat()

            ]);
        } elseif (HttpMethodUtil::isMethodPost()) {

            $userId = $request->session()->get('id', 0) ?? '1';
            $image = $request->file('image') ?? null;
            if (empty($image) || $image == "") {
                return JsonUtil::getResponse(false, "Image cannot be empty!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
            $title = $request->get('title') ?? '';
            $slug = $request->get('slug') ?? '';

            if (empty($slug) || $slug == "") {
                return JsonUtil::getResponse(false, "Slug cannot be empty!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            } elseif ($this->blog->isSlugAvailable($slug)) {
                return JsonUtil::getResponse(false, "Slug is already available.Please change the slug!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            $description = $request->get('summary-ckeditor') ?? '';
            if (empty($description) || $description == "") {
                return JsonUtil::getResponse(false, "Description cannot be empty!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
            $author = $request->get('author') ?? '';
            $metaTitle = $request->get('metaTitle') ?? '';
            $metaDescription = $request->get('metaDescription') ?? '';
            $metaurl = $request->get('metaurl') ?? '';
            $twitterCard = $request->get('twitterCard') ?? '';
            $twitterSite = $request->get('twitterSite') ?? '';
            $twitterTitle = $request->get('twitterTitle') ?? '';
            $twitterDescription = $request->get('twitterDescription') ?? '';
            $twitterImage = $request->get('twitterImage') ?? '';
            $metaHeader = $request->get('metaHeader') ?? '';
            $metaFooter = $request->get('metaFooter') ?? '';
            $metaKeywords = $request->get('metaKeywords') ?? '';
            $blogTags = $request->get('blogTags') ?? '';

            if ($blogTags != null) {
                $blogTags = implode(",", array_unique($blogTags));
            } else {
                return JsonUtil::getResponse(false, "Enter Tags", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            $categories = $request->get('categories') ?? '';

            if ($categories != null) {
                $catName = implode(",", array_unique($categories));
            } else {
                return JsonUtil::getResponse(false, "Select Categories", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            $ext = $image->getClientOriginalExtension();
            $blogFilename = 'bImage' . uniqid() . $userId . '.' . $ext;

            // return $blogFilename;

            if ($image->getSize() > (1024 * 1024 * 2)) {
                return JsonUtil::getResponse(false, "Maximum file size 6mb", JsonUtil::$_UNPROCESSABLE_ENTITY);
            } else {
                try {
                    $image->storeAs('/blog/feature-image', $blogFilename);
                } catch (Exception $e) {
                    return $e->getMessage();
                    return JsonUtil::getResponse(false, "can't upload", JsonUtil::$_UNPROCESSABLE_ENTITY);
                }
            }


            $values = [
                'blog_img' => $blogFilename,
                'blog_title' => $title,
                'slug' => $slug,
                'blog_description' => $description,
                'author' => $author,
                'blog_meta_title' => $metaTitle,
                'meta_description' => $metaDescription,
                'meta_url' => $metaurl,
                'twitter_card' => $twitterCard,
                'twitter_site' => $twitterSite,
                'twitter_title' => $twitterTitle,
                'twitter_description' => $twitterDescription,
                'twitter_image' => $twitterImage,
                'meta_header' => $metaHeader,
                'meta_footer' => $metaFooter,
                'meta_keywords' => $metaKeywords,
                'blog_tags' => $blogTags,
                'cat_names' => $catName,
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => $userId,

            ];

            try {
                $this->blog->insertBlog($values);
                return JsonUtil::getResponse(true, "Blog saved successfully!", JsonUtil::$_STATUS_OK);
                // DB::commit();
            } catch (Exception $e) {
                // DB::rollBack();
                return JsonUtil::getResponse(false, $e->getMessage(), JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
        } else {
            return JsonUtil::methodNotAllowed();
        }
    }
    public function editBlogAdmin(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            $blogId = $request->get('blog_id') ?? '';
            if (empty($blogId) || $blogId == "") {
                return abort(404);
            } elseif (!RegexUtil::isNumeric($blogId)) {
                return abort(404);
            }
            $blogData = $this->blog->getSingleBlog($blogId);
            // dd($blogData);

            return view('admin.edit-blog-admin')->with([
                'page' => 'blog',
                'blogData' => $blogData,
                'blogCat' => $this->blog->getAllBlogCat()

            ]);
        } elseif (HttpMethodUtil::isMethodPost()) {
            $userId = $request->session()->get('id', 0) ?? '1';
            $blogId = $request->get('blog_id') ?? '';
            $preImageName  = $request->get('preImageName');
            $image = $request->file('img_file') ?? null;
            // $currentImagePic = $this->blog->getBlogById($blogId)->blog_img;
            $title = $request->get('title') ?? '';
            $slug = $request->get('slug') ?? '';
            $currentSlug = $this->blog->getBlogById($blogId)->slug;
            // dd($currentSlug);
            // dd($image);
            $desc = $request->get('summary-ckeditor') ?? '';
            $author = $request->get('author') ?? '';
            $metaTitle = $request->get('metaTitle') ?? '';
            $metaDescription = $request->get('metaDescription') ?? '';
            $metaurl = $request->get('metaurl') ?? '';
            $twitterCard = $request->get('twitterCard') ?? '';
            $twitterSite = $request->get('twitterSite') ?? '';
            $twitterTitle = $request->get('twitterTitle') ?? '';
            $twitterDescription = $request->get('twitterDescription') ?? '';
            $twitterImage = $request->get('twitterImage') ?? '';
            $metaHeader = $request->get('metaHeader') ?? '';
            $metaFooter = $request->get('metaFooter') ?? '';
            $metaKeywords = $request->get('metaKeywords') ?? '';
            $blogTags = $request->get('blogTags') ?? '';

            if ($blogTags != null) {
                $blogTags = implode(",", array_unique($blogTags));
            } else {
                return JsonUtil::getResponse(false, "Enter Tags", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            $categories = $request->get('categories') ?? '';

            if ($categories != null) {
                $catName = implode(",", array_unique($categories));
            } else {
                return JsonUtil::getResponse(false, "Select Categories", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
            // dd($preImageName);
            $imageName = "";

            if ($title == "") {
                return JsonUtil::getResponse(false, "Title is required", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            if ($desc == "") {
                return JsonUtil::getResponse(false, "Blog description is required!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            if (empty($slug) || $slug == "") {
                return JsonUtil::getResponse(false, "Slug is required!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            } elseif ($this->blog->isSlugAvailable($slug)) {
                if (!$this->blog->isSlugAndBlogIdMatched($blogId, $slug)) {
                    if ($slug != $currentSlug) {
                        return JsonUtil::getResponse(false, "Slug is already available!", JsonUtil::$_UNPROCESSABLE_ENTITY);
                    }
                }
            }

            if ($image == null || empty($image)) {
                $imageName = $preImageName;

                // $errorMsg['imgErr'] = "Featured image is required";
            } else {
                $ext = $image->getClientOriginalExtension();

                $imageSize = getimagesize($image);
                // $width = $imageSize[0];
                // $height = $imageSize[1];

                if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg' && $ext != 'webp' && $ext != 'svg') {
                    return JsonUtil::getResponse(false, "Supported file formats are - png, jpg, jpeg!", JsonUtil::$_UNPROCESSABLE_ENTITY);
                } elseif ($image->getSize() > (1024 * 1000 * 2)) {
                    return JsonUtil::getResponse(false, "Maximum supported file size is 2 MB!", JsonUtil::$_UNPROCESSABLE_ENTITY);
                }
                $blogData = $this->blog->getSingleBlog($blogId);
                $blogImage = $blogData->blog_img;

                if (File::exists(base_path("assets/uploads/blog/feature-image/" . '/' . $blogImage))) {
                    File::delete(base_path("assets/uploads/blog/feature-image/" . '/' . $blogImage));
                }
                // Upload Profile Img
                // DB::beginTransaction();
                $imageName = 'akib_' . '_' . time() . '.' . $image->getClientOriginalExtension();

                try {
                    $upload = $image->storeAs('/blog/feature-image', $imageName);
                    // if (!$upload) {
                    //     return JsonUtil::serverError();
                    // }
                } catch (Exception $e) {
                    return $e->getMessage();
                    return JsonUtil::serverError();
                }
            }

            try {


                $data = [
                    'blog_img' => $imageName,
                    'blog_title' => $title,
                    'blog_description' => $desc,
                    'author' => $author,
                    'blog_meta_title' => $metaTitle,
                    'meta_description' => $metaDescription,
                    'meta_url' => $metaurl,
                    'twitter_card' => $twitterCard,
                    'twitter_site' => $twitterSite,
                    'twitter_title' => $twitterTitle,
                    'twitter_description' => $twitterDescription,
                    'twitter_image' => $twitterImage,
                    'meta_header' => $metaHeader,
                    'meta_footer' => $metaFooter,
                    'meta_keywords' => $metaKeywords,
                    'blog_tags' => $blogTags,
                    'cat_names' => $catName,
                    'updated_at' => date('Y-m-d H:i:s'),
                    'updated_by' => $userId,

                ];

                // dd($data);
                $this->blog->updateBlog($blogId, $data);

                return JsonUtil::getResponse(true, "Blog updated successfully!", JsonUtil::$_STATUS_OK);
                DB::commit();
            } catch (Exception $e) {
                DB::rollBack();
                return JsonUtil::getResponse(false, $e->getMessage(), JsonUtil::$_INTERNAL_SERVER_ERROR);
            }
        }
    }

    public function publishBlogAdmin(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            $blogId = $request->get('blog_id') ?? '';
            if (empty($blogId) || $blogId == "") {
                return abort(404);
            } elseif (!RegexUtil::isNumeric($blogId)) {
                return abort(404);
            }
            $blogData = $this->blog->getSingleBlog($blogId);
            return view('admin.publish-blog-admin')->with([
                'page' => 'blog',
                'blogData' => $blogData,
                'blogCat' => $this->blog->getAllBlogCat(),
            ]);
        } elseif (HttpMethodUtil::isMethodPost()) {
            $userId = $request->session()->get('id', 0) ?? '1';
            $blogId = $request->get('blog_id') ?? '';
            $preImageName  = $request->get('preImageName');
            $image = $request->file('img_file') ?? null;
            // $currentImagePic = $this->blog->getBlogById($blogId)->blog_img;
            $title = $request->get('title') ?? '';
            $slug = $request->get('slug') ?? '';
            $currentSlug = $this->blog->getBlogById($blogId)->slug;
            // dd($currentSlug);
            // dd($image);
            $desc = $request->get('summary-ckeditor') ?? '';
            $author = $request->get('author') ?? '';
            $metaTitle = $request->get('metaTitle') ?? '';
            $metaDescription = $request->get('metaDescription') ?? '';
            $metaHeader = $request->get('metaHeader') ?? '';
            $metaFooter = $request->get('metaFooter') ?? '';
            $metaKeywords = $request->get('metaKeywords') ?? '';
            $blogTags = $request->get('blogTags') ?? '';

            if ($blogTags != null) {
                $blogTags = implode(",", array_unique($blogTags));
            } else {
                return JsonUtil::getResponse(false, "Enter Tags", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            $categories = $request->get('categories') ?? '';

            if ($categories != null) {
                $catName = implode(",", array_unique($categories));
            } else {
                return JsonUtil::getResponse(false, "Select Categories", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }
            // dd($preImageName);
            $imageName = "";

            if ($title == "") {
                return JsonUtil::getResponse(false, "Title is required", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            if ($desc == "") {
                return JsonUtil::getResponse(false, "Blog description is required!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            if (empty($slug) || $slug == "") {
                return JsonUtil::getResponse(false, "Slug is required!", JsonUtil::$_UNPROCESSABLE_ENTITY);
            } elseif ($this->blog->isSlugAvailable($slug)) {
                if (!$this->blog->isSlugAndBlogIdMatched($blogId, $slug)) {
                    if ($slug != $currentSlug) {
                        return JsonUtil::getResponse(false, "Slug is already available!", JsonUtil::$_UNPROCESSABLE_ENTITY);
                    }
                }
            }

            if ($image == null || empty($image)) {
                $imageName = $preImageName;

                // $errorMsg['imgErr'] = "Featured image is required";
            } else {
                $ext = $image->getClientOriginalExtension();

                $imageSize = getimagesize($image);
                // $width = $imageSize[0];
                // $height = $imageSize[1];

                if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                    return JsonUtil::getResponse(false, "Supported file formats are - png, jpg, jpeg!", JsonUtil::$_UNPROCESSABLE_ENTITY);
                } elseif ($image->getSize() > (1024 * 1000 * 2)) {
                    return JsonUtil::getResponse(false, "Maximum supported file size is 2 MB!", JsonUtil::$_UNPROCESSABLE_ENTITY);
                }
                $blogData = $this->blog->getSingleBlog($blogId);
                $blogImage = $blogData->blog_img;

                if (File::exists(base_path("assets/uploads/blog/feature-image/" . '/' . $blogImage))) {
                    File::delete(base_path("assets/uploads/blog/feature-image/" . '/' . $blogImage));
                }
                // Upload Profile Img
                // DB::beginTransaction();
                $imageName = 'akib_' . '_' . time() . '.' . $image->getClientOriginalExtension();

                try {
                    $upload = $image->storeAs('/blog/feature-image', $imageName);
                    // if (!$upload) {
                    //     return JsonUtil::serverError();
                    // }
                } catch (Exception $e) {
                    return $e->getMessage();
                    return JsonUtil::serverError();
                }
            }

            try {


                $data = [
                    'blog_img' => $imageName,
                    'blog_title' => $title,
                    'blog_description' => $desc,
                    'author' => $author,
                    'blog_meta_title' => $metaTitle,
                    'meta_description' => $metaDescription,
                    'meta_header' => $metaHeader,
                    'meta_footer' => $metaFooter,
                    'meta_keywords' => $metaKeywords,
                    'blog_tags' => $blogTags,
                    'cat_names' => $catName,
                    'updated_at' => date('Y-m-d H:i:s'),
                    'updated_by' => $userId,
                    'is_published' => 1,

                ];

                // dd($data);
                $this->blog->updateBlog($blogId, $data);

                return JsonUtil::getResponse(true, "Blog is published successfully!", JsonUtil::$_STATUS_OK);
                DB::commit();
            } catch (Exception $e) {
                DB::rollBack();
                return JsonUtil::getResponse(false, $e->getMessage(), JsonUtil::$_INTERNAL_SERVER_ERROR);
            }
        }
    }

    public function deleteBlogAdmin(Request $request)
    {
        $blogId = $request->get('blog_id') ?? '';

        // dd($blogId);

        if (!$this->blog->isBlogIdValid($blogId)) {
            return JsonUtil::getResponse(false, "Invalid blog", JsonUtil::$_BAD_REQUEST);
        }

        $blogData = $this->blog->getSingleBlog($blogId);
        $blogImage = $blogData->blog_img;

        // dd(File::exists(base_path("assets/uploads/blog/" . '/' . $blogImage)));
        DB::beginTransaction();
        try {


            if (File::exists(base_path("assets/uploads/blog/feature-image/" . '/' . $blogImage))) {
                File::delete(base_path("assets/uploads/blog/feature-image/" . '/' . $blogImage));
            } else {
                return JsonUtil::serverError();
            }

            $this->blog->deleteBlogData($blogId);
            DB::commit();
            return JsonUtil::getResponse(True, "Blog Deleted Successfully", JsonUtil::$_BAD_REQUEST);
        } catch (Exception $e) {
            DB::rollBack();
            return JsonUtil::getResponse(false, $e->getMessage(), JsonUtil::$_BAD_REQUEST);
            return JsonUtil::serverError();
        }
    }
}
