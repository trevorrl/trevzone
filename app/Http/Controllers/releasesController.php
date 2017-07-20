<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\json_decode;

class releasesController extends Controller {

    private $gb_key;

    public function __construct() {
        $this->gb_key = env('GB_API_KEY');
    }

    public function test($search) {

        $client = new Client([
            'base_uri' => 'https://www.giantbomb.com/api/'
        ]);

        $url = 'search'.$this->gb_key.'&format=json&field_list=name,deck,original_release_date,site_detail_url&query='.$search;

        $response = $client->request('GET', $url);

        $response = $response->getBody()->getContents();

        $array = json_decode($response);

    }
}