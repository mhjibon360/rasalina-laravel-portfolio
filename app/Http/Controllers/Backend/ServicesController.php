<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $allServices = Services::latest()->get();
    return view('backend.pages.services.all_services', compact('allServices'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('backend.pages.services.add_services');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // store services image
    $thumbnail_image = $request->file('thumbnail_image');
    $thumbnail_image_name = hexdec(uniqid()) . '.' . $thumbnail_image->getClientOriginalExtension();
    $thumbnail_image_url = "upload/Services/" . $thumbnail_image_name;
    $thumbnail_image->move(public_path("upload/Services/"), $thumbnail_image_name);

    // store services icon
    $icon = $request->file('icon');
    $icon_name = hexdec(uniqid()) . '.' . $icon->getClientOriginalExtension();
    $icon_url = "upload/Services/" . $icon_name;
    $icon->move(public_path("upload/Services/"), $icon_name);

    // id	thumbnail_image	icon	title	details	status	created_at	updated_at	
    Services::insert([
      'thumbnail_image' => $thumbnail_image_url,
      'icon' => $icon_url,
      'title' => $request->title,
      'details' => $request->details,
      'slug' => str_replace(' ', '-', strtolower($request->title)),
      'created_at' => Carbon::now(),
    ]);

    Toastr::success("New Services Created Success");
    return redirect()->route('services.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $service = Services::where('id', $id)->first();
    if ($service->status == '1') {
      $service->update([
        'status' => 0,
      ]);
      Toastr::info("Services Inaactive Success");
      return redirect()->back();
    } else {
      $service->update([
        'status' => 1,
      ]);
      Toastr::info("Services Active Success");
      return redirect()->back();
    }
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $service = Services::findOrFail($id);
    return view('backend.pages.services.edit-services', compact('service'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $service = Services::where('id', $id)->first();
    if ($request->file('thumbnail_image')) {
      // store services image
      $thumbnail_image = $request->file('thumbnail_image');
      $thumbnail_image_name = hexdec(uniqid()) . '.' . $thumbnail_image->getClientOriginalExtension();
      $thumbnail_image_url = "upload/Services/" . $thumbnail_image_name;
      $thumbnail_image->move(public_path("upload/Services/"), $thumbnail_image_name);

      //unlink services thumbnail image
      if ($service->thumbnail_image) {
        unlink($service->thumbnail_image);
      }
      $service->update([
        'thumbnail_image' => $thumbnail_image_url,
        'title' => $request->title,
        'details' => $request->details,
        'slug' => str_replace(' ', '-', strtolower($request->title)),
        'updated_at' => Carbon::now(),
      ]);

      Toastr::info("Services Updated Success With Thumbnail photo");
      return redirect()->route('services.index');
    } elseif ($request->file('icon')) {
      // store services icon
      $icon = $request->file('icon');
      $icon_name = hexdec(uniqid()) . '.' . $icon->getClientOriginalExtension();
      $icon_url = "upload/Services/" . $icon_name;
      $icon->move(public_path("upload/Services/"), $icon_name);
      //unlink services thumbnail image
      if ($service->icon) {
        unlink($service->icon);
      }
      // id	thumbnail_image	icon	title	details	status	created_at	updated_at	
      $service->update([
        'icon' => $icon_url,
        'title' => $request->title,
        'details' => $request->details,
        'slug' => str_replace(' ', '-', strtolower($request->title)),
        'updated_at' => Carbon::now(),
      ]);

      Toastr::info("Services Updated Success With Icon Image");
      return redirect()->route('services.index');
    } else {

      // id	thumbnail_image	icon	title	details	status	created_at	updated_at	
      $service->update([
        'title' => $request->title,
        'details' => $request->details,
        'slug' => str_replace(' ', '-', strtolower($request->title)),
        'updated_at' => Carbon::now(),
      ]);

      Toastr::info("Services Updated Success ");
      return redirect()->route('services.index');
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $service = Services::where('id', $id)->first();
    //  unlink services thumbnail image
    if ($service->thumbnail_image) {
      unlink($service->thumbnail_image);
    }
    //  unlink services icon image
    if ($service->icon) {
      unlink($service->icon);
    }
    $service->delete();
    Toastr::warning("Serivces Delete Success");
    return redirect()->back();
  }
}
