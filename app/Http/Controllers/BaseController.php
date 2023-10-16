<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintext;

class BaseController extends Controller
{
    public function getIndex($url = null)
    {
        $maintext = Maintext::where('url', $url)->first();
        return view('maintext', compact('maintext'));

    }
}