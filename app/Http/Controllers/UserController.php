<?php
namespace App\Http\Controllers;

use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class UserController extends Controller {

  public function postSignUp(Request $request) {
    $this->validate($request, [
      'email' => 'required|email|unique:users',
      'first_name' => 'required|max:120',
      'last_name' => 'required|max:120',
      'password' => 'required|min:4'
    ]);

    $first_name = $request['first_name'];
    $last_name = $request['last_name'];
    $email = $request['email'];
    $password = bcrypt ($request['password']);


    $user = new User();

    $user->first_name = $first_name;
    $user->last_name = $last_name;
    $user->email = $email;
    $user->password = $password;

    $user->save();

    Auth::login($user);

    return redirect()->route('dashboard');
  }

  public function postSignIn(Request $request) {
    $this->validate($request, [
      'email' => 'required',
      'password' => 'required'
    ]);

    if (Auth::attempt([
      'email' => $request['email'],
      'password' => $request['password']
      ])) {
      return redirect()->route('dashboard');
    }
    return redirect()->back();
  }

  public function getSignOut (Request $request) {
    Auth::logout();
    return redirect()->route('home');
  }


}
