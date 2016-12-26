<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use GuzzleHttp\Client;

class UserController extends Controller
{
    //
    public function postRegister(Request $request)
    {
        $client = new Client(['base_uri' => 'http://backend.local/api/']);
        $response = $client->request('POST', 'http://backend.local/api/register/'.$request['acc-type'], [
            'json' => [
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'password' => $request['password'],
                ]
        ]);
        $response =  (array)json_decode($response->getBody());

        if(array_key_exists('errors', $response))
        {
            return redirect('/signup')->with(['errorMessages' => json_encode($response['errors'])]);
        }
        setcookie('id', $response['id']);
        setcookie('type', $response['type']);
        setcookie('token', $response['token']);
        return redirect('/'.$response['type'].'/index');
    }

    public function postSignIn(Request $request)
    {
        $client = new Client(['base_uri' => 'http://backend.local/api/']);
        $response = $client->request('POST', 'http://backend.local/api/signin/'.$request['acc-type'], [
            'json' => [
                'email' => $request['email'],
                'password' => $request['password'],
            ]
        ]);
        $response =  (array)json_decode($response->getBody());

        if(array_key_exists('errors', $response))
        {
            return redirect('/signin')->with(['errorMessages' => json_encode($response['errors'])]);
        }
        setcookie('id', $response['id']);
        setcookie('type', $response['type']);
        setcookie('token', $response['token']);
        return redirect('/'.$response['type'].'/index');
    }

    public function getCustomer()
    {
        return view('customer.index');
    }
    public function getSeller()
    {
        return view('seller.index');
    }

    public function getSignOut()
    {
        setcookie("id", "", time()-3600);
        setcookie("type", "", time()-3600);
        setcookie("token", "", time()-3600);

        return redirect('/');
    }
}
