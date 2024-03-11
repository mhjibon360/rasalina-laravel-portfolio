<?php

namespace App\Http\Controllers\Backend;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class FooterController extends Controller
{
  /**
   * edit footer
   */
  public function edit()
  {
    $footer = Footer::first();
    return view('backend.pages.footer.edit-footer', compact('footer'));
  }
  /**
   * edit footer
   */
  public function update(Request $request, $id)
  {
    Footer::where('id', $id)->update([
      'contact_title' => $request->contact_title,
      'contact_number' => $request->contact_number,
      'contact_details' => $request->contact_details,
      'address_name' => $request->address_name,
      'address_location' => $request->address_location,
      'address_email' => $request->address_email,
      'follow_title' => $request->follow_title,
      'follow_big_title' => $request->follow_big_title,
      'follow_details' => $request->follow_details,
      'footer_title' => $request->footer_title,
      'updated_at' => Carbon::now(),
    ]);
    Toastr::info("Footer Updated Success");
    return redirect()->back();
  }
}
