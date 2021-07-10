<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use App\Models\Mountain;
use App\Models\Quota;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
        // looping for date
        $date_start = date('Y-m-d', strtotime("-1days"));
        $date_end = date('Y-m-d', strtotime("+8days"));
        $date_ = array();

        while ($date_start <= $date_end) {

            $date_start = date('Y-m-d', strtotime(
                '+1 days',
                strtotime($date_start)
            ));
            $date_[] = $date_start;
        }
        // endlooping
        
        // print_r($date_);
        $qta = array();

        // looping for quota
        for ($i = 0; $i <= 9; $i++) {
            // $mount = mountain::where('id', $id);
            $quota0 = quota::where('quota_date', $date_[$i]);
            if ($quota0->exists()) {
                foreach ($quota0->get() as $quota) {
                    $qta[] = $quota->quota;
                }
            } else {
                // foreach ($mount->get() as $mount) {
                //     $a = $mount->quota;
                // }
                $qta[] = 300;
            }
        }
        // endlooping

        // print_r($qta);

        // $new_date = [
        //     'date_' => $date_,
        //     'qta' => $qta
        // ];

        return view('mountain.mount')->with('dates', $date_)->with('qta', $qta);
    }

// foreach ($quota as $q) {
//     $data['q'] = $quota->quota;
// }

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
