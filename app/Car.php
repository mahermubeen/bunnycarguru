<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable     = ['name'];


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


    public function students()
    {
        return $this->belongsToMany(Student::class, 'Car_students', 'Car_id', 'student_id') -> withTimestamps();
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'Car_teachers', 'Car_id', 'teacher_id') -> withTimestamps();
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'Car_subjects', 'Car_id', 'subject_id') -> withTimestamps();
    }

    public function teachrs()
    {
        return $this -> hasMany(Teacher::class, 'Car_id', 'id');
    }
    public function studnts()
    {
        return $this -> hasMany(Student::class, 'Car_id', 'id');
    }
}
