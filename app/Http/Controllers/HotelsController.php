<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function index()
    {
    	$json = storage_path('app/hotels.json');
        $content = json_decode(file_get_contents($json), true); 
         
        $collection = collect($content);
		
        $filtered = $collection->filter(function($value,$key){
            	return $value; 
            });
		$sorted = $collection->sortBy('price');


        $sorted->values()->all();

        return $filtered->all();
    }

    public function url()
    {
    	$rUrl = 'https://api.myjson.com/bins/pq0f6';

		$data = json_decode(file_get_contents($rUrl), true);

		return $data;
    }
}

