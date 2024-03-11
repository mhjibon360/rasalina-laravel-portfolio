<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\HomeHero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;

class HomeHeroController extends Controller
{
  /**
   * mange home hrol
   */
  public function homeHero()
  {
    $hero = HomeHero::first();
    return view('backend.pages.home.manage-home', compact('hero'));
  }
  /**
   * update home hrol
   */
  public function UpdateHomeHero(Request $request, $id)
  {
    if ($request->file('image')) {
      // store image path
      $image = $request->file('image');
      $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
      $url = "upload/Homeprofile/" . $name;
      // $image->move(public_path('upload/Homeprofile/'), $name);
      Image::make($image)->resize(636, 852)->save(public_path('upload/Homeprofile/') . $name);

      // unlink old iamge
      $home = HomeHero::where('id', $id)->first();
      if ($home->image) {
        unlink($home->image);
      }
      // update data
      HomeHero::where('id', $id)->update([
        'title' => $request->title,
        'details' => $request->details,
        'button_text' => $request->button_text,
        'view_link' => $request->view_link,
        'image' => $url,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Home Hero Update Success With Profile Photo");
      return redirect()->back();
    } else {
      // update data
      HomeHero::where('id', $id)->update([
        'title' => $request->title,
        'details' => $request->details,
        'button_text' => $request->button_text,
        'view_link' => $request->view_link,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Home Hero Update Success Without Profile Photo");
      return redirect()->back();
    }
  }
}
