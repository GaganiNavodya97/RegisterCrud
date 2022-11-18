<?php

namespace App\Http\Controllers;

use App\Models\UserReg;
use Illuminate\Http\Request;

class UserRegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = UserReg::all();
        return view ('user.index')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.createuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        UserReg::create($input);
        return redirect('user')->with('flash_message', 'User Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserReg  $userReg
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Contact::find($id);
        return view('user.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserReg  $userReg
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = UserReg::find($id);
        return view('user.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserReg  $userReg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $user = UserReg::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('user')->with('flash_message', 'User Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserReg  $userReg
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserReg::destroy($id);
        return redirect('user')->with('flash_message', 'User deleted!');
    }
}
