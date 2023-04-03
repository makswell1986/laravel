<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(){
        $rec=Category::all();
                    
        return view('category',['posts'=>$rec]); 
     }
}
