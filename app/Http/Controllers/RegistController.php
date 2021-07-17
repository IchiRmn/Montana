<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regist;
use App\Models\Member;
use App\Models\Mountain;
use App\Models\Quota;
use App\Models\Hike;
use Illuminate\Support\Facades\Auth;
use PDF;
use Validator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class RegistController extends Controller
{
    public function index()
    {
        $regists = regist::regist();
        foreach ($regists as $test) {
            $nama[] = $test->member_name;
        }

        return $nama;
    }

    public function input(Request $request)
    {
        // $request->validate([
        //     'identityNumber'     => 'required|string',
        //     'email' => 'required|string|email',
        //     'phone' => 'required|string',
        //     'name' => 'required|string',
        //     'birthdate' => 'required|string',
        //     'gender' => 'required|string',
        //     'address' => 'required|string|min:8'
        // ]);

        $kode = Regist::Code($request);
        $regist_model = new Regist();
        $regist_model->Code($request);

        $userId = Auth::id();
        $hikes_id = Hike::Code();

        $idMounts = $request->idMount;
        $date_start = $request->dateStart;
        $date_end = $request->dateEnd;
        $member = $request->member;
        
        $name = $request->name;
        $email = $request->email;
        $payment = $request->payment;

        //Insert Regist Table
        Regist::create([
            'registId' => $kode,
            'users_id' => $userId,
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
        $names = [];
        $emails = [];
        // Looping Insert Member
        for ($i = 0; $i < count($name); $i++) {

            member::create([
                'regists_id' => 'P10002',
                'identity' => '05151524',
                'member_email' => '@gmail.com',
                'phone' => 'kerangfsaad',
                'member_name' => 'nama',
                'birthdate' => '203262033',
                'gender' => 'male',
                'address' => 'kota jember',
            ]);

            $names[] = $name[$i];
            $emails[] = $email[$i];
        }
        // End Looping

        //Insert Hike Table

        $data = [
            'name' => $names,
            'email' => $emails,
        ];

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
        //Update Quota

        return view('mountain.draft', $data);
    }

    public function print_pdf()
    {

        $pdf = PDF::loadview('output.registration');
        return $pdf->stream();
    }
}
