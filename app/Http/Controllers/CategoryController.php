<?php

namespace App\Http\Controllers;

use App\Models\Annoucement;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($elem){
        
        $rec=Annoucement::where('category_id','=',$elem)->get();
        
                    
        return view('category',['posts'=>$rec]); 
     }
}
