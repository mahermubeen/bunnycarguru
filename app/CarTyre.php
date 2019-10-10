<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarTyre extends Model
{
    protected $guarded = ['updated_at', 'created_at'];

    public function assign($info) {

        CarBattery::create($info);
    }

    public function edit_carTyre($data, $where) {
        return Car::where($where) -> update($data);
    }

    public function delete_carTyre($tyre_id, $car_id)
    {
        CarBattery::where(['tyre_id' => $tyre_id, 'car_id' => $car_id])->delete();
    }
}
