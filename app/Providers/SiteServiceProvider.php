<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SiteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      $this->publishes([
     __DIR__.'vendor/kyslik/column-sortable/src/config/columnsortable.php' => config_path('columnsortable.php'),
 ]);
    }
}
