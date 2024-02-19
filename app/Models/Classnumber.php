<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classnumber extends Model
{
    use HasFactory;

        
  

   protected $fillable = [
    'id',
    'number',
   'description',
    'user_id',
    'classterm_id',
];

// Define the user relationship
public function user()
{
    return $this->belongsTo(User::class);

}
public function classterm()
{
    return $this->belongsTo(Classterm::class);
}
}
