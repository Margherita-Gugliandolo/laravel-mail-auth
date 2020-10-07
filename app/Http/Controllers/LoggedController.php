<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chocolate;

class LoggedController extends Controller
{
    public function __construct(){
      $this -> middleware('auth');
    }

    public function edit($id){
      $chocolate = Chocolate::findOrFail($id);

      return view('chocolate-edit', compact('chocolate'));
    }

    public function update(Request $request, $id){

      $data = $request -> all();
      $chocolate = Chocolate::findOrFail($id);

      $chocolate -> update($data);

      return redirect() -> route('chocolate-show', $id);
    }

    public function delete($id){

      $chocolate = Chocolate::findOrFail($id);
      $chocolate -> delete();

      return redirect() -> route('chocolate-index');
    }
}
