<?php

namespace App\Http\Controllers;


use App\Chocolate;
use App\Mail\UserAction;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

      $user = Auth::user();
      $action = "DELETE";

       Mail::to('admin@chocolate.it')->send(new UserAction($user, $chocolate, $action));

      return redirect() -> route('chocolate-index');
    }
}
