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

        $tanggal1 = date('Y-m-d', strtotime("-1days"));
        $tanggal2 = date('Y-m-d', strtotime("+8days"));
        $tanggal_baru = array();

        while ($tanggal1 <= $tanggal2) {

            $tanggal1 = date('Y-m-d', strtotime(
                '+1 days',
                strtotime($tanggal1)
            ));
            $tanggal_baru[] = $tanggal1;
        }
        // print_r($tanggal_baru);
        $qta = array();
        for ($i = 0; $i <= 9; $i++) {
            // $mount = mountain::where('id', $id);
            $quota0 = quota::where('quota_date', $tanggal_baru[$i]);
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
        print_r($qta);
        // looping 1

        // endlooping 1

        // // // looping 2
        // $b = 0;
        // // $mount = mountain::where('id', $id);
        // $quota1 = quota::where('quota_date', $tanggal_baru[1]);
        // if ($quota1->exists()) {
        //     foreach ($quota1->get() as $quota) {
        //         $b = $quota->quota;
        //     }
        // } else {
        //     // foreach ($mount->get() as $mount) {
        //     //     $b = $mount->quota;
        //     // }
        // }
        // // // endlooping 2

        // // // looping 3
        // $c = 0;
        // // $mount = mountain::where('id', $id);
        // $quota2 = quota::where('quota_date', $tanggal_baru[2]);
        // if ($quota2->exists()) {
        //     foreach ($quota2->get() as $quota) {
        //         $c = $quota->quota;
        //     }
        // } else {
        //     // foreach ($mount->get() as $mount) {
        //     //     $c = $mount->quota;
        //     // }
        // }
        // // // endlooping 3

        // // // looping 4
        // $d = 0;
        // // $mount = mountain::where('id', $id);
        // $quota3 = quota::where('quota_date', $tanggal_baru[3]);
        // if ($quota3->exists()) {
        //     foreach ($quota3->get() as $quota) {
        //         $d = $quota->quota;
        //     }
        // } else {
        //     // foreach ($mount->get() as $mount) {
        //     //     $d = $mount->quota;
        //     // }
        // }
        // // // endlooping 4

        return view('mountain.mount')->with('tgl_baru', $tanggal_baru);
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
