<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    use HasFactory;

    protected $blog = 'blog';
    protected $blogCat = 'blog_categories';


    /*
    ----------------------------------------------------
    check
    ----------------------------------------------------
    */

    public function isBlogCatIdValid($id)
    {
        return DB::table($this->blogCat)->where('cat_id', $id)->count() > 0;
    }

    public function isBlogIdValid($id)
    {
        return DB::table($this->blog)->where('id', $id)->count() > 0;
    }

    public function isSlugAvailable(string $slug)
    {
        return DB::table($this->blog)->where('slug', $slug)->count() > 0;
    }

    public function isSlugAndBlogIdMatched(int $blogId, string $slug)
    {
        return DB::table($this->blog)->where([['id', $blogId], ['slug', $slug]])->count() > 0;
    }

    public function isCatAvailable(string $Catname)
    {
        return DB::table($this->blog)->where('cat_names', $Catname)->count() > 0;
    }
    /*
    ----------------------------------------------------
    READ
    ----------------------------------------------------
    */

    public function getAllBlog(int $perPage = 10)
    {
        return DB::table($this->blog)->orderByDesc('id')->paginate($perPage);
    }

    public function getSearchData(string $searchCat)
    {
        return DB::table($this->blog)
            ->where('cat_names', 'like', "%{$searchCat}%")
            ->where('is_published', '1')
            ->get();
    }

    public function getDataBySlug(string $slug)
    {
        return DB::table($this->blog)->where('slug', $slug)->first();
    }

    public function getDataBycatName(string $catName)
    {
        return DB::table($this->blog)->where('cat_names', $catName)->first();
    }


    public function getSingleBlog($id)
    {
        return DB::table($this->blog)->where('id', $id)->first();
    }

    public function getBlogById(int $blogId)
    {
        return DB::table($this->blog)->where('id', $blogId)->first();
    }

    public function getBlogCat(int $perPage = 10)
    {
        return DB::table($this->blogCat)->paginate($perPage);
    }

    public function getAllCat(int $perPage = 10)
    {
        return DB::table($this->blog)->orderByDesc('id')->paginate($perPage);
    }


    public function getAllBlogCat()
    {
        return db::table($this->blogCat)
            ->get();
    }

    public function getBlogCatByName()
    {
        return DB::table($this->blog)
            ->get();
    }

    public function getBlogCategoryById($catId)
    {
        return DB::table($this->blogCat)->where('cat_id', $catId)->first();
    }

    public function getAllBlogPublic()
    {
        return DB::table($this->blog)->where('is_published', '1')
            ->orderByDesc('id')
            ->get();
    }
    /*
    ----------------------------------------------------
    CREATE
    ----------------------------------------------------
    */

    public function insertBlogCat(array $values)
    {
        return DB::table($this->blogCat)
            ->insert($values);
    }

    public function insertBlog(array $values)
    {
        return DB::table($this->blog)
            ->insert($values);
    }

    /*
    ----------------------------------------------------
    UPDATE
    ----------------------------------------------------
    */

    public function updateBlog(int $blogId, array $val)
    {
        return DB::table($this->blog)->where('id', $blogId)->update($val);
    }

    public function updateBlogCat(int $catId, array $val)
    {
        return DB::table($this->blogCat)->where('cat_id', $catId)->update($val);
    }

    /*
    ----------------------------------------------------
    DELETE
    ----------------------------------------------------
    */

    public function deleteBlogData(int $id)
    {
        return DB::table($this->blog)
            ->where('id', $id)
            ->delete();
    }

    public function deleteBlogCatData(int $id)
    {
        return DB::table($this->blogCat)
            ->where('cat_id', $id)
            ->delete();
    }
}
