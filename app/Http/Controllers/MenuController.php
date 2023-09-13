<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    function menu(){
        $menus = Menu::all();
        return view('admin.menu.menu', [
            'menus'=>$menus,
        ]);
    }

    function menu_store(Request $request){
        $request->validate([
            'menu_name'=>'required',
            'menu_link'=>'required',
        ]);

        Menu::insert([
            'menu_name'=>$request->menu_name,
            'menu_link'=>$request->menu_link,
            'created_at'=>Carbon::now(),
        ]);

        return back()->withmenu('Successfully Updated');
    }

    function menu_delete($menu_id){
        Menu::find($menu_id)->delete();
        return back()->withMenu_del('Successfully Deleted');
    }

    function menu_edit(Request $request){
        $menus_info = Menu::find($request->menu_id);
        return view('admin.menu.edit_menu', [
            'menus_info'=>$menus_info,
        ]);
    }

    function menu_update(Request $request){
        Menu::find($request->menu_id)->update([
            'menu_name'=>$request->menu_name,
            'menu_link'=>$request->menu_link,
        ]);
        return back()->withMenu_up('Successfully Updated');
    }
}
