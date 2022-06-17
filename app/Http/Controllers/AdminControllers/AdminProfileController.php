<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Admin;


class AdminProfileController extends Controller
{
        // function __invoke(){
    //     return 'Testing';
    // }
    
    public function AdminProfile(){
        $admin = Auth::guard('admin')->user();

        return view('admin.profile.profilesettings',compact('admin'));
    }

    // public function AdminProfileEdit(){

    //     $editData = Auth::guard('admin')->user();
    //     return view('admin.profile.profile_edit',compact('editData'));
    // }

    public function AdminProfileStore(Request $request){
        
        $adminData = Admin::find(Auth::guard('admin')->user()->id);
        $adminData->name = $request->name;
        $adminData->email = $request->email;

        if($request->file('Profile_Photo_Path')){

            $file = $request->file('Profile_Photo_Path');

            $fileName = date('YMDHI') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images/'),$fileName);

            $adminData['Profile_Photo_Path'] = $fileName;
        }
        $adminData->update();

        $notification = array( 
            'message' => 'Admin Profile Updated Successfully ',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($notification);
    }

    // public function AdminChangePassword(){
    //     return view('admin.profile.changepassword');
    // }

    public function AdminUpdatePassword(Request $request){
        // $validateData = $request->validate([
        //     'old_password' => 'required',
        //     'password' => 'required|confirmed'
        // ]);

        $hashedValue = auth()->guard('admin')->user()->password;

        if(Hash::check($request->old_password,$hashedValue)){
            
            $adminPassword = Admin::find(Auth()->guard('admin')->user()->id);
            $adminPassword->password = Hash::make($request->password);
            $adminPassword->save();
            Auth::logout();
           
            return redirect()->route('admin.logout');
        }else{
            return redirect()->back()->with(['passmessage'=>'wrong password']);
        }
    }
}
