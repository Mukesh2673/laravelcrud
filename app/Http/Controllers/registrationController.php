<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registration;
use Illuminate\Support\Facades\DB;

class registrationController extends Controller
{
  function saveDatauser(Request $req)
  {
      $registration=new registration;
      $registration->name_english=$req->name_english;
      $registration->firstname=$req->firstname;
      $registration->lastname=$req->lastname;
      $registration->dob=$req->dob;
      $registration->mobile_no=$req->mobile_no;
      $registration->email=$req->email;
      $registration->address=$req->address;
      $registration->password=$req->password;
      $registration->pincode=$req->pincode;
      $registration->status=$req->status;
      $registration->save();
    if($registration->save()==1)
    {
   
      return redirect('index');
    }

  }
}
