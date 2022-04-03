<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypePermission;
use App\Models\Permission;
use App\Models\User;
use Auth;

class PermissionsController extends Controller
{
  /**
   * This function gets users types role
   */
  protected function getUsersTypes(){
      return view('permissions.users_type');
  }
  /**
   * This function gets permission for selected User type
   */
  protected function selectUsertypePermissions($type_id){
    $get_users_type =User::join('types','types.id','users.type_id')->where('users.type_id',$type_id)->limit(1)->get(['types.type','users.type_id']);

     $get_permission_for_selected_type =TypePermission::join('permissions','permissions.id','type_permissions.permission_id')
     ->where('type_permissions.type_id',$type_id)
     ->get(['permissions.permission','type_permissions.id']);
     return view('permissions.user_type_permissions',compact('get_permission_for_selected_type','get_users_type'));
  }
  /**
   * This fucntion gets the permissions
   */
  protected function getPermissions($type_id){
    $get_users_type =User::join('types','types.id','users.type_id')->where('users.type_id',$type_id)->limit(1)->get(['types.type','users.type_id']);
    $get_permissions =Permission::simplePaginate(10);
    return view('permissions.user_permissions',compact('get_users_type','get_permissions'));
  }
  /**
   * This function saves selected permissions for type
   */
  public function assignPermissions($type_id, Request $request){
    if(empty($request->user_permisions)){
        return redirect()->back()->withErrors("No updates were made, you didn't select any permision");
    }
    $permissions = $request->user_permisions;
        foreach($permissions as $permission){
            if(TypePermission::where('type_id',$type_id)->where('permission_id',$permission)->exists()){
                continue;
            }
            else{
              TypePermission::create(array(
                    'type_id'       => $type_id,
                    'permission_id' => $permission,
                    'user_id'       => Auth::user()->id
                ));
            }
        }
    return redirect()->back()->with('msg',"Operation Successfully");
}
/**
 * This function  removes permission fron type
 */
  public function unsignPermission($type_id){
    TypePermission::join('permissions','permissions.id','type_permissions.permission_id')
    ->where('type_permissions.id',$type_id)->delete();
    return redirect()->back()->with('msg','Permission has been unsigned successfully');
  }
}
