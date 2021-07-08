<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mountain;
use DateTime;
use DateTimeZone;

class MountainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mount = mountain::all();

        return view('mountain.list')->with('mount', $mount);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     */
    public function show()
    {
        // $date_start = date('l j F Y');
        // $date_end = date('l j F Y', strtotime("+9days"));

        // while ($date_start <= $date_end) {

        //     echo $date_start;

        //     $date_start = date('l j F Y', strtotime('+1 days', strtotime($date_start)));
        // }


        //mendapatkan tgl kemarin
        // $date_start = date("Y-m-d");
        // //mendapatkan tgl 30 hari kemarin
        // $date_nine = mktime(0, 0, 0, date("m"), date("d") + 9, date("Y"));
        // $future = date("Y-m-d", $date_nine);
        // $date_end = new DateTime($future, new DateTimeZone("Europe/London"));
        // //looping
        // do {
        //     echo $date_start;
        //     echo '<br>';
        //     $date_start->modify("+1 day");
        // } while ($date_start >= $date_end);

        return view('mountain.mount');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
