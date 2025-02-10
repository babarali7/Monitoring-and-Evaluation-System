<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Auth;


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

use Illuminate\Support\Facades\DB;

use View;

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
         Paginator::useBootstrap();
         
        View::composer('*', function($view)
        {
         
            if (Auth::check()) { 
               
             //    dd(auth()->user());
            
            // DB::enableQueryLog();

            $user = new User;
            $navbars = auth()->user()->getAllPermissions()->where('display_menu',1)
            ->sortBy([
                     'parent_id', 'asc',
                     'sort_order', 'asc']);
          
                     // $users = $navbars::with('permissions')->get();
           
          // $users = $navbars::where('parent_id',0);
         // dd(DB::getQueryLog());
   
         
           // $navbars = Permission::orderBy('id')->get();
            //$navbars = $permissions;
            $view->with('navbars', $navbars);

            } else {
              
              //  dd("not logged in");

            }



        
        });

    }
}
