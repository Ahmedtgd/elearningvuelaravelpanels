<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

   

    protected $fillable = [
        'book_id',
        'book_title',
        'book_author',
        'book_description',
        'book_price',
        'book_rating',
        'book_publication_date',
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
