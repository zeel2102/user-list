<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Goalscorer;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Display All Data

        $users = DB::select('select * from users');
        return view('user.display',['users'=>$users]);
    }

    public function add()
    {
        // Display All Data

        $tables = DB::select('select * from users');
        return view('user.add',['tables'=>$tables]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create Form
        return view("user.add");  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     
        // Insert Form Data
        $user = new User();
        // dd($request->all());

        $user->id = $request->user_id;
        $user->name = $request->name;


        $goalscorer= new goalscorer();

        $goalscorer->fk_user_id = $user->id;
        $goalscorer->name = $user->name;
        $goalscorer->address=$request->get('address');
        $goalscorer->city=$request->get('city');
        $goalscorer->state=$request->get('state');
        $goalscorer->zip_code=$request->get('zip_code');
        
        $goalscorer->save();
        return redirect('/user/display');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Display particular(Single) Form Data
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Update form 
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
        // Update record
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete data
    }
}
