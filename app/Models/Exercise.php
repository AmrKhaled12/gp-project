<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $table = 'exercises';
    public $timestamps = false;

    protected $fillable = [
        'Exercise_Name',
        'Exercise_Details',
        'Exercise_Place'
    ];

    public function muscle()
    {
        return $this->hasMany(Muscle::class, 'Exercise_id');
    }
}
