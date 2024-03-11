<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\ContactLocation;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ContactController extends Controller
{
  /**
   * edit location
   */
  public function EditLocation()
  {
    $map = ContactLocation::first();
    return view('backend.pages.contact.edit-location', compact('map'));
  }

  /**
   * Update location
   */
  public function UpdateLocation(Request $request, $id)
  {
    ContactLocation::where('id', $id)->update([
      'map_link' => $request->map_link,
      'updated_at' => Carbon::now(),
    ]);
    Toastr::info("Google Map Locaiton Updated Success");
    return redirect()->back();
  }
}
