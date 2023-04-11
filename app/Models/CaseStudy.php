<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CaseStudy extends Model
{
    use HasFactory;
    protected $table = 'case_study';


    /*
    ----------------------------------------------------
    check
    ----------------------------------------------------
    */

    public function isSlugAvailable(string $slug)
    {
        return DB::table($this->table)->where('slug', $slug)->count() > 0;
    }

    public function isCsIdValid($id)
    {
        return DB::table($this->table)->where('id', $id)->count() > 0;
    }

    /*
    ----------------------------------------------------
    READ
    ----------------------------------------------------
    */

    public function getAllCs(int $perPage = 10)
    {
        return DB::table($this->table)->orderByDesc('id')->paginate($perPage);
    }

    public function getSingleCs($id)
    {
        return DB::table($this->table)->where('id', $id)->first();
    }

    public function getSingleCs1($id)
    {
        return DB::table($this->table)->where('id', $id)->get();
    }

    public function getAllCsPublic()
    {
        return DB::table($this->table)
            ->orderByDesc('id')
            ->get();
    }

    public function getDataBySlug(string $slug)
    {
        return DB::table($this->table)->where('slug', $slug)->first();
    }
    /*
    ----------------------------------------------------
    CREATE
    ----------------------------------------------------
    */
    public function insertCs(array $values)
    {
        return DB::table($this->table)
            ->insert($values);
    }

    /*
    ----------------------------------------------------
    UPDATE
    ----------------------------------------------------
    */

    public function updateCS(int $csId, array $val)
    {
        return DB::table($this->table)->where('id', $csId)->update($val);
    }
    /*
    ----------------------------------------------------
    DELETE
    ----------------------------------------------------
    */

    public function deleteCsData(int $id)
    {
        return DB::table($this->table)
            ->where('id', $id)
            ->delete();
    }
}
