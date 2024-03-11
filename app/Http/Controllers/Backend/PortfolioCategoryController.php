<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\PortfolioCategory;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class PortfolioCategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $allCategory = PortfolioCategory::orderBy('name', 'asc')->get();
    return view('backend.pages.creative-work.all-category', compact('allCategory'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('backend.pages.creative-work.add-category');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    PortfolioCategory::insert([
      'name' => $request->name,
      'slug' => strtolower(str_replace(' ', '-', $request->slug)),
      'created_at' => Carbon::now(),
    ]);
    Toastr::success("Portfolio Category Created Success");
    return redirect()->route('portfoliocategory.index');
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
    $category = PortfolioCategory::findOrFail($id);
    return view('backend.pages.creative-work.edit-category', compact('category'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    PortfolioCategory::where('id', $id)->update([
      'name' => $request->name,
      'slug' => strtolower(str_replace(' ', '-', $request->slug)),
      'updated_at' => Carbon::now(),
    ]);
    Toastr::success("Portfolio Category Updated Success");
    return redirect()->route('portfoliocategory.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    PortfolioCategory::where('id', $id)->delete();
    Toastr::warning("Portfolio Category delete Success");
    return redirect()->route('portfoliocategory.index');
  }
}
