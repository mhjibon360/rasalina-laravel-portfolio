<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Working;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WorkingController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $allWork = Working::latest()->get();
    return view('backend.pages.work-process.all-work', compact('allWork'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('backend.pages.work-process.add-work');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // store working image icon path
    $icon = $request->file('icon');
    $name = hexdec(uniqid()) . '.' . $icon->getClientOriginalExtension();
    $url = "upload/working/" . $name;
    $icon->move(public_path("upload/working/"), $name);

    //store data in data
    // d	small_title	title	details	icon	status	created_at	updated_at	
    Working::insert([
      'small_title' => $request->small_title,
      'title' => $request->title,
      'details' => $request->details,
      'icon' => $url,
      'created_at' => Carbon::now(),
    ]);
    Toastr::success("Working Proces Item Created Success");
    return redirect()->route('working.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $work = Working::where('id', $id)->first();
    if ($work->status == '1') {
      $work->update([
        'status' => 0,
      ]);
      Toastr::warning("Working-Process Deactive Success");
      return redirect()->back();
    } else {
      $work->update([
        'status' => 1,
      ]);
      Toastr::info("Working-Process Active Success");
      return redirect()->back();
    }
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $work = Working::where('id', $id)->first();
    return view('backend.pages.work-process.edit-work', compact('work'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    if ($request->file('icon')) {
      // store working image icon path
      $icon = $request->file('icon');
      $name = hexdec(uniqid()) . '.' . $icon->getClientOriginalExtension();
      $url = "upload/working/" . $name;
      $icon->move(public_path("upload/working/"), $name);

      // unlink old icon image
      $work = Working::where('id', $id)->first();
      if ($work->icon) {
        unlink($work->icon);
      }

      //update  data in data
      // d	small_title	title	details	icon	status	created_at	updated_at	
      Working::where('id', $id)->update([
        'small_title' => $request->small_title,
        'title' => $request->title,
        'details' => $request->details,
        'icon' => $url,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Working Proces Item Update Success");
      return redirect()->route('working.index');
    } else {
      //update  data in data
      // d	small_title	title	details	icon	status	created_at	updated_at	
      Working::where('id', $id)->update([
        'small_title' => $request->small_title,
        'title' => $request->title,
        'details' => $request->details,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Working Proces Item Update Success");
      return redirect()->route('working.index');
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $work = Working::where('id', $id)->first();
    if ($work->icon) {
      unlink($work->icon);
    }
    $work->delete();
    Toastr::warning("Working Proces Item Delete Success");
    return redirect()->route('working.index');
  }
}
