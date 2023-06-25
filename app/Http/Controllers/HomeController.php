<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AboutMe;

class HomeController extends Controller
{
    public function index () {
      try {
        $aboutMe = AboutMe::firstOrFail();
        return view('front.index', ['aboutMe' => $aboutMe]);
      } catch (\Exception $e) {
        echo $e->getMessage();
        // return view('front.index', ['error' => $e->getMessage()]);
      }
    }
}
