<?php

namespace App\Http\Controllers;

use App\Gif;
use App\Viewer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Restaurant;

class WelcomeController extends Controller
{
    public function index() {
        $images = Gif::orderBy('id', 'DESC')->get();
        return view('welcome')->with('images', $images);
    }

    public function getAll() {
      $images = Gif::select('code', 'url')->get();
      return $images;
    }

    public function get($code) {
        $image = Gif::where('code', $code)->first();
        return $image;
    }

    public function getUsers() {
      $viewers = Viewer::all();
      return $viewers;
    }

    public function getAllRestaurant() {
      return Restaurant::all();
    }
 
    public function getRestaurantInfo($restaurantId) {
      $restaurant = Restaurant::where('takeaway_id', $restaurantId)->first();
      return $restaurant;
    }
}
