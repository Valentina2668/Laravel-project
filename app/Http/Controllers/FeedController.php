<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;

class FeedController extends Controller
{
    public function getIndex()
    {
        $feeds = Feed::orderBy('id', 'DESC')->limit(100)->get();
        return view('feed', compact('feeds'));
    }
}
