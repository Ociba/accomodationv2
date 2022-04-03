<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            "Can view dashboard","Can View categories","Can edit Category","Can delete Category","Can add Category"."Can view Users",
            "Can view Registered Users","Can suspend User","Can delete User","Can add User","Can view Subscribers","Can delete Subscribers",
            "Can view Brokers","Can edit Broker","Can delete Broker","Can add Broker","Can view Post","Can view Account Settings",
            "Can view Property","Can view my Property","Can view property Available","Can view  property taken","Can view Shop",
            "Can view Item Category","Can edit Item Category","Can delete Item Category","Can add Item Category","Can view Supermarket",
            "Can view Customer Orders","Can view Equipment","Can view received Requests","Can view Available Equipment","Can view taken Equipment",
             "Can view produce","Can view my Produce","Can view Available Produce","Can view Produce Taken","Can view Pay",
            "Can view notifications"];
    
            for($i=0; $i < count($permissions); $i++){
               $permission = new Permission();
                if(Permission::where("id",$i)->exists()){
                    $permission->id = $i+1;
                }
                else{
                   $permission->id = $i;
                } 
                $permission->Permission=$permissions[$i];
                $permission->save();
            }
    }
}
