<?php

namespace App\Http\Controllers;

use App\Number;
use App\City;
use DB;
use Session;
use Illuminate\Http\Request;

class numberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();

        return view('addNumber')->with('cities', $cities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $NUMBER = new Number;

        $NUMBER->number = $request->number;
        $NUMBER->city_id = $request->city_id;

        $NUMBER->save();

        return redirect()->back()->with('success','Number added successfuly');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function show(Number $number)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function edit(Number $number)
    {
        return view ('');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Number $number)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function destroy(Number $number)
    {
        $number->delete();

        return redirect()->back()->with('success','Number successfully Deleted');
    }
}
