<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Client;

class checkUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!isset($_COOKIE['id']) || !isset($_COOKIE['type']) || !isset($_COOKIE['token']))
        {
            return  redirect('/');
        }
        $client = new Client(['base_uri' => 'http://backend.local/api/']);
        $response = $client->request('POST', 'http://backend.local/api/check/'.$_COOKIE['type'], [
            'json' => [
                'id' => htmlspecialchars($_COOKIE['id']),
                'token' => htmlspecialchars($_COOKIE['token'])
            ]
        ]);
        $response =  (array)json_decode($response->getBody());
        //echo $response;
        if($response['confirmed'] === true)
        {
            return $next($request);
        }
        return redirect('signin');
    }
}
