<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['name','founded','description','image_path','user_id'];
   public function CarModels()
   {
       return $this->hasMany(CarModel::class);
   }
   public function engines(){
       return $this->hasManyThrough(Engine::class,CarModel::class,'car_id','model_id');
   }
   public function productionDate(){
    return $this->hasOneThrough(CarProductionDate::class,CarModel::class,'car_id','model_id');
}
public function products(){
  return  $this->belongsToMany(Product::class);
}
}
