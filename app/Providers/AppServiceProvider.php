<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    $path = base_path('resources/menu/');
    $files = scandir($path);
    foreach ($files as $verticalMenu) {
        if ($verticalMenu == '.' || $verticalMenu == '..')
            continue;
        else {

            $verticalMenuJson = file_get_contents(base_path('resources/menu/' . $verticalMenu));
            $verticalMenuData = json_decode($verticalMenuJson);
            // Share all menuData to all the views
            $verticalMenu = str_replace(".json", "" , $verticalMenu);
            \View::share($verticalMenu, [$verticalMenuData]);
        }
    }
  }
}
