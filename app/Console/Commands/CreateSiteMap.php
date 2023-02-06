<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class CreateSiteMap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a sitemap';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        SitemapGenerator::create(config('app.url'))
            ->getSitemap()
            ->add(Url::create('/trellis-gates')->setPriority(1))
            ->add(Url::create('/gallery')->setPriority(0.8))
            ->add(Url::create('/faq')->setPriority(0.8))
            ->add(Url::create('/quote')->setPriority(0.9))
            ->writeToFile(public_path('sitemap.xml'));
    }
}
