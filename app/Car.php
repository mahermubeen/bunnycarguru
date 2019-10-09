<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable     = ['name', 'search'];


    public function add($data) {
        $Car = Car::create($data);
        return $Car -> id;
    }

    public function get_cars() {
        return Car::all();
    }

    public function get_car($id) {
        return Car::find($id);
    }

    public function edit_Cars($data, $where) {
        return Car::where($where) -> update($data);
    }

    public function delete_Car($id) {
        Car::where('id', $id) -> delete();
    }




    public function batteries()
    {
        return $this->belongsToMany(Battery::class, 'car_batteries', 'car_id', 'battery_id') -> withTimestamps();
    }
}
