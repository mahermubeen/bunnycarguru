<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tyre extends Model
{
    public function add($data) {
        $tyre = Tyre::create($data);
        return $tyre -> id;
    }

    public function get_tyres() {
        return Tyre::all();
    }

    public function get_tyre($id) {
        return Tyre::find($id);
    }

    public function edit_tyres($data, $where) {
        return Tyre::where($where) -> update($data);
    }

    public function delete_tyre($id) {
        Tyre::where('id', $id) -> delete();
    }

    public function carss()
    {
        return $this->hasMany(Car::class, 'car_id', 'id');
    }

    public function cars()
    {
        return $this->belongsToMany(Car::class, 'car_tyres', 'tyre_id', 'car_id') -> withTimestamps();
    }
}
