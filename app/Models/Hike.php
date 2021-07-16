<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Hike extends Model
{
    protected $fillable = ['mountains_id', 'date_start', 'date_end'];

    public static function Code()
    {
        $code = DB::table('hikes')->max('id');
        $code = (int) $code + 1;
        $incrementKode = $code;

        return $incrementKode;
    }
}
