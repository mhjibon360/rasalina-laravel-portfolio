<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HomeAbout;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeAboutController extends Controller
{
  /**
   * home about edit
   */
  public function homeAboutEdit()
  {
    $homeAbout = HomeAbout::first();
    return view('backend.pages.home-about.manage-home-about', compact('homeAbout'));
  }

  /**
   * home about update
   */
  public function homeAboutUpdate(Request $request, $id)
  {
    $HomeAbout = HomeAbout::where('id', $id)->first();
    if ($request->file('cv')) {
      //  store cv file
      $cv = $request->file('cv');
      $cv_name = hexdec(uniqid()) . '.' . $cv->getClientOriginalExtension();
      $cv_url = "upload/HomeAbout/Cv/" . $cv_name;
      $cv->move(public_path("upload/HomeAbout/Cv/"), $cv_name);
      // unlink old cv
      if ($HomeAbout->cv) {
        unlink($HomeAbout->cv);
      }
      // update home about
      HomeAbout::where('id', $id)->update([
        'small_title' => $request->small_title,
        'title' => $request->title,
        'experience_title' => $request->experience_title,
        'details' => $request->details,
        'cv' => $cv_url,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Home About Updated Success With Cv file");
      return redirect()->back();
    } else if ($request->file('logo')) {
      //  store cv file
      $logo = $request->file('logo');
      $logo_name = hexdec(uniqid()) . '.' . $logo->getClientOriginalExtension();
      $logo_url = "upload/HomeAbout/Logo/" . $logo_name;
      $logo->move(public_path("upload/HomeAbout/Logo/"), $logo_name);
      // unlink old cv
      if ($HomeAbout->logo) {
        unlink($HomeAbout->logo);
      }
      // update home about
      HomeAbout::where('id', $id)->update([
        'small_title' => $request->small_title,
        'title' => $request->title,
        'experience_title' => $request->experience_title,
        'details' => $request->details,
        'logo' => $logo_url,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Home About Updated Success With Small Logo");
      return redirect()->back();
    } else {
      // update home about without cv or logo file
      HomeAbout::where('id', $id)->update([
        'small_title' => $request->small_title,
        'title' => $request->title,
        'experience_title' => $request->experience_title,
        'details' => $request->details,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Home About Updated Success Without cv and logo");
      return redirect()->back();
    }
  }
}
