<?php
/**
 * Created by PhpStorm.
 * User: darkmaiden
 * Date: 15.12.16
 * Time: 0:34
 */

namespace App\Http\Controllers;


class SiteController extends Controller
{
    public function getIndex()
    {
        return view('welcome');
    }

    public function getSignIn()
    {
        return view('user.signin');
    }

    public function getRegister()
    {
        return view('user.register');
    }
}