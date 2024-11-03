<?php

use App\Models\dashboard\Admin;

if (!function_exists('adminInfo')) {
    function adminInfo()
    {
        $admin = Admin::where('id', request()->header('id'))
            ->where('email', request()->header('email'))
            ->first();

        return $admin;
    }
}
