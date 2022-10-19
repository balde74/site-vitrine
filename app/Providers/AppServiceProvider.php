<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Contact;
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
        $contact = Contact::find(1);
        $images = Galerie::all();

        View::share('menus',$menus);
        View::share('contact',$contact);
        View::share('images',$images);
    }
}
