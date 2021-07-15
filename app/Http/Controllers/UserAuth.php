<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    function userLogin(Request $req)

        {
            $data=$req->input();
            $req->session()->put('user',$data['user']);
           $name1=(session('user'));
   
           $users= DB::select("select * from developer where did=1");
          
            $arr = [];
        foreach($users as $row)
        {
        $arr[] = (array) $row;
        }
        
        $name=($arr[0]['name']);
            if($name1==$name)
            {
                return redirect('index');
            }
            else{
                return redirect('login');
             
            }
          

        
        }

    }
