<?php

namespace App\Http\Controllers\dashboard;

use App\Helper\JWTToken;
use App\Http\Controllers\Controller;
use App\Models\dashboard\Admin;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboardPage()
    {
        return view('dashboard.pages.index');
    }

    public function adminInfo(Request $request)
    {
        $signInToken =  $request->cookie('signInToken');
        $result = JWTToken::decodeToken($signInToken);
        $adminId = $result->id;
        $adminEmail = $result->email;
        $admin = Admin::where('id', $adminId)->where('email', $adminEmail)->first();

        return response()->json([
            'status' => 'success',
            'message' => 'Admin information fetched successfully.',
            'data' => $admin
        ], 200);
    }
}
