<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.register', [
            'title' => 'Register'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        // dd($request->all());
        
        $validate_data = $request->validate([
            'first_name' => 'required|max:25',
            'middle_name' => 'max:25',
            'last_name' => 'required|max:25',
            'email' => 'required|email:dns|unique:users',
            'password'=>'required|max:50|min:8',
            'gender_id' => 'required',
            'role_id' => 'required',
            'display_picture_link' => 'required'
        ]);

        $last_acc_id = User::orderBy('account_id', 'desc')->first();

        $validate_data['account_id'] = (int)$last_acc_id ->account_id+1;

        // dd('yay');

        if($request->hasFile('display_picture_link')){
            $request->validate([
                'display_picture_link' => 'image|file'
            ]);
        }

        $validate_data['password'] = bcrypt($validate_data['password']);
        $validate_data['modified_at'] = now();

        if($validate_data['gender_id'] == 'option1'){
            $validate_data['gender_id'] = 1;
        } else if ($validate_data['gender_id'] == 'option2'){
            $validate_data['gender_id'] = 2;
        }

        if($validate_data['role_id'] == 'admin'){
            $validate_data['role_id'] = 1;
        } else if ($validate_data['role_id'] == 'member'){
            $validate_data['role_id'] = 2;
        }

        if($request->file('display_picture_link')){
            $validate_data['display_picture_link'] = 'storage/' . $request->file('display_picture_link')->store('images/user_img');
        }

        $last_acc_id->save();

        User::create($validate_data);
        $request->session()->flash('regis_success', 'Registration successful! Please login!');

        return redirect('/login');

    }
}
