<?php

namespace App\Service;

class FootballApiService
{
 protected $baseUrl;
 protected $apiKey;

 public function __construct()
 {
  $this->baseUrl = 'https://api.football-data.org/v4';
  $this->apiKey = env('FOOTBALL_API_KEY');
 }

 public function getHeaders(){
     return [
         'X-Auth-Token' => $this->apiKey
     ];
 }

}
