<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Annoucement extends Model
{
    use HasFactory;
   /*  protected $fillable = ['annoucement_id','slug','tags'];
 */
public function getTag(){
   return $this->hasOne(Category::class); 
}
}
