<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Regist;
use App\Models\Member;
use App\Models\Mountain;
use App\Models\Hike;

class CrudRegistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     */
    public function show($id)
    {
        $hike = Regist::result()->where('registId', $id);
        $member = Member::where('regists_id', $id)->get();

        return view('admin.detailsRegist')->with('hike', $hike)->with('member', $member);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // $registId = $request->registId;
        // $mountId = $request->mountId;

        $hike = Regist::result()->where('registId', $id);
        $member = Member::where('regists_id', $id)->get();

        foreach ($hike as $hikes) {
            // $mountId = $hikes->mountains_id;

            $data = [
                'registId' => $hikes->registId,
                'userName' => $hikes->name,
                'userEmail' => $hikes->email,
                'dest' => $hikes->mountain_name,
                'dateStart' => $hikes->date_start,
                'dateEnd' => $hikes->date_end,
                'payment' => $hikes->payment,
                'status' => $hikes->status,
            ];
        }

        // $mount = Mountain::where('id', $mountId)->get();

        // foreach ($mount as $mount) {
        //     $count = $mount->days;
        // }

        // $date_start = date('Y-m-d', strtotime("+2days"));
        // $date_start1 = date('Y-m-d', strtotime("+3days"));
        // $date_end = date('Y-m-d', strtotime("+11days"));
        // $date_end1 = date('Y-m-d', strtotime($date_start1 . " +{$count} days"));
        // $date_ = array();
        // $date1_ = array();

        // //looping for date_start
        // while ($date_start <= $date_end) {

        //     $date_start = date('Y-m-d', strtotime('+1 days', strtotime($date_start)));
        //     $date_[] = $date_start;
        // }
        // //End looping

        // //looping for date_start
        // while ($date_start1 < $date_end1) {

        //     $date_start1 = date('Y-m-d', strtotime('+1 days', strtotime($date_start1)));
        //     $date1_[] = $date_start1;
        // }
        // //End looping

        return view('admin.editRegist', $data)->with('hike', $hike)->with('member', $member);
    }

    /**
     * Update the specified resource in storage.
     *
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // print $request->payment;
        //Update Regist
        $regist = Regist::where('registId', $id);
        $data = [
            'payment' => $request->payment,
            'status' => $request->status
        ];

        $regist->update($data);
        //End

        //Update member
        $member = $request->input('member');

        foreach ($member as $row) {

            $member = Member::find($row['id']);
            $member->identity = $row['identity'];
            $member->member_email = $row['email'];
            $member->phone = $row['phone_number'];
            $member->member_name = $row['name'];
            $member->birthdate = $row['birthdate'];
            $member->gender = $row['gender'];
            $member->address = $row['address'];
            $member->save();
        }
        //End

        return "done";
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
