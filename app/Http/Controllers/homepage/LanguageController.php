<?php

namespace App\Http\Controllers\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switchLanguage($locale)
    {
        // if(array_key_exists($locale, config(key: "languages"))){
        //     session()->put("locale", $locale);
        // } else {
        //     session()->put("locale", config("app.fallback_locale"));
        // }

        if (array_key_exists($locale, config('languages'))) {
            session()->put('locale', $locale);
        }

        return redirect()->back();
    }
}
