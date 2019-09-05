<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    private $user;

    /**
     * -------------------
     * Grades constructor.
     * loads models
     * -------------------
     */

    public function __construct() {
        $this -> user = new User();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title['title'] = 'Users';
        $title['small'] = 'All Users';
        $title['users'] = $this -> user -> get_users();
        return view('school.users', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title['title'] = 'Add User';

        return view('school.Add.addUsers', $title);
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
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $data = array(
            'name'      =>  $data['name'],
            'role'      =>  $data['role'],
            'email'      =>  $data['email'],
            'password' => Hash::make($data['password']),

        );

        $id = $this -> user -> add($data);

        if($id > 0)
            return redirect('/users');
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

        $data['title'] = 'Edit Grade';
        $data['user'] = $this -> user -> get_user($id);
        return view('school.Edit.editUser', $data);
    }

    public function edit_users($id, Request $data) {

        if(!$id or $id < 1)
            return redirect() -> back();

        $this -> validate($data, [
            'name'      =>  'required|min:1'
        ]);

        $data = array(
            'name'      =>  $data['name'],
            'role'      =>  $data['role'],
            'email'      =>  $data['email']
        );

        $where = array(
            'id'      =>  $id
        );

        $this -> user -> edit_users($data, $where);

        return redirect('/users');

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

        $this -> user -> delete_user($id);
        return redirect() -> back() -> with('message', 'User delete successfully.');
    }
}
