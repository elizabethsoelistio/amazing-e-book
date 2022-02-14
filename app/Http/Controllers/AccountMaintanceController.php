<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountMaintanceController extends Controller
{
    public function index(){
        return view('account_main.account_maintance', [
            'title' => 'Account Maintance',
            'account' => User::all()
        ]);
    
    }

    public function delete_user(Request $request){
        $account_id = $request->account_id;

        User::where('account_id', $account_id)->delete();

        return back()->with('byebyeUser', 'User Deleted!');
    }

    public function update_role($role_id){
        $account_id = User::where('account_id', $role_id)->first();

        return view('update_role.role_update', [
            'title'=> 'Update Role',
            'account' => $account_id
        ]);

    }

    public function update_role_user(Request $request){
        $account_id = User::where('account_id', $request->account_id)->first();

        if($request->role_id === 'admin'){
            $account_id['role_id'] = 1;
        }else{
            $account_id['role_id'] = 2;
        }
        $account_id->save();
        return redirect('/account-maintance');

    }

}