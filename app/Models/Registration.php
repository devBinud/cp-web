<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Registration extends Model
{
    use HasFactory;
    protected $registration = 'registration';



    /*
    ----------------------------------------------------
    READ
    ----------------------------------------------------
    */

    public function getAllRegistration()
    {
        return DB::table($this->registration)->orderByDesc('id')->get();
    }


    /*
    ----------------------------------------------------
    CREATE
    ----------------------------------------------------
    */

    public function insertRegistration(array $values)
    {
        return DB::table($this->registration)
            ->insert($values);
    }
}
