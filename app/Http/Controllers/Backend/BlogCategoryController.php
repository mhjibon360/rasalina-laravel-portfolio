<?php

namespace App\Http\Controllers\Backend;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class BlogCategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $allCategory = BlogCategory::orderBy('name', 'asc')->get();
    return view('backend.pages.blog-category.all-category', compact('allCategory'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('backend.pages.blog-category.add-category');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    BlogCategory::insert([
      'name' => $request->name,
      'slug' => strtolower(str_replace(' ', '-', $request->slug)),
      'created_at' => Carbon::now(),
    ]);
    Toastr::success("Blog Category Created Success");
    return redirect()->route('blog-category.index');
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
    $category = BlogCategory::findOrFail($id);
    return view('backend.pages.blog-category.edit-category', compact('category'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    BlogCategory::where('id', $id)->update([
      'name' => $request->name,
      'slug' => strtolower(str_replace(' ', '-', $request->slug)),
      'updated_at' => Carbon::now(),
    ]);
    Toastr::info("Blog Category Created Success");
    return redirect()->route('blog-category.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    BlogCategory::where('id', $id)->delete();
    Toastr::warning("Blog Category delete Success");
    return redirect()->route('blog-category.index');
  }
}
