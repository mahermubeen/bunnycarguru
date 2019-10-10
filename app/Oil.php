<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Oil extends Model
{
    public function add($data) {
        $oil = Oil::create($data);
        return $oil -> id;
    }

    public function get_oils() {
        return Oil::all();
    }

    public function get_oil($id) {
        return Oil::find($id);
    }

    public function edit_oils($data, $where) {
        return Oil::where($where) -> update($data);
    }

    public function delete_oil($id) {
        Oil::where('id', $id) -> delete();
    }



    public function cars()
    {
        return $this->belongsToMany(Car::class, 'car_oils', 'oil_id', 'car_id') -> withTimestamps();
    }
}
