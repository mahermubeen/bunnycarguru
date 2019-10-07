<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class SearchByCarController extends Controller
{
    private $car;

    /**
     * -------------------
     * Cars constructor.
     * loads models
     * -------------------
     */

    public function __construct()
    {
        $this->car = new Car();

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function searchByCar()
    {
        $cars = $this -> car -> get_cars();

        return view('searchByCar', ['cars' => $cars]);
    }

    public function servicesAndRepair($id)
    {
        if(!$id or $id < 1)
            return redirect() -> back();

        $car = $this -> car -> get_car($id);

        return view('services-and-repair', ['car' => $car]);
    }
}
