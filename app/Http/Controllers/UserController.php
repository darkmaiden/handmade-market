<?php

// import the Intervention Image Manager Class
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use GuzzleHttp\Client;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use Cartalyst\Stripe\Stripe;

class UserController extends Controller
{
    //
    const BASE_URI = 'http://backend.local/api/';
    //const BASE_URI = 'http://79d65398.ngrok.io/api/';

    public function postRegister(Request $request)
    {
        $client = new Client(['base_uri' => self::BASE_URI]);
        $response = $client->request('POST', self::BASE_URI.'register/'.$request['acc-type'], [
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
        $client = new Client(['base_uri' => self::BASE_URI]);
        $response = $client->request('POST', self::BASE_URI.'signin/'.$request['acc-type'], [
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

    public function getCustomerIndex()
    {
        if($_COOKIE['type'] == 'customer')
        {
            return view('customer.index');
        }
        return redirect('/seller/index');
    }
    public function getSellerIndex()
    {
        if($_COOKIE['type'] == 'seller')
        {
            $client = new Client(['base_uri' => self::BASE_URI]);
            $response = $client->request('GET', self::BASE_URI.'items/'.$_COOKIE['id']);
            $response =  (array)json_decode($response->getBody());
            //print_r($response);
            return view('seller.index')->with(['items' => $response['items']]);
        }
        return redirect('/customer/index');
    }

    public function getSignOut()
    {
        setcookie("id", "", time()-3600);
        setcookie("type", "", time()-3600);
        setcookie("token", "", time()-3600);

        return redirect('/');
    }

    public function postAddItem(Request $request)
    {

        $client = new Client(['base_uri' => self::BASE_URI]);
        $response = $client->request('POST', self::BASE_URI.'seller/additem', [
            'json' => [
                'name' => $request['name'],
                'price' => $request['price'],
                'description' => $request['description'],
                'seller_id' => $_COOKIE['id']
            ]
        ]);
        $response =  (array)json_decode($response->getBody());
        //Image::make(Input::file('photo'))->resize(400, 300)->save($response['id'].'.jpg');
        $img = Image::make($_FILES['photo']['tmp_name']);

        // resize image
        $img->fit(400, 300);

        // save image
        $img->save('images/items/'.$response['id'].'.jpg');

        return redirect('/seller/index');
    }

    public function postPay(Request $request)
    {
        
    }

    public function getInfo()
    {
        return view('rfid');
    }

    public function info(Request $request)
    {
        $client = new Client(['base_uri' => self::BASE_URI]);
        $response = $client->request('POST', self::BASE_URI.'info', [
            'json' => [
                'id' => $request['id'],
            ]
        ]);
        $response =  (array)json_decode($response->getBody());
        return redirect('/rfid')->with(['id' => $response['id'], 'item_name' => $response['item_name'],
            'description' => $response['description'],
            'price' => $response['price'], 'seller_name' => $response['seller_name']]);
    }
}
