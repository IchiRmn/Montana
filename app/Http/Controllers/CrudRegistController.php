<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Regist;
use App\Models\Member;
use App\Models\Mountain;
use App\Models\Hike;
use App\Models\User;
use App\Models\Quota;

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
        $kode = Regist::Code($request);
        $regist_model = new Regist();
        $regist_model->Code($request);

        $hikes_id = Hike::Code();

        $idMounts = $request->idMount;
        $member = $request->member;
        $date_start = $request->date_start;

        $date_end = $request->date_end;
        $payment = $request->payment;

        $mountain = Mountain::where('id', $idMounts)->get();

        $identity = $request->identity;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $birth = $request->birthdate;
        $gender = $request->gender;
        $address = $request->address;

        //Insert Regist Table
        Regist::create([
            'registId' => $kode,
            'users_id' => $request->registrant,
            'hikes_id' => $hikes_id,
            'payment' => $payment,
        ]);
        //End

        //Insert Hikes Table
        Hike::create([
            'mountains_id' => $idMounts,
            'date_start' => $date_start,
            'date_end' => $date_end,
        ]);
        //End

        $identitys = [];
        $names = [];
        $emails = [];
        $phones = [];
        $births = [];
        $genders = [];
        $addresses = [];

        // Looping Member Data
        for ($i = 0; $i < count($name); $i++) {

            member::create([
                'regists_id' => $kode,
                'identity' => $identity[$i],
                'member_email' => $email[$i],
                'phone' => $phone[$i],
                'member_name' => $name[$i],
                'birthdate' => $birth[$i],
                'gender' =>  $gender[$i],
                'address' => $address[$i],
            ]);

            $identitys[] = $identity[$i];
            $names[] = $name[$i];
            $emails[] = $email[$i];
            $phones[] = $phone[$i];
            $births[] = $birth[$i];
            $genders[] = $gender[$i];
            $addresses[] = $address[$i];
        }
        // End Looping

        //End

        //Update Quuta
        $quota = mountain::where('id', $idMounts)->get();
        $quota0 = quota::where('quota_date', $date_start)->where('mount_id', $idMounts);

        if ($quota0->exists()) {
            foreach ($quota0->get() as $quota0) {

                $new_quota = $quota0->quota - $member;
            }
            quota::where('quota_date', $date_start)->update(['quota' => $new_quota]);
        } else {

            foreach ($quota as $quota) {

                $new_quota1 = $quota->quota - $member;
            }
            quota::create([
                'mount_id' => $idMounts,
                'quota' => $new_quota1,
                'quota_date' => $date_start,
            ]);
        }
        //End
        return redirect('/admin')->with(['success' => 'Input data successfully!']);
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

        return redirect('/admin')->with(['success' => 'Data updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $regist = Regist::where('registId', $id);
        $hikeId = [];
        foreach ($regist->get() as $regist) {
            $hikeId[] = $regist->hikes_id;
        }
        //Delete Regist
        $regist->delete();
        //End

        //Delete Hike
        $hike = Hike::where('id', $hikeId);
        $hike->delete();
        //End

        //Delete Member
        $member = Member::where('regists_id', $id);
        foreach ($member->get() as $m) {
            $m->delete();
        }
        //End
        return redirect('/admin')->with(['success' => 'Data deleted successfully!']);
    }

    public function input_regist_first()
    {
        $user = User::all();
        $mount = Mountain::all();

        return view('admin.input-regist-first')->with('user', $user)->with('mount', $mount);
    }
    public function input_regist_second(Request $request)
    {
        $mount = Mountain::where('id', $request->destination)->get();

        $date_start = date('Y-m-d', strtotime("+2days"));
        $date_end = date('Y-m-d', strtotime("+11days"));
        $date_ = array();

        //looping for date_start
        while ($date_start <= $date_end) {

            $date_start = date('Y-m-d', strtotime('+1 days', strtotime($date_start)));
            $date_[] = $date_start;
        }
        //End looping

        $data = [
            'registrant' => $request->registrant,
            'destination' => $request->destination,
            'payment' => $request->payment,
        ];

        return view('admin.input-regist-second', $data)->with('date_start', $date_)->with('mount', $mount);
    }

    public function input_regist_third(Request $request)
    {

        $mount = Mountain::where('id', $request->destination)->get();

        foreach ($mount as $mount) {
            $count = $mount->days;
        }

        $date_start = $request->date_start;

        $date_end = date('Y-m-d', strtotime($date_start . " +{$count} days"));
        $date_end1 = date('Y-m-d', strtotime($date_end . "-1days"));
        $date1_ = array();
        //looping for date_end
        while ($date_start < $date_end1) {

            $date_start = date('Y-m-d', strtotime('+1 days', strtotime($date_start)));
            $date1_[] = $date_start;
        }
        //End looping

        $data = [
            'registrant' => $request->registrant,
            'destination' => $request->destination,
            'payment' => $request->payment,
            'date_start' => $request->date_start,
            'member' => $request->member,
        ];
        return view('admin.input-regist-third', $data)->with('date_end', $date1_);
    }
}
