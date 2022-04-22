<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Redirect;
use View;
use File;

class AjaxContactController extends Controller
{
    public function index()
    {
        return view('ajax-contact-form');
    }
    public function saveData(Request $request)
        {
        $firstname    = $request->firstname; 
        $secondname   = $request->secondname;
        $nationality  = $request->nationality;
        $address      = $request->address;
        DB::table('blogs')->insert([
        'firstname'   => $firstname,
        'secondname'  => $secondname,
        'nationality' => $nationality,
        'address'     => $address
        ]);
        }
}
