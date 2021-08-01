<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Regist extends Model
{
    protected $fillable = ['registId', 'users_id', 'hikes_id', 'payment'];
    
    public static function regist()
    {
        $regists = DB::table('regists')
            ->join('users', 'regists.users_id', '=', 'users.id')
            ->join('members', 'regists.registId', '=', 'members.regists_id')
            ->join('hikes', 'regists.hikes_id', '=', 'hikes.id')
            ->join('mountains', 'mountains.id', '=', 'hikes.mountains_id')
            ->select('*')
            ->get();
        return $regists;
    }

    public static function Code($request)
    {
        $idMounts = $request->input('idMount');

        $trace = "P" . $idMounts;

        $code = DB::table('regists')->select('registId')->where(DB::raw('LEFT(`registId`, 2)'), $trace)->max(DB::raw('RIGHT(`registId`, 4)'));
        $addZero = '';
        $code = str_replace("PGJ", "", $code);
        $code = (int) $code + 1;
        $incrementKode = $code;

        if (strlen($code) == 1) {
            $addZero = "000";
        } elseif (strlen($code) == 2) {
            $addZero = "00";
        } elseif (strlen($code == 3)) {
            $addZero = "0";
        }

        $newCode = "P" . $idMounts . $addZero . $incrementKode;
        return $newCode;
    }
}
