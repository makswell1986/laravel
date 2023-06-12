<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use DB;
use Str;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{

  protected $stopOnFirstFailure = true;
public function show (){

    $posts=Category::all();
  
  return view('form.form',['posts'=>$posts]);
}



    public function store(Request $request) {
        


      $validator=Validator::make($request->all(),[
        
        'title' => 'required|min:5',
        'tag' => 'required',
        'text' => 'required'
      ]);
      
      if ($validator->stopOnFirstFailure()->fails()) {
        return redirect('/get-form')
                    ->withErrors($validator)
                    ->withInput();
    }      




 DB::table('annoucements')->insert([
  'title'=>$request->title,
  'slug'=>Str::of($request->title)->slug('-'),
  'category_id'=>$request->tag,
  'body'=>$request->text,
  'created_at'=>now(),
  'updated_at'=>now()
 ]);

 session()->flash('success','Успешно сохранено');

 return redirect('/get-form');

    }

}
