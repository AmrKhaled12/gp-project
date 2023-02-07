<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutData extends Model
{
    use HasFactory;
    protected $table='workout_data';
    protected $fillable = [
        'weight',
        'height',
        'gender',
        'activity rate',
        'exercise level	',
        'body fat',
        'user_id'
    ];

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

}
