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

        return back()->with('deleteUserSuccess', 'User Deleted!');
    }

    public function update_role($role_id){
        $account_id = User::where('account_id', $role_id)->first();

        return view('update_role.role_update', [
            'title'=> 'Update Role',
            'account' => $account_id
        ]);

    }

    public function update_role_user(Request $request){
        $account = User::where('account_id', $request->account)->first();

        if($request->role_id == 'Admin'){
            $account['role_id'] = 1;
        }else{
            $account['role_id'] = 2;
        }

        return redirect('/account-maintance');

    }

}