<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regist;
use App\Models\Member;
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
        // $this->validate($request, [
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


        $name = $request->name;
        $email = $request->email;

        for ($i = 0; $i < count($name); $i++) {

            member::create([
                'regists_id' => $kode,
                'identity' => '05151524',
                'member_email' => $email[$i],
                'phone' => 'kerangfsaad',
                'member_name' => $name[$i],
                'birthdate' => '203262033',
                'gender' => 'male',
                'address' => 'kota jember',
            ]);
        }

        $idMounts = $request->idMount;
        $date_start = $request->dateStart;
        $date_end = $request->dateEnd;

        echo $date_start;

        // $quota0 = quota::where('quota_date', $date_[$i])->where('mount_id', $id);
        // if ($quota0->exists()) {
        //     foreach ($quota0->get() as $quota) {
        //         $qta[] = $quota->quota;
        //     }
        // } else {
        //     foreach ($mounts->get() as $mount) {
        //         $qta[] = $mount->quota;
        //     }
        //     // $qta[] = 300;
        // }

        // $data = [

        // ];

        // $new = [
        //     'regist_id' => "P10003",
        //     'identity' => $request->input('identityNumber'),
        //     'member_email' => $request->input('email'),
        //     'phone' => $request->input('phone'),
        //     'member_name' => $request->input('name'),
        //     'birthdate' => $request->input('birtdate'),
        //     'gender' => $request->input('gender'),   
        //     'address' => $request->input('address'),
        // ];

        // $names = '';
        // $emails = '';


        // member::insert(array $names);
        // $baru = array();
        // // $new = $request->all();


        // foreach ($new as $nama) {
        //     $baru[] = $nama;
        // }
        // $new = array();
        // for ($i = 0; $i < 2; $i++) {
        //     $new[] = $no;

        // $admin_model = new AdminLoginModel();



        echo $kode;

        return view('mountain.draft');
    }
}
