<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class BlogController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $allBlog = Blog::with('category')->latest()->get();
    return view('backend.pages.blog.all-blog', compact('allBlog'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $allCategory = BlogCategory::orderBy('name', 'asc')->get();
    return view('backend.pages.blog.add-blog', compact('allCategory'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // store Blog image path
    $image = $request->file('image');
    $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
    $url = "upload/Blog/" . $name;
    $image->move(public_path("upload/Blog/"), $name);

    // store data in database // id	category_id	title	details	image	slug	status	created_at	updated_at	

    Blog::insert([
      'category_id' => $request->category_id,
      'title' => $request->title,
      'details' => $request->details,
      'image' => $url,
      'tags' => $request->tags,
      'slug' => Str::slug($request->title),
      'created_at' => Carbon::now(),
    ]);

    Toastr::success("Blog Added Success");
    return redirect()->route('blog.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $blog = Blog::where('id', $id)->first();
    if ($blog->status == '1') {
      $blog->update([
        'status' => 0,
      ]);
      Toastr::info("Blogs Inaactive Success");
      return redirect()->back();
    } else {
      $blog->update([
        'status' => 1,
      ]);
      Toastr::info("Blogs Active Success");
      return redirect()->back();
    }
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $blog = Blog::where('id', $id)->first();
    $allCategory = BlogCategory::orderBy('name', 'asc')->get();

    return view('backend.pages.blog.edit-blog', compact(['blog', 'allCategory']));
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
      $url = "upload/Blog/" . $name;
      $image->move(public_path("upload/Blog/"), $name);

      // unlink image
      $blog = Blog::where('id', $id)->first();
      if ($blog->image) {
        unlink($blog->image);
      }

      //store data in database // id	category_id	title	details	image	slug	status	created_at	updated_at	
      Blog::where('id', $id)->update([
        'category_id' => $request->category_id,
        'title' => $request->title,
        'details' => $request->details,
        'image' => $url,
        'tags' => $request->tags,

        'updated_at' => Carbon::now(),
      ]);

      Toastr::info("Blog Item Updated Success");
      return redirect()->route('blog.index');
    } else {

      //store data in database // id	category_id	title	details	image	slug	status	created_at	updated_at	
      Blog::where('id', $id)->update([
        'category_id' => $request->category_id,
        'title' => $request->title,
        'details' => $request->details,
        'tags' => $request->tags,

        'updated_at' => Carbon::now(),
      ]);

      Toastr::success("Blog Item Updated Success");
      return redirect()->route('blog.index');
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $blog = Blog::where('id', $id)->first();
    if ($blog->image) {
      unlink($blog->image);
    }
    $blog->delete();
    Toastr::warning("Blog Delete Success");
    return redirect()->route('blog.index');
  }
}
