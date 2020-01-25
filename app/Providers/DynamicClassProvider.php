<?php

namespace App\Providers;
use App\Room;
use App\Book;
use Illuminate\Support\ServiceProvider;

class DynamicClassProvider extends ServiceProvider
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
        view()->composer('*',function($view){
            $view->with('room_array',Room::all()); //rooms is the array used to store all table data
            
        });
    }
}
