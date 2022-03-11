<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
 /**
     * This function gets admin dashboard
     */
    protected function getDashboard(){
        if(auth()->user()->type == 'admin'){
            return view('admin.dashboard');
        }elseif(auth()->user()->type == 'broker'){
            return redirect("/clients");
        }elseif(auth()->user()->type == 'supermarket'){
            return redirect('/place-order-now');
        }else{
            if(auth()->user()->type == 'accomodation' && (auth()->user()->amount != null)){
                return redirect('/property/my-property');
            }elseif(auth()->user()->type == 'accomodation' && (auth()->user()->payment_date == 'payment_date')){
                return redirect('/income/');
            }else{
                if(auth()->user()->type == 'produce' && (auth()->user()->amount != null)){
                    return redirect('/produce/my-produce');
                }elseif(auth()->user()->type == 'produce' && (auth()->user()->payment_date == 'payment_date')){
                    return redirect('/income/');
                }else{
                    return redirect('/income/');
                }
        }
    }
}
}
