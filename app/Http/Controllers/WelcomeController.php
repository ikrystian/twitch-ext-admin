<?php

namespace App\Http\Controllers;

use App\Gif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index() {
        $images = Gif::orderBy('id', 'DESC')->get();
        return view('welcome')->with('images', $images);
    }

    public function get($code) {
        $image = Gif::where('code', $code)->first();
        return $image;
    }
}
