<?php

namespace LaravelLiberu\Select;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->load()
            ->publish();
    }

    private function load()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/select.php', 'liberu.select');

        return $this;
    }

    private function publish()
    {
        $this->publishes([
            __DIR__.'/../config' => config_path('liberu'),
        ], ['select-config', 'liberu-config']);
    }
}
