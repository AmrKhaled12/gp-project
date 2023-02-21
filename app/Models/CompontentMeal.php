<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompontentMeal extends Model
{
    use HasFactory;

    protected $table='compontent_meals';
    public $timestamps=false;
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $fillable=[
        'compontent_meals',
        'measruing_unit',
        'quantity',
        'weight',
        'meal_id',
        'protein',
        'carb',
        'fat',
        'calories'
    ];
    public function meals(){
        return $this->belongsTo(Meal::class,'meal_id');
    }

}
