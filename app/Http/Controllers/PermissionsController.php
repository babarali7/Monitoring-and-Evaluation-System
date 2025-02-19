<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;


class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       // $permissions = Permission::all();

        $detail = DB::table('permissions as p')
                    ->leftJoin('permissions as pf', 'p.parent_id', '=', 'pf.id')
                    ->select('p.*', 'pf.menu_name as parent_title')
                    ->orderByRaw('p.parent_id,p.sort_order ASC')
                    ->get();
       
        return view('permissions.index', [
            //'permissions' => $permissions,
            'menudetail' => $detail
        ]);
    }

    /**
     * Show form for creating permissions
     * 
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {   
        $permissions = Permission::where('parent_id',0)->get();
        
        return view('permissions.create', [
            'permissions' => $permissions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required|unique:users,name'
        ]);

      //  Permission::create($request->only('name'));

        Permission::create([
            'name'            => $request->input('name'),
            'menu_name'       => $request->input('menu_name'),
            'parent_id'       => $request->input('parent'),
            'sort_order'      => $request->input('sort_order'),
            'menu_icon'       => $request->input('menu_icon'),
            'display_menu'    => $request->input('display_menu')
       ]);

        return redirect()->route('permissions.index')
            ->withSuccess(__('Menu created successfully.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Permission  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
       
        $permissions = Permission::where('parent_id',0)->get();
       
        return view('permissions.edit', [
            'permission' => $permission,
            'permissions' => $permissions

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name,'.$permission->id
        ]);

       // $permission->update($request->only('name'));
       $permission->update([
                            'name'            => $request->input('name'),
                            'menu_name'       => $request->input('menu_name'),
                            'parent_id'       => $request->input('parent'),
                            'sort_order'      => $request->input('sort_order'),
                            'menu_icon'       => $request->input('menu_icon'),
                            'display_menu'    => $request->input('display_menu')
                            ]);
        return redirect()->route('permissions.index')
            ->withSuccess(__('Menu updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        return redirect()->route('permissions.index')
            ->withSuccess(__('Menu deleted successfully.'));
    }
}
