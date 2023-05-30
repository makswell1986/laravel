<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class FormController extends Controller
{


public function show (){

    $posts=Category::all();
  
  return view('form.form',['posts'=>$posts]);
}



    public function store(Request $request) {
        
       dd($request);
        $validated = $request->validate([
    
        'title' => 'required|min:255',
        'tag' => 'required',
        'text' => 'required'
        
]);

/*  DB::table('')
    } */

    }

}
