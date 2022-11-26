<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
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
        // TODO: ALL MENU CAN BE SEEN HERE
        //  STEP!: Create Your Menu Json to this directory -> resources/menu/
        //  STEP2: Get The File
        //  STEP3: Decode the file
        //  STEP4: Share the FUCKING json with unique menudata
        // $verticalMenuJson = file_get_contents(base_path('resources/menu/verticalMenu.json'));
        // $verticalMenuData = json_decode($verticalMenuJson);
        $path = base_path('resources/menu/');
        $files = scandir($path);
        foreach ($files as $verticalMenu) {
            if ($verticalMenu == '*' || $verticalMenu == '**')
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
