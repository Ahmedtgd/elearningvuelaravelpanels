<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Lesson extends Model  implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'lesson_title',
        'lesson_content',
        'lesson_duration',
        'lesson_order',
        'video_title',
        'docx_file',
        'pdf_file',
        'image_files',
        'video_files',
        'lesson_course_id',
        'user_id',
    ];


    protected $casts = [
        'video_title'=> 'array',
        'image_files' => 'array',
        'video_files' => 'array',
        'docx_file'=> 'array',
        'pdf_file'=> 'array',

    ];



    public function course()
    {
        return $this->belongsTo(Course::class, 'lesson_course_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
