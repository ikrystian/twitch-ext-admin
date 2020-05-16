<?php

namespace App\Http\Controllers;

use App\Gif;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request) {
      $image = new Gif;
      $image->code = request('code');
      $image->url = request('url');
      $image->save();

      return back();
    }
}
