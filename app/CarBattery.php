<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBattery extends Model
{
    protected $guarded = ['updated_at', 'created_at'];

    public function assign($info) {

        CarBattery::create($info);
    }

    public function edit_cars($data, $where) {
        return Car::where($where) -> update($data);
    }

    public function deleteCarBattery($battery_id, $car_id) {
        CarBattery::where(['battery_id'   => $battery_id, 'car_id' => $car_id] ) -> delete();
    }
}
