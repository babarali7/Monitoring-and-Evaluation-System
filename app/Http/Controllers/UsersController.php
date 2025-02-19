<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $users = User::with(['institute' => function ($query) {
            $query->select('inst_id', 'inst_name');
        }])->latest()->paginate(10);

      // $users = User::with('institute')->get();

       // dd($users);

        return view('users.index', compact('users'));
    }

    /**
     * Show form for creating user
     * 
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        
        $institutes = DB::table('institutes')->select('inst_id','inst_name')->get();
        return view('users.create',[
            'institute' => $institutes
        ]);

    }

    /**
     * Store a newly created user
     * 
     * @param User $user
     * @param StoreUserRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(User $user, StoreUserRequest $request) 
    {
        //For demo purposes only. When creating user or inviting a user
        // you should create a generated random password and email it to the user
        //dd($request);
        
        $user->create(array_merge($request->validated(), [
            'password' => '12345678' 
        ]));

        return redirect()->route('users.index')
            ->withSuccess(__('User created successfully.'));
    }

    /**
     * Show user data
     * 
     * @param User $user
     * 
     * @return \Illuminate\Http\Response
     */
    public function show(User $user) 
    {
        return view('users.show', [
            'user' => $user
        ]);
    }

    /**
     * Edit user data
     * 
     * @param User $user
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user) 
    {
        
        $institutes = DB::table('institutes')->select('inst_id','inst_name')->get();
        return view('users.edit', [
            'user' => $user,
            'userRole' => $user->roles->pluck('name')->toArray(),
            'roles' => Role::latest()->get(),
            'institutes' => $institutes
        ]);
    }

    /**
     * Update user data
     * 
     * @param User $user
     * @param UpdateUserRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, UpdateUserRequest $request) 
    {
       // dd($request->get('role'));

        $user->update($request->validated());

        $user->syncRoles((int)$request->get('role'));

        return redirect()->route('users.index')
            ->withSuccess(__('User updated successfully.'));
    }

    /**
     * Delete user data
     * 
     * @param User $user
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user) 
    {
        $user->delete();

        return redirect()->route('users.index')
            ->withSuccess(__('User deleted successfully.'));
    }

    public function changepassword(User $user)
    {
        $users = User::find(Auth::user()->id);
        return view('users.changepassword',compact('users'));
    }


    public function updatepassword(Request $request)
    {
        $this->validate($request, [ 
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'password_confirmation' => 'required|same:newpassword'

        ]);
       
        $hashedPassword = Auth::user()->password;
       
        if (\Hash::check($request->oldpassword , $hashedPassword)) {
            if (\Hash::check($request->newpassword , $hashedPassword)) {               
                
                // dd("same old password");
                 session()->flash('success',array('failed' => 'New password can not be the old password!'));
                 return redirect()->back();

            }else{
                  
               // dd("password is changed");

                $users = User::find(Auth::user()->id);    

                $users->password = $request->newpassword;                
                $users->save();               
                session()->flash('success','Password updated successfully');
                return redirect()->back();
            
            } 
        }
        else{
            session()->flash('success',array("failed" => "Old password doesn't matched"));
            return redirect()->back();
        }
    }


}


/*

git clone https://github.com/codeanddeploy/laravel8-authentication-example.git

if your using my previous tutorial navigate your project folder and run composer update



install packages

composer require spatie/laravel-permission
composer require laravelcollective/html

then run php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"

php artisan migrate

php artisan make:migration create_posts_table

php artisan migrate

models
php artisan make:model Post

middleware
- create custom middleware
php artisan make:middleware PermissionMiddleware

register middleware
- 

routes

controllers

- php artisan make:controller UsersController
- php artisan make:controller PostsController
- php artisan make:controller RolesController
- php artisan make:controller PermissionsController

requests
- php artisan make:request StoreUserRequest
- php artisan make:request UpdateUserRequest

blade files

create command to lookup all routes
- php artisan make:command CreateRoutePermissionsCommand
- php artisan permission:create-permission-routes

seeder for default roles and create admin user
php artisan make:seeder CreateAdminUserSeeder
php artisan db:seed --class=CreateAdminUserSeeder



*/