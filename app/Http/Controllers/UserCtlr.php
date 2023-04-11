<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\User;
use App\Utils\HttpMethodUtil;
use App\Utils\JsonUtil;
use Illuminate\Http\Request;

class UserCtlr extends Controller
{
    private $registration;
    private $user;

    public function __construct()
    {
        $this->registration = new Registration();
        $this->user = new User();
    }

    public function login(Request $request)
    {
        // GET
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.login');
        }

        // POST
        elseif (HttpMethodUtil::isMethodPost()) {

            $username = $request->get('username') ?? '';
            $password = $request->get('password') ?? '';

            // dd($username);
            if (!$this->user->isUsernameValid($username)) {
                return JsonUtil::getResponse(false, "Invaid ID", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            $passwordHash = $this->user->getPassword($username);
            // dd($password . '-' . $passwordHash);
            if (!password_verify($password, $passwordHash)) {
                return JsonUtil::getResponse(false, "Invaid Password", JsonUtil::$_UNPROCESSABLE_ENTITY);
            }

            $admin = $this->user->getUser($username);

            $request->session()->put('admin_id', $admin->id);

            return JsonUtil::getResponse(true, "Login successfully", JsonUtil::$_STATUS_OK, [
                'admin_id' => $admin->id,

            ]);
            // return redirect('/dashboard');
        }
    }

    // logout
    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect('/login');
    }


    public function dashboard(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {
            return view('admin.dashboard')->with([
                'page' => 'dashboard',

            ]);
        }
    }

    public function viewregistration(Request $request)
    {
        if (HttpMethodUtil::isMethodGet()) {

            $registrationId = $request->session()->get('id');

            $data = $this->registration->getAllRegistration($registrationId);


            // dd($data);

            return view('admin.view-registration')->with([
                'page' => 'viewregistration',
                'data' => $data,
                'sn' => 1,
            ]);
        }
    }
}
