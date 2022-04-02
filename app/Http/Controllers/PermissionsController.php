<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypePermission;
use App\Models\Permission;
use App\Models\User;

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
     ->get(['permissions.permission']);
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
}
