<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classterm extends Model
{
    use HasFactory;
    
  

   protected $fillable = [
    'id',
    'name',
    'description',
    'user_id',
    'educationalstage_id',
];

// Define the user relationship
public function user()
{
    return $this->belongsTo(User::class);

}
public function educationalstage()
{
    return $this->belongsTo(Educationalstage::class);
}

}
