<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function index()
    {
    	/*$path = '/app/hotels.json';
        $content = json_decode(file_get_contents($path), true);*/
           $json = storage_path('app/hotels.json');
        $content = json_decode(file_get_contents($json), true); 
        #return view('show',compact('content'));
        return $content;
    }

    public function url()
    {
    	$rUrl = 'https://api.myjson.com/bins/pq0f6';

		$data = json_decode(file_get_contents($rUrl), true);

		return $data;
    }
}

