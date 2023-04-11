<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class User extends Model
{
    use HasFactory;

    protected $registration = 'registration';
    protected $user = "user";

    /*
    ----------------------------------------------------
    READ
    ----------------------------------------------------
    */


    public function getAllRegistration()
    {
        return DB::table($this->registration)->orderByDesc('id')->get();
    }


    // login

    public function isUserNameValid(string $username)
    {
        return FacadesDB::table($this->user)->where('username', $username)->count() > 0;
    }

    public function getIdByUsername(string $username)
    {
        return DB::table($this->user)->where('username', $username)->first()->id;
    }

    public function getUser(string $username)
    {
        return DB::table($this->user)->where('username', $username)->first();
    }

    public function getPassword(string $username)
    {
        return DB::table($this->user)->where('username', $username)->first('password')->password;
    }
}
