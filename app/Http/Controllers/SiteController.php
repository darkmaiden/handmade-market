<?php
/**
 * Created by PhpStorm.
 * User: darkmaiden
 * Date: 15.12.16
 * Time: 0:34
 */

namespace App\Http\Controllers;
use GuzzleHttp\Client;


class SiteController extends Controller
{
    const BASE_URI = 'http://backend.local/api/';
    
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

    public function getView()
    {
        $client = new Client(['base_uri' => self::BASE_URI]);
        $response = $client->request('GET', self::BASE_URI.'preview');
        $response =  (array)json_decode($response->getBody());
        //print_r($response);
        return view('preview')->with(['items' => $response['items']]);
    }
}