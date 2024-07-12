<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    //
    public function dashboard(){
        $users = User::all();
        return view('components.contant',compact('users'));
    }

    public function destroy($id)
    {
       
        if ($id == 1) {

            $isDeleted = User::destroy($id);
            return redirect('/');
        }


       $isDeleted = User::destroy($id);
       
       if ($isDeleted) {
        return redirect('/components/contant')->with('status', 'User deleted successfully!');
    } else {
        return redirect('/components/contant')->with('status', 'Operation Failed.');
    }
    }

    function update(Request $req, $id){
        
        $user = User::find($id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->number = $req->number;
        $user->address = $req->address;
        $user->Role = $req->Role; 
        

        $originalFileName = $req->file('profile_image')->getClientOriginalName();
        $path = $req->file('profile_image')->storeAs('public', $originalFileName);
        $fileNameArray = explode('/',$path);
        $fileName = $fileNameArray[1];
        $user->profile_image = $fileName;
       
        
        if($user->save()){
            return redirect('/components/contant');
        }
        else{
            return "Operation Failed";
        }

    }
    

    public function updates($id){
        $user = User::find($id);
        return view('components.update',compact('user'));
    }

    public function loadadd(){

        return view('components.add');
    }
   
   
    public function useradd(Request $request)
    {
        $request->validate([
         
            'name' => 'string|required|min:1',
            'email' => 'string|required|email|max:100|unique:users',
            'password' => 'string|required|min:6|confirmed',
            'number' => 'string|required|min:10',
            'profile_image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048899'],
        ]);

        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('profile_image', 'public');
        } else {
            $imagePath = null;
        }

       $user = new User;
       $user->name= $request->name;
       $user->email= $request->email; 
       $user->password = Hash::make($request->password);
       $user->number= $request->number; 
       $user->profile_image = $imagePath;
       $user->address= $request->address; 
       $user->role= $request->role; 

       
       $user->save();

      
       return redirect()->route('components.contant');

    }

    public function view($id){
        $user = User::find($id);
        return view('components.view',compact('user'));
    }



}