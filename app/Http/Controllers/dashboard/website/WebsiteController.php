<?php

namespace App\Http\Controllers\dashboard\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function showWebsitePage()
    {
        return view("dashboard.website.pages.index");
    }
}
