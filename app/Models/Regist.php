<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Regist extends Model
{
    protected $fillable = [
        'regists_id'

    ];
    public static function regist()
    {
        $regists = DB::table('regists')
            ->join('members', 'regists.id', '=', 'members.regists_id')
            ->join('hikes', 'regists.hikes_id', '=', 'hikes.id')
            ->join('mountains', 'mountains.id', '=', 'hikes.mountains_id')
            ->select('*')
            ->get();
        return $regists;
    }

    public static function Code($request)
    {
        $kode = DB::table('regists')->max('id');
        $addNol = '';
        $addId = '';
        $kode = str_replace("PGJ", "", $kode);
        $kode = (int) $kode + 1;
        $incrementKode = $kode;

        if (strlen($kode) == 1) {
            $addNol = "000";
        } elseif (strlen($kode) == 2) {
            $addNol = "00";
        } elseif (strlen($kode == 3)) {
            $addNol = "0";
        }
        $idMounts = $request->input('idMount');

        $kodeBaru = "P" . $idMounts . $addNol . $incrementKode;
        return $kodeBaru;
    }
}
