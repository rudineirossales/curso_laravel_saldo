<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Http\Controllers\Controller;



class SiteController extends Controller
{
  public function index(){


   return view('site.home.index');



  }
}
