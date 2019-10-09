<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    private $car;

    /**
     * -------------------
     * Cars constructor.
     * loads models
     * -------------------
     */

    public function __construct() {
        $this -> car  = new car();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title['title'] = 'Add Class';

        return view('school.Add.addClass', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        $this -> validate($data, [
            'name' => ['required', 'string', 'max:255']
        ]);

        $data = array(
            'name'      =>  $data['name']
        );

        $id = $this -> Car -> add($data);

        if($id > 0)
            return redirect('/Cars');
        else
            return redirect() -> back() -> with('error', 'Error! Please try again.') -> withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$id or $id < 1)
            return redirect() -> back();

        $data['title'] = 'Edit Car';
        $data['Car'] = $this -> Car -> get_Car($id);
        return view('school.Edit.editCar', $data);
    }

    public function edit_Cars($id, Request $data) {

        if(!$id or $id < 1)
            return redirect() -> back();

        $this -> validate($data, [
            'name'      =>  'required|min:1'
        ]);

        $data = array(
            'name'      =>  $data['name']
        );

        $where = array(
            'id'      =>  $id
        );

        $this -> Car -> edit_Cars($data, $where);

        return redirect('/Cars');

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$id or $id < 1)
            return redirect() -> back();

        $this -> Car -> delete_Car($id);
        return redirect() -> back() -> with('message', 'Car delete successfully.');
    }
}
