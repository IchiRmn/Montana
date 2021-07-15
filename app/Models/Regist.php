<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Regist extends Model
{

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
}
