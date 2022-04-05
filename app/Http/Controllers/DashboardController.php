<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
 /**
     * This function gets admin dashboard
     */
    protected function getDashboard(){
        if(auth()->user()->type_id == '1'){
            return view('admin.dashboard');
        }elseif(auth()->user()->type_id == '2'){
            return redirect("/clients");
        }elseif(auth()->user()->type_id == '3'){
            return redirect('/place-order-now');
        }else{
            if(auth()->user()->type_id == '4' && (auth()->user()->payment_status = 'successful')){
                return redirect('/property/my-property');
            }elseif(auth()->user()->type_id == '4' && (auth()->user()->payment_date == 'payment_date') || (auth()->user()->payment_status == 'pending')){
                return redirect('/income/');
            }else{
                if(auth()->user()->type_id == '5' && (auth()->user()->amount != null)){
                    return redirect('/produce/my-produce');
                }elseif(auth()->user()->type_id == '5' && (auth()->user()->payment_date == 'payment_date')){
                    return redirect('/income/');
                }else{
                    return redirect('/income/');
                }
        }
    }
}
}
