<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Career extends Model
{
    use HasFactory;
    protected $career = 'career';

    /*
    ----------------------------------------------------
    check
    ----------------------------------------------------
    */

    public function isCareerIdValid($id)
    {
        return DB::table($this->career)->where('id', $id)->count() > 0;
    }

    /*
    ----------------------------------------------------
    READ
    ----------------------------------------------------
    */

    public function getAllCareer(int $perPage = 10)
    {
        return DB::table($this->career)->orderByDesc('id')->paginate($perPage);
    }

    public function getSingleCareer($id)
    {
        return DB::table($this->career)->where('id', $id)->first();
    }

    public function getAllCareerPublic()
    {
        return DB::table($this->career)
            ->orderByDesc('id')
            ->get();
    }
    /*
    ----------------------------------------------------
    CREATE
    ----------------------------------------------------
    */

    public function insertCareer(array $values)
    {
        return DB::table($this->career)
            ->insert($values);
    }

    /*
    ----------------------------------------------------
    UPDATE
    ----------------------------------------------------
    */

    public function updateCareer(int $careerId, array $val)
    {
        return DB::table($this->career)->where('id', $careerId)->update($val);
    }

    /*
    ----------------------------------------------------
    DELETE
    ----------------------------------------------------
    */

    public function deleteCareerData(int $id)
    {
        return DB::table($this->career)
            ->where('id', $id)
            ->delete();
    }
}
