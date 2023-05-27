<?php

namespace App\Controllers;

// use Myth\Auth\Entities\User;

class User extends BaseController
{
    public function index()
    {
        return view('user/index');
    }
}
