<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class ParseController extends Controller
{
    function index()
    {
      $client = new Client();

      $crawler = $client->request('GET', 'https://www.segodnya.ua/regions/odessa.html');
      $text = $crawler->filter('.white-frame a')->each(function(Crawler $node){
        $href = $node->attr('href');
        
        $article_url = "http://www.segodnya.ua{$href}";
        $client = new Client();   

        $article_crawler = $client->request('GET', $article_url);
        $title = $article_crawler->filter('.article-content .title h1')->text();
        
        $date = $article_crawler->filter('.article-content .title div span')->text();        
        $views = $article_crawler->filter('.article-content .title div span > span')->text();
        $tags = $article_crawler->filter('.article-content .tag')->text();
        
        echo "<br>";
      });
            
      return view('index');
    }

    

}


