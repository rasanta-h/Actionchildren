<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title','details','description','image','slug'];

     //make slug default instead of id
    
    /***
      public function getRouteKeyName(){
          return 'slug';
      }
        */
}
