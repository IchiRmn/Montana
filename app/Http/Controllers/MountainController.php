<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use App\Models\Mountain;
use App\Models\Quota;
use App\Models\Regist;
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

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function regist(Request $request)
    {

        $member = $request->member;
        $date = $request->input('date');
        $mountainId = $request->input('mountainId');

        $mount = mountain::where('id', $mountainId)->get();

        foreach ($mount as $mount) {
            $data['id'] = $mount->id;
            $data['name'] = $mount->mountain_name;
            $data['img'] = $mount->img;
            $count = $mount->days;
        }

        // // // looping for date
        $date_start = $date;
        $date_end = date('Y-m-d', strtotime($date_start . " +{$count} days"));
        $date_end1 = date('Y-m-d', strtotime($date_end . "-1days"));
        $date_ = array();

        while ($date_start < $date_end1) {

            $date_start = date('Y-m-d', strtotime('+1 days', strtotime($date_start)));
            $date_[] = $date_start;
        }
        // // // endlooping

        return view('mountain.regist', $data)->with('mount', $mount)->with('member', $member)->with('date_', $date_)->with('date', $date);
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
    public function show($id)
    {
        $selectMountain = mountain::where('id', $id)->get();

        //looping for date
        $date_start = date('Y-m-d', strtotime("+2days"));
        $date_end = date('Y-m-d', strtotime("+11days"));
        $date_ = array();

        while ($date_start <= $date_end) {

            $date_start = date('Y-m-d', strtotime('+1 days', strtotime($date_start)));
            $date_[] = $date_start;
        }
        //endlooping

        // print_r($date_);
        // print $date_end;
        // print $date_;
        $qta = array();

        //looping for quota
        for ($i = 0; $i <= 9; $i++) {
            $mounts = mountain::where('id', $id);
            $quota0 = quota::where('quota_date', $date_[$i])->where('mount_id', $id);
            if ($quota0->exists()) {
                foreach ($quota0->get() as $quota) {
                    $qta[] = $quota->quota;
                }
            } else {
                foreach ($mounts->get() as $mount) {
                    $qta[] = $mount->quota;
                }
                // $qta[] = 300;
            }
        }
        //endlooping

        //print_r($qta);

        return view('mountain.mount')->with('selectMountain', $selectMountain)->with('dates', $date_)->with('qta', $qta);
    }

    public function result($id)
    {
        $regist = Regist::result()->where('users_id', $id);
        return view('mountain.result')->with('regist', $regist);
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
