<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){

        return view('profile.profile', [
            'title' => 'Profile'
        ]);
    }

    public function update(Request $request){
        $validate_data = $request->validate([
            'first_name' => 'required|max:25|alpha_num',
            'middle_name' => 'max:25',
            'last_name' => 'required|max:25|alpha_num',
            'email' => 'required|email:dns|unique:users',
            'password'=>'required|max:50|min:8',
            'gender_id' => 'required'
        ]);

        // dd('yay');

        if($request->hasFile('display_picture_link')){
            $request->validate([
                'display_picture_link' => 'image'
            ]);
        }

        $validate_data['password'] = bcrypt($validate_data['password']);
        $validate_data['modified_at'] = now();

        if($validate_data['gender_id'] == 'option1'){
            $validate_data['gender_id'] = 1;
        } else if ($validate_data['gender_id'] == 'option2'){
            $validate_data['gender_id'] = 2;
        }

        $account = User::where('account_id', auth()->user()->account_id)->first();
        
        $account->first_name = $validate_data['first_name'];
        $account->last_name = $validate_data['last_name'];
        $account->gender_id = $validate_data['gender_id'];
        $account->email = $validate_data['email'];
        $account->password = $validate_data['password'];

        if($request->file('display_picture_link')){
            $validate_data['display_picture_link'] = 'storage/' . $request->file('display_picture_link')->store('images/user_img');
        }

        $account->save();

        return view('success_only.success', [
            'title' =>'Success!'
        ]);

        
    }

}
