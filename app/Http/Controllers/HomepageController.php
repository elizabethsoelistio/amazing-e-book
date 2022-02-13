<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        
        $ebook = Ebook::all();
        return view ('homepage.home',[
            'title' => 'Homepage',
            'ebook' => $ebook
        ]);
    }

    public function redirect(){
        
       return redirect('/home');
    }

    

}
