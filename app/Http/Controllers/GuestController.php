<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chocolate;

class GuestController extends Controller
{
    public function index(){
      $chocolates = Chocolate::all();
      return view('chocolate-index', compact('chocolates'));
    }

    public function show($id){

      $chocolate = Chocolate::findOrFail($id);
      return view('chocolate-show', compact('chocolate'));
    }
}
