<?php

namespace App\Http\Controllers\dashboard;

use App\Helpers\JWTToken;
use App\Http\Controllers\Controller;
use App\Models\dashboard\Admin;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboardPage(Request $request)
    {
        return view('dashboard.pages.index', [
            // "user" => Admin::where('id', $request->header('id'))->where('email', $request->header('email'))->first()
        ]);
    }


}
