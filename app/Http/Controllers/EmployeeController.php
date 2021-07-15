<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* to import db file here */
use Illuminate\Support\Facades\DB;
class EmployeeController extends Controller
{
    function show()
    {
        return DB::table('developer')->join('employe','employe.eid',"=",'developer.did')
        ->join('manager','employe.eid',"=",'manager.mid')
        ->get(['manager.*', 'employe.*','developer.*']);
    }
}

