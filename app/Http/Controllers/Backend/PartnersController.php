<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\partners;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class PartnersController extends Controller
{
  /**
   * partners inforamtion edit
   */
  public function edit()
  {
    $partnes = partners::first();
    return view('backend.pages.partners.partnters-information', compact('partnes'));
  }
  /**
   * partners inforamtion edit
   */
  public function update(Request $request, $id)
  {
    partners::where('id', $id)->update([
      'small_title' => $request->small_title,
      'title' => $request->title,
      'details' => $request->details,
      'updated_at'=>Carbon::now(),
    ]);
    Toastr::info("Partners Inforamtion Updated Success");
    return redirect()->back();
  }
}
