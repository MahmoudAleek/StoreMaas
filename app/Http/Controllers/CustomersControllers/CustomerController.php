<?php

namespace App\Http\Controllers\Customers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Controllers\Controller;
use App\Models\User;

class CustomerController extends Controller
{
    public function home(){
        return view('customer.dashboard');
    }

    public function UserLogout(){
        Auth::logout();
        return redirect('/');
    }

    public function UserProfile(){

        return view('customer.profile.user_profile');
    }



    public function UserProfileStore(Request $request){

        $userId = Auth::user()->id;

        $userData = User::find($userId);

        $userData->name = $request->name;
        $userData->email = $request->email;
        $userData->phone = $request->phone;

        if($file = $request->file('Profile_Photo_Path')){
            
            $oldImg = $userData->Profile_Photo_Path;
            $fileName = date('ymdhi'). $file->getClientOriginalExtension();
            $file->move(public_path('upload/user_images/'),$fileName);
            if(!empty($oldImg)){ 
                unlink(public_path('upload/user_images/'.$oldImg));
            }
            $userData->Profile_Photo_Path = $fileName;

          
        }

        $userData->save();


        $notifications = array(
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('user.profile')->with($notifications);
    }

    public function UserChangePassword(){
        return view('customer.profile.change_password');
    }

    public function UserUpdatePassword(ChangePasswordRequest $req){

        $validatedInputs = $req->safe()->only(['current_password','password']);

        $oldPassword = $validatedInputs['current_password'];
        $new_password = $validatedInputs['password'];

        $hashedPassword = Auth::user()->password;
        $userId = Auth::user()->id;

        if(Hash::check($oldPassword,$hashedPassword)){
            $user = User::find($userId);

            $user["password"] = Hash::make($new_password);
            $user->save();
            Auth::logout();

            $notifications = array(
                'message' => 'Updated password successfully Done',
                'alert-type' => 'success'
            );
            return redirect()->route('login')->with($notifications);
        }

        $notifications = array(
            'message' => 'Please CHECK your Password again , you have been inserted wrong password',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notifications);

    }
}
