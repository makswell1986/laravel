<?php

namespace App\Http\Controllers;

use App\Models\Annoucement;
use Illuminate\Http\Request;

class AnnoucementController extends Controller
{
    public function show(){
       $rec=Annoucement::all();
       foreach($rec as $elem){
        dd($elem->getTag());
       };
       return view('announcements',['posts'=>$rec]); 
    }
}
