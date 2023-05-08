<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muscle extends Model
{
    use HasFactory;

    protected $table = 'muscles';
    public $timestamps = false;

    protected $fillable = [
        'Muscle_Name',
        'Muscle_Details',
        'Muscle_Duration',
        'Muscle_Video',
    ];

    public function exercise()
    {
        return $this->belongsTo(Exercise::class, 'Exercise_id');
    }
}
