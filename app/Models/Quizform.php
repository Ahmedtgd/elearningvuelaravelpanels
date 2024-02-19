<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Quizform extends Model  implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'id',
        'note',
        'title',
        'instructions',
        'docx_file',
        'pdf_file',
        'image_files',
        'video_files',
        'feedback',
        'quiz_results',
        'teacher_id',
        'student_id',
        'quiz_id',
        'question',
        'solve',
        'rightanswer',




    ];

    protected $casts = [
        'solve' => 'array',
        'question' => 'array',
        'image_files' => 'array',
        'video_files' => 'array',
        'docx_file'=> 'array',
        'pdf_file'=> 'array',
        'rightanswer'=> 'array',


    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class, 'quiz_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }






}
