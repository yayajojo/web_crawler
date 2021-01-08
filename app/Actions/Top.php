<?php

namespace App\Actions;
use Goutte\Client;


class Top extends iAction
{
    private $uri;
    public function __construct()
    {
        $this->uri = 'https://www.alexa.com/topsites';
    }
    public function exec(array $argv)
    {
        $client = new Client();
        $crawler = $client->request('GET', $this->uri);
        $crawledUris = [];
        $crawler->filter('div.listings > div.site-listing > div.DescriptionCell > p > a')->each(function ($node)use(&$crawledUris) {
            array_push($crawledUris,$node->text()."\n");
        });
        
        $num = (int) $argv[0];
        $uriNumber= count($crawledUris);
        $num = $num < $uriNumber? $num:$uriNumber;
        for($i = 0 ; $i < $num; $i++){
            echo "The ". ($i+1) ." site: " . $crawledUris[$i];
        }
    }
}