<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Symfony\Component\DomCrawler\Crawler;

class ScrapeXkcd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:xkcd';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $guzzle = new Client(['verify' => false]);
        for($i=1; $i<100; $i++) {
            $response = $guzzle->get("https://xkcd.com/$i/");
            $html = $response->getBody()->getContents();
            $crawler = new Crawler($html);
            $img = $crawler->filter('#comic>img');
            dump($img->attr('src'));
            dump($img->attr('title'));
            dump($img->attr('alt'));
        }
    }
}
