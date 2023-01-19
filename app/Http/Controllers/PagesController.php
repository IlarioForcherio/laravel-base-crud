<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        //$comics = config('comics');

        return view('pages.welcome');
    }
}
