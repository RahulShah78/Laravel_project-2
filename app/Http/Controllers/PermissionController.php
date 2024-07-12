<?php

namespace App\Http\Controllers;

use App\Models\Manage_permission;

use Illuminate\Http\Request;


class PermissionController extends Controller
{
    public function addPermission(){
      return  view('Addional.addPermission');

    }

    public function storePermission(Request $req){


        // echo "user is ".$req->permissionName;
        $permission = new Manage_permission();
        $permission->PermissionID = 22;
        $permission->PermissionGroupId = 22;
        $permission->PermissionGroupName = $req->permissionGroupName;
        $permission->PermissionName  = $req->permissionName;
        $permission->PermissionKey = 'dbho';
        $permission->status = $req->status;

        if($permission->save()){
            return redirect('/Addional/listPermission');
        }
        else{
            echo 'operation failed';
        }

    
        
    }

    public function listPermission(){
        $permission= Manage_permission::all();
        return view('addional.listPermission',compact('permission'));
    }


    public function destroy($id)
    {
        // echo "user id is ".$id;
       $isDeleted =Manage_permission::destroy($id);
       if($isDeleted){
        return redirect('/Addional/listPermission');
       }
        else{
            return "Operation Failed";
        }
    }

    public function updates($id){
        $user = Manage_permission::find($id);
        return view('Addional/updatePermission',compact('user'));
    }

    
    function update(Request $req, $id){
        
        $user = Manage_permission::find($id);
        $user->PermissionGroupName = $req->permissionGroupName;
        $user->PermissionName = $req->permissionName;
      
       

        // $originalFileName = $req->file('profile_image')->getClientOriginalName();
        // $path = $req->file('profile_image')->storeAs('public', $originalFileName);
        // $fileNameArray = explode('/',$path);
        // $fileName = $fileNameArray[1];
        // $user->profile_image = $fileName;
       
        
        if($user->save()){
            return redirect('Addional/listPermission');
        }
        else{
            return "Operation Failed";
        }

    }

    function activePermission($id){
        $permission = Manage_permission::find($id);
        if($permission){
            if($permission->status == 'active'){
                $permission->status ='inactive';
                if($permission->save()){
                    return redirect('/Role/listRole');
                }
                else{
                    return "Operation Failed!.";
                }
            }
            else{
                $permission->status = 'active';
                if($permission->save()){
                    return redirect('/Role/listRole');
                }
                else{
                    return "Operation failed";
                }
            }

        }
        else{
            return "Opertaion Failed!.";
        }
    }
}
