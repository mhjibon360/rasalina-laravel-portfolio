<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\ClientMultiImage;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;

class ClientMultiImageCntroller extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $allmulitImage = ClientMultiImage::latest()->get();
    return view('backend.pages.client-multi-image.partners-multi-image-index', compact('allmulitImage'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('backend.pages.partners-multi-image.client-multi-image-create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $image_name = $request->file('image_name');
    foreach ($image_name as $image) {
      $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
      $url = "upload/Client/" . $name;
      // $image->move(public_path('upload/HomeAboutMultiimage/'), $name);
      Image::make($image)->resize(160, 160)->save(public_path("upload/Client/") . $name);
      // store iamge data
      ClientMultiImage::insert([
        'image_name' => $url,
        'created_at' => Carbon::now(),
      ]);
    }
    Toastr::success("Multi Image Added Sucess");
    return redirect()->route('client-multiimage.index');
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
    $image = ClientMultiImage::where('id', $id)->first();
    return view('backend.pages.client-multi-image.partners-multi-image-edit', compact('image'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    if ($request->file('image_name')) {
      $image_name = $request->file('image_name');
      $name = hexdec(uniqid()) . '.' . $image_name->getClientOriginalExtension();
      $url = "upload/Client/" . $name;
      $image_name->move(public_path('upload/Client/'), $name);
      // unlink old image
      $image = ClientMultiImage::where('id', $id)->first();
      if ($image->image_name) {
        unlink($image->image_name);
      }
      // update iamge data
      ClientMultiImage::where('id', $id)->update([
        'image_name' => $url,
        'updated_at' => Carbon::now(),
      ]);
      Toastr::info("Multi Image Update Sucess");
      return redirect()->route('client-multiimage.index');
    } else {
      Toastr::info("Multi Image Update Sucess");
      return redirect()->route('client-multiimage.index');
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $image = ClientMultiImage::where('id', $id)->first();

    if ($image->image_name) {
      unlink($image->image_name);
    }
    $image->delete();
    Toastr::warning("Multi Image Delete Success");
    return redirect()->back();
  }
}
