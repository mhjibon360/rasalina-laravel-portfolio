<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\ClientFeedback;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ClientFeedbackController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $allfeedback = ClientFeedback::latest()->get();
    return view('backend.pages.client-feedback.all-feedback', compact('allfeedback'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('backend.pages.client-feedback.add-feedback');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    ClientFeedback::insert([
      'name' => $request->name,
      'comment' => $request->comment,
      'created_at' => Carbon::now(),
    ]);
    Toastr::success("Client Feedback Added Success");
    return redirect()->route('feedback.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $client = ClientFeedback::where('id', $id)->first();
    if ($client->status == '1') {
      $client->update([
        'status' => 0,
      ]);
      Toastr::success("Client Feedback Inaactive Success");
      return redirect()->route('feedback.index');
    } else {
      $client->update([
        'status' => 1,
      ]);
      Toastr::success("Client Feedback Active Success");
      return redirect()->route('feedback.index');
    }
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $client = ClientFeedback::where('id', $id)->first();
    return view('backend.pages.client-feedback.edit-feedback', compact('client'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    ClientFeedback::where('id', $id)->update([
      'name' => $request->name,
      'comment' => $request->comment,
      'updated_at' => Carbon::now(),
    ]);
    Toastr::success("Client Feedback Update Success");
    return redirect()->route('feedback.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    ClientFeedback::where('id', $id)->delete();
    Toastr::success("Client Feedback Delete Success");
    return redirect()->route('feedback.index');
  }
}
