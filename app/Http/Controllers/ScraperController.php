<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;


class ScraperController extends Controller
{
    public function index()
{

    
$client = new Client();
$crawler = $client->request('GET', 'https://www.masrawy.com/sports/matches');

// Get the raw HTML content and set the encoding to UTF-8
$html = $crawler->html();
$html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');

// Load the HTML into a new Crawler object with the UTF-8 encoding set
$crawler = new Crawler($html, 'https://www.masrawy.com/sports/matches', 'UTF-8');



    // $client = new Client();
    
    // $website = $client->request('GET', '');
    
    $companies  = $crawler->filter('p')->each(function ($node) {
        return $node->text();
    });

    return $companies ;
}
}
