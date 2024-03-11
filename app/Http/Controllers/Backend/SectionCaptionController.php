<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CreativeWorkCaption;
use App\Models\FeedbackCaption;
use App\Models\ServicesCaption;
use App\Models\WorkProcessCaption;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class SectionCaptionController extends Controller
{
  /**
   * services caption edit
   */
  public function ServicescapEdit()
  {
    $servicec = ServicesCaption::first();
    return view('backend.pages.services.services-caption', compact('servicec'));
  }
  /**
   * services caption Servicescapupdate
   */
  public function Servicescapupdate(Request $request, $id)
  {
    ServicesCaption::where('id', $id)->update([
      'title' => $request->title,
      'details' => $request->details,
      'updated_at' => Carbon::now(),
    ]);
    Toastr::info("Services Caption Updated Success");
    return redirect()->back();
  }

  // ===================================  working process  ===================================================
  /**
   * working process caption edit
   */
  public function workprocessscapEdit()
  {
    $working = WorkProcessCaption::first();
    return view('backend.pages.work-process.work-process-caption', compact('working'));
  }
  /**
   * services caption Servicescapupdate
   */
  public function workprocessscapupdate(Request $request, $id)
  {
    WorkProcessCaption::where('id', $id)->update([
      'title' => $request->title,
      'details' => $request->details,
      'updated_at' => Carbon::now(),
    ]);
    Toastr::info("Working-process Caption Updated Success");
    return redirect()->back();
  }
  // ===================================  creative work  ===================================================
  /**
   * working process caption edit
   */
  public function creativecapEdit()
  {
    $creative = CreativeWorkCaption::first();
    return view('backend.pages.creative-work.creative-work-caption', compact('creative'));
  }
  /**
   * services caption Servicescapupdate
   */
  public function creativecapupdate(Request $request, $id)
  {
    CreativeWorkCaption::where('id', $id)->update([
      'title' => $request->title,
      'details' => $request->details,
      'updated_at' => Carbon::now(),
    ]);
    Toastr::info("Working-process Caption Updated Success");
    return redirect()->back();
  }


  // ===================================  client feedback  ===================================================
  /**
   * client feedback caption edit
   */
  public function clientfeedbackEdit()
  {
    $feedback = FeedbackCaption::first();
    return view('backend.pages.client-feedback.client-feedback-caption', compact('feedback'));
  }
  /**
   * client feedback update
   */
  public function clientfeedbackupdate(Request $request, $id)
  {
    FeedbackCaption::where('id', $id)->update([
      'title' => $request->title,
      'details' => $request->details,
      'updated_at' => Carbon::now(),
    ]);
    Toastr::info("Client-feedback Caption Updated Success");
    return redirect()->back();
  }
}
