<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\PortfolioCategory;
use Brian2694\Toastr\Facades\Toastr;

class PortfolioController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $allPortfolio = Portfolio::with('category')->latest()->get();
    return view('backend.pages.creative-work.all-portfolio', compact('allPortfolio'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $allCategory = PortfolioCategory::orderBy('name', 'asc')->get();
    return view('backend.pages.creative-work.add-portfolio', compact('allCategory'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // store portfolio image path
    $image = $request->file('image');
    $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
    $url = "upload/portfolio/" . $name;
    $image->move(public_path("upload/portfolio/"), $name);

    //store data in database // id	category_id	title	details	image	slug	status	created_at	updated_at	
    Portfolio::insert([
      'category_id' => $request->category_id,
      'title' => $request->title,
      'details' => $request->details,
      'image' => $url,
      'created_at' => Carbon::now(),
    ]);

    Toastr::success("Portfolio Item Created Success");
    return redirect()->route('portfolio.index');
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
    $portfolio = Portfolio::where('id', $id)->first();
    $allCategory = PortfolioCategory::orderBy('name', 'asc')->get();

    return view('backend.pages.creative-work.edit-portfolio', compact(['portfolio', 'allCategory']));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    if ($request->file('image')) {
      // store portfolio image path
      $image = $request->file('image');
      $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
      $url = "upload/portfolio/" . $name;
      $image->move(public_path("upload/portfolio/"), $name);

      // unlink image
      $portfolio = Portfolio::where('id', $id)->first();
      if ($portfolio->image) {
        unlink($portfolio->image);
      }

      //store data in database // id	category_id	title	details	image	slug	status	created_at	updated_at	
      Portfolio::where('id', $id)->update([
        'category_id' => $request->category_id,
        'title' => $request->title,
        'details' => $request->details,
        'image' => $url,
        'updated_at' => Carbon::now(),
      ]);

      Toastr::info("Portfolio Item Updated Success");
      return redirect()->route('portfolio.index');
    } else {

      //store data in database // id	category_id	title	details	image	slug	status	created_at	updated_at	
      Portfolio::where('id', $id)->update([
        'category_id' => $request->category_id,
        'title' => $request->title,
        'details' => $request->details,
        'updated_at' => Carbon::now(),
      ]);

      Toastr::success("Portfolio Item Updated Success");
      return redirect()->route('portfolio.index');
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $portfolio = Portfolio::where('id', $id)->first();
    if ($portfolio->image) {
      unlink($portfolio->image);
    }
    $portfolio->delete();
    Toastr::warning("Portfolio Item Delete Success");
    return redirect()->route('portfolio.index');
  }
}
