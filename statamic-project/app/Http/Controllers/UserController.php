<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Statamic\View\View;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show_login(){
        $data = [
            'title' => 'Login',
        ];
        return (new View)
            ->template('/user/login')
            ->with($data);
    }
    public function show_signup(){
        $data = [
            'title' => 'Sign up',
        ];
        return (new View)
            ->template('/user/signup')
            ->with($data);
    }

    public function show_forgot_pw(){
        $data = [
            'title' => 'Forgot Password',
        ];
        return (new View)
            ->template('/user/forgot-password')
            ->with($data);
    }

    public function show_reset_pw(){
        $data = [
            'title' => 'Reset Password',
        ];
        return (new View)
            ->template('/user/reset-password')
            ->with($data);
    }
}
