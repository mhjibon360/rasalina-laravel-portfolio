<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Working;
use App\Models\HomeHero;
use App\Models\partners;
use App\Models\Services;
use App\Models\HomeAbout;
use App\Models\Portfolio;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Models\ClientFeedback;
use App\Models\ContactMessage;
use App\Models\HomeMultiImage;
use App\Models\ContactLocation;
use App\Models\FeedbackCaption;
use App\Models\ServicesCaption;
use App\Models\ClientMultiImage;
use App\Models\PortfolioCategory;
use App\Models\PartnersMultiImage;
use App\Models\WorkProcessCaption;
use App\Models\CreativeWorkCaption;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
  /** 
   * frontend home page
   */
  public function index()
  {
    $homehero = HomeHero::first();
    $multiImage = HomeMultiImage::where('status', 1)->latest()->limit(7)->get();
    $homeAbout = HomeAbout::first();
    $allservices = Services::where('status', 1)->orderBy('title', 'asc')->get();
    $servcap = ServicesCaption::first();
    $workCap = WorkProcessCaption::first();
    $allwork = Working::where('status', 1)->get();
    $portCap = CreativeWorkCaption::first();
    $portCategory = PortfolioCategory::orderBy('name', 'asc')->get();
    $allPortfolio = Portfolio::with('category')->where('status', 1)->latest()->get();
    $clientcap = FeedbackCaption::first();
    $clientfeedback = ClientFeedback::where('status', 1)->latest()->get();
    $clientMultimg = ClientMultiImage::where('status', 1)->latest()->limit(7)->get();
    $partmulimg = PartnersMultiImage::where('status', 1)->latest()->limit(7)->get();
    $partCap = partners::first();
    $allBlogs = Blog::with('category')->where('status', 1)->latest()->paginate();
    return view('frontend.pages.index', compact(['homehero', 'multiImage', 'homeAbout', 'allservices', 'servcap', 'workCap', 'allwork', 'portCap', 'portCategory', 'allPortfolio', 'clientcap', 'clientfeedback', 'clientMultimg', 'partmulimg', 'partCap', 'allBlogs']));
  }


  /**
   * services details page
   */
  public function servicesDetails($id, $slug)
  {
    $services = Services::findOrFail($id);
    return view('frontend.pages.services-details', compact('services'));
  }
  /**
   * portfolio details details page
   */
  public function portfolioDetails($id, $slug)
  {
    $protfolio = Portfolio::where('id', $id)->first();
    return view('frontend.pages.portfolio-details', compact('protfolio'));
  }

  /**
   * blog details page
   */
  public function blogDetails($id, $slug)
  {
    $blog = Blog::with('category')->findOrFail($id);
    $tags = explode(',', $blog->tags);
    $previoutpost = Blog::where('id', '<', $blog->id)->first();
    $nextpost = Blog::where('id', '>', $blog->id)->first();
    $recentBlog = Blog::with('category')->latest()->limit('5')->get();
    $allCategory = BlogCategory::orderBy('name', 'asc')->limit(20)->get();
    $populartags = Blog::latest()->select('tags')->groupBy('tags')->get();

    // view
    $viewKey = 'blog' . $blog->id;
    if (!Session::has($viewKey)) {
      $blog->increment('view');
      Session::put($viewKey, 1);
    }
    // return ($viewKey);

    // return ($my);

    return view('frontend.pages.blog-details', compact(['blog', 'tags', 'previoutpost', 'nextpost', 'recentBlog', 'allCategory', 'populartags']));
  }

  /**
   * all blog
   */
  public function allBlog()
  {
    $allblog = Blog::with('category')->latest()->limit(4)->paginate(4);
    $recentBlog = Blog::with('category')->latest()->limit('5')->get();
    $allCategory = BlogCategory::orderBy('name', 'asc')->limit(20)->get();

    return view('frontend.pages.all-blog', compact(['allblog', 'recentBlog', 'allCategory']));
  }


  /**
   * category blog
   */
  public function categoryBlog($slug)
  {
    $category = BlogCategory::where('slug', $slug)->first();
    $categoryPost = Blog::with('category')->where('category_id', $category->id)->latest()->get();
    // return($categoryPost);
    return view('frontend.pages.category-blog', compact('category', 'categoryPost'));
  }
  /**
   * category blog
   */
  public function tagBlog($tags)
  {
    // $category = BlogCategory::where('slug', $slug)->first();
    // $categoryPost = Blog::with('category')->where('category_id', $category->id)->latest()->get();
    // return($categoryPost);
    $tagBlog = Blog::where('tags', $tags)->get();
    // return ($tagBlog);
    return view('frontend.pages.tag-blog', compact('tagBlog'));
  }

  /**
   * about page
   */
  public function aboutPage()
  {
    $homehero = HomeHero::first();
    $multiImage = HomeMultiImage::where('status', 1)->latest()->limit(7)->get();
    $homeAbout = HomeAbout::first();
    $allservices = Services::where('status', 1)->orderBy('title', 'asc')->get();
    $servcap = ServicesCaption::first();
    $workCap = WorkProcessCaption::first();
    $allwork = Working::where('status', 1)->get();
    $portCap = CreativeWorkCaption::first();
    $portCategory = PortfolioCategory::orderBy('name', 'asc')->get();
    $allPortfolio = Portfolio::with('category')->where('status', 1)->latest()->get();
    $clientcap = FeedbackCaption::first();
    $clientfeedback = ClientFeedback::where('status', 1)->latest()->get();
    $clientMultimg = ClientMultiImage::where('status', 1)->latest()->limit(7)->get();
    $partmulimg = PartnersMultiImage::where('status', 1)->latest()->limit(7)->get();
    $partCap = partners::first();
    $allBlogs = Blog::with('category')->where('status', 1)->latest()->paginate();
    return view('frontend.pages.about', compact(['homehero', 'multiImage', 'homeAbout', 'allservices', 'servcap', 'workCap', 'allwork', 'portCap', 'portCategory', 'allPortfolio', 'clientcap', 'clientfeedback', 'clientMultimg', 'partmulimg', 'partCap', 'allBlogs']));
  }


  /**
   * services page
   */
  public function servicesPage()
  {
    $allservices = Services::latest()->paginate(10);
    return view('frontend.pages.services', compact('allservices'));
  }

  /**
   * all portfolio
   */
  public function allPortfolio()
  {
    $allPortfolio = Portfolio::where('status', 1)->latest()->paginate(2);
    $allportCategory = PortfolioCategory::orderBy('name', 'asc')->get();
    return view('frontend.pages.all-portfolio', compact(['allPortfolio', 'allportCategory']));
  }
  /**
   * all portfolio
   */
  public function contactUs()
  {
    $map = ContactLocation::first();

    return view('frontend.pages.contact-us', compact('map'));
  }

  /**
   * send message
   */
  public function sendMessage(Request $request)
  {
    //validate form data
    $request->validate([
      'name' => 'required',
      'email' => 'required',
      'subject' => 'required',
      'country' => 'required',
      'message' => 'required',
    ], ([
      'name.required' => 'please enter your name',
      'email.required' => 'please enter your active email',
      'subject.required' => 'please enter your valudable subject',
      'country.required' => 'please enter your live location',
      'message.required' => 'please describle your message location',
    ]));

    ContactMessage::insert([
      'name' => $request->name,
      'email' => $request->email,
      'subject' => $request->subject,
      'country' => $request->country,
      'message' => $request->message,
    ]);
    Toastr::success("Congratulation!! Messsage Send Success");
    return redirect()->back();
  }

  /**
   * cv download
   */
  public function cvDwonload()
  {
    $cv = HomeAbout::first();
    // return($cv);
    return response()->download($cv->cv);
  }
}
