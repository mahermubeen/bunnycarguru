<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Battery extends Model
{
    public function add($data) {
        $Battery = Battery::create($data);
        return $Battery -> id;
    }

    public function get_batteries() {
        return Battery::all();
    }

    public function get_battery($id) {
        return Battery::find($id);
    }

    public function edit_batteries($data, $where) {
        return Battery::where($where) -> update($data);
    }

    public function delete_car($id) {
        Battery::where('id', $id) -> delete();
    }



    public function cars()
    {
        return $this->belongsToMany(Car::class, 'car_batteries', 'battery_id', 'car_id') -> withTimestamps();
    }
}
