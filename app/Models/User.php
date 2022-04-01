<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon;
use DB;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'type',
        'password',
        'amount',
        'payment_date',
        'contact',
        'address',
        'division',
        'street',
        'plot_number',
        'town',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    /**
     * This function counts supermarket clients requests
     * its should be less than 3 hours from the time it was sent
     */
    public function countAllOrders(){
        return DB::table('orders')->whereDate('created_at' , '=',Carbon::today())
        ->whereTime('created_at' , '>',Carbon::now()->subHours(3))->distinct('user_id')->count();
    } 
    /**
     * This function counts for clients who have subscribed to advertise their houses and property today
     */
    public function getTodayRegisteredUsers(){
        return DB::table('users')->whereDate('created_at' , '=',Carbon::today())->where('type','accomodation')->count();
    }
    /**
     * This function counts for clients who have subscribed to advertise their produce today
     */
    public function getTodayRegisteredProduceUsers(){
        return DB::table('users')->whereDate('created_at' , '=',Carbon::today())->where('type','produce')->count();
    }
    /**
     * This function count accomodation users registered today
     */
    public function countTodayAccomodationUser(){
        return DB::table('users')->whereDate('created_at' , '=',Carbon::today())->where('type','accomodation')->count();
    }
    /**
     * This function counts user registered for accomodation and property
     */
    public function countAccomodation(){
        return DB::table('users')->where('type','accomodation')->count();
    }
    /**
     * This function counts the accomodation and property available
     */
    public function countAvailableAccomodation(){
        return DB::table('properties')->where('status','pending')->count();
    }
    /**
     * This function counts the accomodation and property taken
     */
    public function countTakenAccomodation(){
        return DB::table('properties')->where('status','taken')->count();
    }
     /**
     * This function gets amount for user registered for accomodation and property
     */
    public function sumAccomodationPayment(){
        return DB::table('users')->where('type','accomodation')->sum('amount');
    }
    /**
     * This function count initial stock
     */
    public function countInitialStock(){
        return DB::table('supermarkets')->sum('number');
    }
    /**
     * This function counts the supermarket items sold
     */
    public function countStockSold(){
        return DB::table('orders')->where('status','delivered')->sum('quantity');
    }

    /**
     * This function counts current supermarket stock
     */
    public function countCurrentStock(){
        $delivered_items =\DB::table('orders')->where('status','delivered')->sum('quantity');
        $original_number =\DB::table('supermarkets')->sum('number');
        $stock=$original_number-$delivered_items;
        return $stock;
    }
    /**
     * This function gets total amount of supermarket and equipments sold
     */
    public function totalAmountCollected(){
        return DB::table('unitprices')->sum('total');
    }
     
    /**
     * This function counts for clients who have subscribed to advertise their produce today
     */
    public function countTodayRegisteredProduceUsers(){
        return DB::table('users')->whereDate('created_at' , '=',Carbon::today())->where('type','produce')->count();
    }
    /**
     * This function counts user registered for accomodation and property
     */
    public function countProduce(){
        return DB::table('users')->where('type','produce')->count();
    }
    /**
     * This function counts the accomodation and property available
     */
    public function countAvailableProduce(){
        return DB::table('produces')->where('status','available')->sum('quantity');
    }
    /**
     * This function counts the accomodation and property taken
     */
    public function countTakenProduce(){
        return DB::table('produces')->where('status','sold')->sum('quantity');
    }
     /**
     * This function gets amount for user registered for accomodation and property
     */
    public function sumProducePayment(){
        return DB::table('users')->where('type','produce')->sum('amount');
    }
    /**
     * This function counts equipment instock
     */
    public function countEquipmentStock(){
        return DB::table('equipment')->where('status','active')->sum('quantity');
    }
    /**
     * Total amount
     */
    public function totalIncome(){
        $accomo_payments = DB::table('users')->where('type','accomodation')->sum('amount');
        $produce_payment =DB::table('users')->where('type','produce')->sum('amount');
        $unit_amount =DB::table('unitprices')->sum('total');
       return $accomo_payments +  $produce_payment + $unit_amount;
    }
}
