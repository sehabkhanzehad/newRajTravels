<?php

namespace App\Http\Controllers\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view("homepage.pages.index");
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $search = trim($search);
        $length = strlen($search);
        if($length <= 5) {
            // how to return in new tab
            return redirect("https://hajj.gov.bd/agencies/{$search}");
            // echo "agency {$search}={$length}";
        } else {
            return redirect("https://prp.pilgrimdb.org/web/pilgrim-search?q={$search}");
            // echo "pilgrim {$search}={$length}";
        }

        // if ($length <= 5) {
        //     return redirect("https://hajj.gov.bd/agencies/{$search}");        
        // } else {
        // }




        // A03987144
        // https://prp.pilgrimdb.org/web/pilgrim-search?q=A03987144
        // https://prp.pilgrimdb.org/web/pilgrim-search?q=3264119888

        // 0935 (4 length) or 934 (3 length)
        // https://hajj.gov.bd/agencies/0935


        // if length is 3 or 5 then go to agencies/{$search }
        // if length is 10 then go to ={$search}


    }
}
