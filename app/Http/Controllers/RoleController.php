<?php

namespace App\Http\Controllers;

use App\Models\role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listRole(){
        $role= role::all();
        return view('Role.listRole',compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addRole(){
        return  view('Role.addRole');
  
      }
    /**
     * Store a newly created resource in storage.
     */
    public function storeRole(Request $req){
        


        // echo "user is ".$req->User_Type;
        // echo "user is ".$req->Role_Name;
        // echo "user is ".$req->Role_Status;
        // echo "user is ".$req->User_Type;

        $role = new role();
        $role->User_Type_ID = 22;
        $role->Division= 'dbho';
        $role->Role_Name = $req->Role_Name; 
        $role->User_Type = $req->User_Type; 
        $role->Role_Status = $req->Role_Status;

        if($role->save()){
            return redirect('/Role/listRole');
        }
        else{
            echo 'operation failed';
        }

    
        
    }

    public function  Delete ($id)
    {
        // echo "user id is ".$id;
       $isDeleted =role::destroy($id);
       if($isDeleted){
        return redirect('/Role/listRole');
       }
        else{
            return "Operation Failed";
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
  
     public function updates($id){
        $user = role::find($id);
        return view('Role/updateRole',compact('user'));
    }

    
    function update(Request $req, $id){
        
        $user = role::find($id);
        $user->User_Type = $req->User_Type;
        $user->Role_Name = $req->Role_Name;
      
       

        // $originalFileName = $req->file('profile_image')->getClientOriginalName();
        // $path = $req->file('profile_image')->storeAs('public', $originalFileName);
        // $fileNameArray = explode('/',$path);
        // $fileName = $fileNameArray[1];
        // $user->profile_image = $fileName;
       
        
        if($user->save()){
            return redirect('Role/listRole');
        }
        else{
            return "Operation Failed";
        }

    }

    function activeRoles($id){
        $role = role::find($id);
        if($role){
            if($role->Role_Status == 'active'){
                $role->Role_Status ='inactive';
                if($role->save()){
                    return redirect('/Role/listRole');
                }
                else{
                    return "Operation Failed!.";
                }
            }
            else{
                $role->Role_Status = 'active';
                if($role->save()){
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
