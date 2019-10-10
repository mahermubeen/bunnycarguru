<?php

namespace App\Http\Controllers;

use App\Car;
use App\Battery;
use App\Oil;
use App\Tyre;
use App\Branch;

use DataTables;

use Illuminate\Http\Request;

class SearchByCarController extends Controller
{
    private $car;
    private $battery;
    private $oil;
    private $tyre;
    private $branch;

    /**
     * -------------------
     * Cars constructor.
     * loads models
     * -------------------
     */

    public function __construct()
    {
        $this->car = new Car();
        $this->battery = new Battery();
        $this->oil = new Oil();
        $this->tyre = new Tyre();
        $this->branch= new Branch();

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

    public function searchCar(Request $request){
        $search = $request -> get('search');

        $cars = Car::where('name', 'like', '%'. $search . '%')->get();

        return view('/searchByCar', compact('cars'));
    }

    public function addCar(Request $data)
    {
        $this -> validate($data, [
            'name' => ['required', 'string', 'max:255']
        ]);

        $data = array(
            'name'      =>  $data['name']
        );

        $id = $this -> car -> add($data);

        if($id > 0)
            return redirect('/searchByCar');
        else
            return redirect() -> back() -> with('error', 'Error! Please try again.') -> withInput();
    }

    public function servicesAndRepair($id)
    {
        if(!$id or $id < 1)
            return redirect() -> back();

        $data['car'] = $this->car-> get_car($id);
        $string = $data['car']->model;
        $data['models'] = explode(",", $string);

        $data['branches'] = $this->branch-> get_branches();
        $data['batteries'] = $this->battery-> get_batteries();
        $data['tyres'] = $this->tyre-> get_tyres();
        $data['oils']  = $this->oil-> get_oils();


        return view('services-and-repair', $data);
    }
}
