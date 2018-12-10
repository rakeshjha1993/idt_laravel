<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class SearchController extends Controller
{
    //

    public function search(Request $request){
      $API_KEY = 'AIzaSyBQpc0-wOerW7cgP8HcGRYv0Ol5RsvEJPo';

     $searchTerm = $request->search_term;
      $placesApiUrl = "https://maps.googleapis.com/maps/api/geocode/json?key=".$API_KEY."&address=".$searchTerm ;
        $client = new Client();
        $result = $client->request('GET', $placesApiUrl);
        $responseBody = json_decode($result->getBody());
        $addressComponents = $responseBody->results[0]->address_components;
        $response = array();
        foreach($addressComponents as $addressComponent){
          if(in_array('administrative_area_level_2',$addressComponent->types)){
            $response = $addressComponent;
          }
        }
        //var_dump($responseBody->results[0]->address_components);
        return json_encode($response);
    }
}
