<?php

namespace App\Http\Controllers\homepage;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $packages = Package::where('package_status', 'active')->where('locale', session()->get('locale') ? session()->get('locale') : 'bn')->where('visibility', 'public')->get();

        foreach ($packages as $package) {
            $package->features = json_decode($package->features, true);
        }

        return view("homepage.pages.index",
            [
                "packages" => $packages
            ]
        );
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $search = trim($search);
        $length = strlen($search);
        if($length <= 5) {
            return redirect("https://hajj.gov.bd/agencies/{$search}");
        } else {
            return redirect("https://prp.pilgrimdb.org/web/pilgrim-search?q={$search}");
        }
        // A03987144
        // https://prp.pilgrimdb.org/web/pilgrim-search?q=A03987144
        // https://prp.pilgrimdb.org/web/pilgrim-search?q=3264119888

        // 0935 (4 length) or 934 (3 length)
        // https://hajj.gov.bd/agencies/0935
    }



    public function aboutUs()
    {
        return view("homepage.pages.about-us");
    }









    public function showPackage($slug)
    {
        $package = Package::where('slug', $slug)->first();

        if (!$package) {
            return redirect()->route('homepage.index');
        }

        $package->features = json_decode($package->features, true);
        return view("homepage.pages.package",
            [
                "package" => $package
            ]
        );
    }
}
