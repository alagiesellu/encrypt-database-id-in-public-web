<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Date;

class Fun
{
    public static function encrypt($id)
    {
        $auth = Auth::user()->id;
        $date = Date::now()->toDateString();
        $box = $id.'|'.$auth.'|'.$date;

        return Crypt::encrypt($box);
    }

    public static function decrypt($id)
    {

    }
}
