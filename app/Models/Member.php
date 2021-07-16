<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'regists_id',
        'identity',
        'member_email',
        'phone',
        'member_name',
        'birtdate',
        'gender',
        'address',
    ];
}
