<?php

namespace App\Providers;

use Elasticsearch\ClientBuilder;
use Illuminate\Support\ServiceProvider;

class ElasticsearchServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('elasticsearch', function () {
            $hosts = config('elasticsearch.hosts');

            return ClientBuilder::create()
                ->setHosts($hosts)
                ->build();
        });
    }
}
