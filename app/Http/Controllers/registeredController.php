<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registration;

class registeredController extends Controller
{
    function showuser()
    {
        $data=registration::all();
        return view('view_list',['registration'=>$data]);
    }
    function edit($id)
    {
        $data= registration::find($id);
        return view('edit',['data'=>$data]);
    }

    function update(Request $req)
    {
        $data= registration::find($req->id);
        $data->name_english=$req->name;
        $data->email=$req->email;
        $data->mobile_no=$req->mobile;
        $data->password=$req->password;
        $data->save();
        return redirect('view_list');
    }

    function delete($id)
    {
    $data=registration::find($id);
    $data->delete();
    return redirect('view_list');
    }


}
