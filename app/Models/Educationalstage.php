<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educationalstage extends Model
{
    use HasFactory;



    protected $fillable = [
        'id',
        'stage_name',
        'description',
        'order',
        'status',
        'image',
        'user_id',
        'category_id',
    ];

    // Define the user relationship
    public function user()
    {
        return $this->belongsTo(User::class);

    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
