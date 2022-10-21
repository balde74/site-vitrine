<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Info_complementaire;
use App\Models\Galerie;
use Illuminate\Support\Facades\View;
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
        $menus = Menu::all();
        $info = Info_complementaire::find(1);
        $images = Galerie::all();

        View::share('menus',$menus);
        View::share('info',$info);
        View::share('images',$images);
    }
}
