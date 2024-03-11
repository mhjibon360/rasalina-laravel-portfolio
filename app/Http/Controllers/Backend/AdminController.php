<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  /**
   * admin dashboard show all routes
   */
  public function adminDashboard()
  {
    return view('backend.pages.dashboard.index');
  }

  /**
   * admin dashboard show all routes
   */
  public function AdminProfile()
  {
    return view('backend.pages.admin.admin-profile');
  }
  /**
   * admin dashboard show all routes
   */
  public function Updateprofile(Request $request)
  {
    $id = $request->id;
    if ($request->hasFile('image')) {
      // save image location
      $image = $request->file('image');
      $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
      $url = "upload/Profile/" . $name;
      $image->move(public_path("upload/Profile/"), $name);
      // unlink old image
      $admin = User::where('id', $id)->first();
      if ($admin->image) {
        unlink($admin->image);
      }
      User::where('id', $id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'username' => $request->username,
        'image' => $url,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Proifle Update Sucess with Photo");
      return redirect()->back();
    } else {

      User::where('id', $id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'username' => $request->username,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Proifle Update Sucess without Photo");
      return redirect()->back();
    }
  }
}
