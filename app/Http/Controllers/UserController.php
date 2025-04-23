<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    protected $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = new User();
    }

    /*
    doRegister(Request $request)
    */
    public function doRegister(Request $request) // post request
    {
        // if ($request->ajax() && $request->isMethod('post')){

            if ($this->userModel->registerUser($request)) {

            } else {
                return response()->json([
                    'error' => 'Registration failed.'
                ], 400);

            }

        // } else {
            
        //     return response()->json([
        //         'error' => 'Invalid request type.'
        //     ], 405);
        // }
    }

    public function loginPage() // get request
    {
        $data['assets'] = [
            'css' => [
                'build/libs/owl.carousel/assets/owl.carousel.min.css',
                'build/libs/owl.carousel/assets/owl.theme.default.min.css',
            ],
            'js' => [
                'build/libs/owl.carousel/owl.carousel.min.js',
                'build/js/pages/auth-2-carousel.init.js',
            ]
        ];

        return view('auth.login', compact('data'));
    }

    public function doLogin(Request $request)
    {
        // if ($request->ajax() && $request->isMethod('post')){

        if ($this->userModel->loginUser($request)) {
            return redirect('/dashboard');

        } else {
            return response()->json([
                'error' => 'Registration failed.'
            ], 400);

        }

        // } else {
        //     dd('doLogin else');
        //     return response()->json([
        //         'error' => 'Invalid request type.'
        //     ], 405);
        // }
    }

    public function doLogout()
    {
        if ($this->userModel->logoutUser()) {
            return redirect('/');

        } else {
            return response()->json([
                'error' => 'Logout failed.'
            ], 400);

        }
    }
}
