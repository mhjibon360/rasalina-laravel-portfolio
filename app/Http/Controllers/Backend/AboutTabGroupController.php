<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\AboutTabGroup;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class AboutTabGroupController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $alltab = AboutTabGroup::latest()->get();
    return view('backend.pages.about-tab-group.all-tab-group', compact('alltab'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('backend.pages.about-tab-group.add-tab-group');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    AboutTabGroup::insert([
      'tab_name' => $request->tab_name,
      'created_at' => Carbon::now(),
    ]);
    Toastr::success("About Page Tab Group Created Success");
    return redirect()->route('tab-group.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $tab = AboutTabGroup::where('id', $id)->first();
    return view('backend.pages.about-tab-group.edit-tab-group', compact('tab'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {

    AboutTabGroup::where('id', $id)->update([
      'tab_name' => $request->tab_name,
      'updated_at' => Carbon::now(),
    ]);

    Toastr::info("About Page Tab Group Updated Success");
    return redirect()->route('tab-group.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    AboutTabGroup::where('id', $id)->delete();
    Toastr::warning("About Page Tab Group Delete Success");
    return redirect()->route('tab-group.index');
  }
}
