<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offering extends Model
{
   protected $table = 'sadaka';

   protected $primarykey = 'id';

   protected $fillable = ['date','amount','chapel'];
    
   use HasFactory;
}
