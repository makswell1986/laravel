<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Annoucement;


class Category extends Model
{
    use HasFactory;
    protected $fillable = ['slug','title']; 
   public function getPost(){
        return $this->belongsTo(Annoucement::class); 
     } 
    
}
