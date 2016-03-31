<?php
namespace App\Http\Controllers;

use App\newRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class NewRequestController extends Controller {

  public function getDashboard() {
      $newRequests = newRequest::orderBy('created_at', 'desc')->get();

      return view('dashboard', ['newRequests' => $newRequests]);
  }

  public function postNewRequest(Request $request) {
    $this->validate($request, [
      'class' => 'required',
      'teacher' => 'required'
    ]);

    $newRequest = new newRequest();

    $newRequest->class = $request['class'];
    $newRequest->teacher = $request['teacher'];
    $newRequest->details = $request['details'];

    $message = "error";

    if ($request->user()->newRequests()->save($newRequest)) {
      $message = "success";
    }

    return redirect()->route('dashboard')->with(['message' => $message]);
  }

  public function getDeleteRequest($newRequest_id) {
    $newRequest = newRequest::where('id', $newRequest_id)->first();
    if (Auth::user() != $newRequest->user) {
      return redirect()->back();
    }
    $newRequest->delete();
    return redirect()->route('dashboard')->with(['deleteMessage' => 'Successfully Deleted!']);
  }

}
