<?php

// Don't use namespace for now.
namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use \vendor\guzzlehttp\guzzle\src\Client;

class MakeModelController extends Controller
{

    // Submit the user form
    public function submit() {

        $email = request('email');
        $make = request('make');
        $model = request('model');

        // Request from Edmunds API
        //$client = new \GuzzleHttp\Client(['base_uri' => 'https://api.edmunds.com/api/vehicle/v2/']);

        $client = new \GuzzleHttp\Client(['base_uri' => 'https://pozzad-email-validator.p.mashape.com']);

        //$res = $client->request('GET', $make . '/' . $model . 
        //    '/years?fmt=json&state=new&api_key=4ym52yppk3sfdrxe2fyd8qtj');

        $res = $client->request('GET', '/emailvalidator/validateEmail/ykanii%40att.net',  
            ['X-Mashape-Key' => '3MTxQelzg9mshJUI8ATDxGDpRxNep1LLuUFjsndoW8D3Y7f9Lo',
            "Accept" => "application/json"
            ]);

        $body = $res->getBody();

        dd($body);

        /*
        echo $res->getStatusCode();
        // "200"

        echo $res->getHeader('content-type');
        // 'application/json; charset=utf8'

        echo $res->getBody();
        // {"type":"User"...'
        */
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('welcome');

    }

}
