<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function service(){
        $services = Service::all();
        return view('admin.service.service', [
            'services'=>$services,
        ]);
    }
    function service_store(Request $request){
        $request->validate([
            'icon'=>'required',
            'title'=>'required',
            'desp'=>'required',
        ]);

        Service::insert([
            'icon'=>$request->icon,
            'title'=>$request->title,
            'desp'=>$request->desp,
            'created_at'=>Carbon::now(),
        ]);
        return back()->withSersucc('Successfully Added');
    }

    function ser_delete($ser_id){
        Service::find($ser_id)->delete();
        return back()->withSerdel('Successfully Deleted');
    }

    function ser_edit(Request $request){
        $service_info = Service::find($request->ser_id);
        return view('admin.service.edit_service',[
            'service_info'=>$service_info,
        ]);
    }

    function service_update(Request $request){
        Service::find($request->ser_id)->update([
            'icon'=>$request->icon,
            'title'=>$request->title,
            'desp'=>$request->desp,
        ]);
        return back()->withSerupdate('Successfully Updated');
    }

}
