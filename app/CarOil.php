<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarOil extends Model
{
    protected $guarded = ['updated_at', 'created_at'];

    public function assign($info) {

        CarBattery::create($info);
    }

    public function edit_carOil($data, $where) {
        return Car::where($where) -> update($data);
    }

    public function delete_carOil($oil_id, $car_id)
    {
        CarBattery::where(['oil_id' => $oil_id, 'car_id' => $car_id])->delete();
    }
}
