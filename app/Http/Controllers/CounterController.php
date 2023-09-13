<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    function counter(){
        $counters = Counter::all();
        return view('admin.counter.counter', [
            'counters'=>$counters,
        ]);
    }

    function counter_store(Request $request){
        $request->validate([
            'sl_num'=>'required',
            'number'=>'required',
            'title'=>'required',
        ]);

        Counter::insert([
            'sl_num'=>$request->sl_num,
            'number'=>$request->number,
            'title'=>$request->title,
        ]);
        return back()->with('countersucc', 'Successfully Added');
    }

    function counter_delete($counter_id){
        Counter::find($counter_id)->delete();
        return back()->withCounterdel('Successfully Deleted');
    }

    function counter_edit(Request $request){
        $counter_info = Counter::find($request->counter_id);
        return view('admin.counter.edit_counter', [
            'counter_info'=>$counter_info,
        ]);
    }

    function counter_update(Request $request){
        Counter::find($request->counter_id)->update([
            'sl_num'=>$request->sl_num,
            'number'=>$request->number,
            'title'=>$request->title,
        ]);
        return back()->withCounterupdate('Successfully Updated');
    }
}
