<?php

namespace App\Http\Controllers;

use App\Models\Annoucement;
use Illuminate\Http\Request;

class AnnoucementController extends Controller
{
    public function show(){
       $rec=Annoucement::all();
      
            
       return view('announcements',['posts'=>$rec]); 
    }
}
