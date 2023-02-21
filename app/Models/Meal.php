<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;


    protected $table='meals';
    public $timestamps=false;
    
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $fillable=[
        'name_meal',
        'calories_meal',
        'protein',
        'carb',
        'fat',
    ];
    public function compontent_meals(){
        return $this->hasMany(CompontentMeal::class,'meal_id');
    }

}
