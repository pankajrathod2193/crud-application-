<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class Myapi extends Controller
{
    function ApiData(Request $req)
    {
        $device = new Device;
        $device->name=$req->name;
        $device->mobile=$req->mobile;
        $device->city=$req->city;
        $device->save();
    }
    function show()
    {
        $data = Device::all();
        return view ('list',['devices'=>$data]);
    }
    function delete($id)
    {
        $data = Device::find($id);
        $data->delete();
        return redirect('data');
    }
    function showData($id)
    {
        $data = Device::find($id);
        return view ('edit',['data'=>$data]); 

    }
    function update(Request $req)
    {
        $data = Device::find($req->id);
        $data->name=$req->name;
        $data->mobile=$req->mobile;
        $data->city=$req->city;
        $data->save();
        return redirect ('data');
    }
}
