<?php

namespace App\Http\Controllers\Front;

use App;
use App\{
  Http\Controllers\Controller,
  Repositories\PostRepository,
  Models\Tag,
  Models\Category,
  Models\ParentMenu,
  Models\Slider,
  Models\ChooseNo,
  Models\MediaAlbum,
  Models\MediaAlbumContent,
  Models\Post,
  Models\DownloadProspect,
  Models\SubMenu,
  Models\ChildMenu,
  Models\SubChildMenu,
  Models\PostTab,
  Models\LinkFaculty,
  Models\FacultyDetail,
  Models\FacultyTab,
  Models\FacultySchedule,
  Models\PostLinkPage,
  Models\PostLinkPageTab,
  Models\GraduationRegister,
  Models\ApplicationRegister,
  Models\UploadedResume,
  Models\Career,
  Models\Address,
  Models\Testimonial,
  Models\Feature,
  Models\AcademicYear,
  Models\Placement,
  Models\GalleryTab,
  Models\RazorPaymentCredential,
  Models\RazorPaymentTransactionLog
};

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use Validator;
use URL;
use Mail;
use Carbon\Carbon;
use Hash;
use Session;
use Excel;
use DataTables;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\Redirect;


class PostController extends Controller
{
  /**
   * The PostRepository instance.
   *
   * @var \App\Repositories\PostRepository
   */
  protected $postRepository;

  /**
   * The pagination number.
   *
   * @var int
   */
  protected $nbrPages;

  /**
   * Create a new PostController instance.
   *
   * @param  \App\Repositories\PostRepository $postRepository
   * @return void
   */
  public function __construct()
  {

    // $this->postRepository = $postRepository;
    // $this->nbrPages = config('app.nbrPages.front.posts');
    // $sub_menu = SubMenu::orderBy('hierarchy', 'ASC')->get();
    // $child_menu = ChildMenu::orderBy('hierarchy', 'ASC')->get();
    $parent_menu = ParentMenu::orderBy('hierarchy', 'ASC')->get();
    $address = Address::first();
    $about_menu_id = ParentMenu::select('id')->where('slug', 'about-us')->first();
    $about_content = Post::where('parent_menu_id', @$about_menu_id->id)->first();

    View::share('parent_menu', $parent_menu);
    View::share('address', $address);
    View::share('about_content', $about_content);

    // View::share('child_menu', $child_menu);
    View::share('current_route', Route::currentRouteName());
    // View::share('route_path', \Request::path());
  }

  /**
   * Display a listing of the posts.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $home = Route::currentRouteName();

    $sliders = Slider::where('active', '=', 1)->orderBy('hierarchy', 'asc')->whereNull('deleted_at')->limit(10)->get();

    $dynamic_contents = Post::where('active', '=', 1)->whereNull('deleted_at')->get();

    $sub_menu = SubMenu::orderBy('hierarchy', 'ASC')->get();

    $news_menu_id = ParentMenu::select('id', 'name', 'slug')->where('layout_name', 'BLOG')->first();

    $recent_news = Post::where('parent_menu_id', @$news_menu_id->id)->orderBy('event_date', 'desc')->whereNull('deleted_at')->paginate(3);

    $service_menu_id = ParentMenu::select('id')->where('slug', '=', 'services')->first();

    // $services = Post::where('parent_menu_id','=',@$service_menu_id->id)->get();

    $services = Post::join('sub_menus', function ($sub_menus) {
      $sub_menus->on('sub_menus.id', 'posts.sub_menu_id');
    })->select('posts.*')->where('posts.parent_menu_id', '=', @$service_menu_id->id)->orderBy('sub_menus.hierarchy')->whereNull('posts.deleted_at')->get();

    $our_team = FacultyDetail::whereNull('deleted_at')->get();

    $testimonial = Testimonial::orderBy('id', 'desc')->get();

    $features = Feature::orderBy('id', 'asc')->get();

    $albums = MediaAlbum::where('category', '=', 'TOUR')->limit(6)->get();

    $media_album_id = MediaAlbum::select('id')->where('category', '=', 'PLACEMENTS')->first();

    // $all_images = MediaAlbumContent::join('media_albums', 'media_albums.id', '=', 'media_album_contents.media_album_id')->where('media_album_id', '!=', @$media_album_id->id)->get();

    // $all_media_images = [];

    // foreach ($all_images as $key => $value) {

    //   $images = [];

    //   $all_image = explode(",", @$value->filename);

    //   $all_image = array_filter($all_image);

    //   $all_image = array_values($all_image);

    //   array_push($images, ['slug' => $value->slug, 'images' => $all_image]);

    //   array_push($all_media_images, $images);
    // }

    $campus_images = MediaAlbumContent::where('media_album_id', '=', @$media_album_id->id)->first();

    $clients = explode(",", @$campus_images->filename);

    // $clients = array_reverse($clients);

    $clients = array_filter($clients);

    $clients = array_values($clients);

    $prospects = DownloadProspect::all();

    $counts = ChooseNo::first();

    $address_list = Address::get();

    // dd(@$sliders);

    return view('front.index', compact('home', 'dynamic_contents', 'sub_menu', 'albums', 'sliders', 'our_team', 'recent_news', 'testimonial', 'features', 'clients', 'prospects', 'services', 'counts', 'address_list'));
  }


  public function getDynamicContent($parent_slug = null, $sub_slug = null, $child_slug = null, $sub_child_slug = null)
  {
    try {
      if ($parent_slug == 'services') {
        $parent_menu_id = ParentMenu::where('slug', '=', $parent_slug)->first();
        $sub_menu_id = SubMenu::where('slug', '=', $sub_slug)->first();

        if ($sub_menu_id != null) {
          $services = Post::join('sub_menus', function ($sub_menus) {
            $sub_menus->on('sub_menus.id', 'posts.sub_menu_id');
          })->select('posts.*')->where('posts.parent_menu_id', '=', $parent_menu_id->id)->where('posts.sub_menu_id', '=', $sub_menu_id->id)->whereNotNull('posts.child_menu_id')->orderBy('sub_menus.hierarchy')->whereNull('posts.deleted_at')->get();

        } else {
          $services = Post::join('sub_menus', function ($sub_menus) {
            $sub_menus->on('sub_menus.id', 'posts.sub_menu_id');
          })->select('posts.*')->where('posts.parent_menu_id', '=', $parent_menu_id->id)->whereNull('child_menu_id')->orderBy('sub_menus.hierarchy')->whereNull('posts.deleted_at')->get();

        }
        $content_type = "dynamic";

        return view('front.dynamic-content', compact('services', 'parent_menu_id', 'sub_menu_id'));
      } else {
        if ($sub_slug == null) {

          $parent_menu_id = ParentMenu::where('slug', '=', $parent_slug)->first();


          if ($parent_menu_id != null) {

            $dynamic_contents = Post::where('parent_menu_id', $parent_menu_id->id)->first();
          } else {

            $dynamic_contents = PostLinkPage::where('slug', $parent_slug)->first();

            if (is_null($dynamic_contents)) {
              return redirect('/');
            }

            if (@$dynamic_contents->tab_section == 'Y') {
              $post_tabs = PostLinkPageTab::where('post_link_page_id', '=', @$dynamic_contents->id)->get();
            } else {
              $post_tabs = null;
            }


            return view('front.link-page', compact('dynamic_contents', 'post_tabs'));
          }
        } else {

          if ($child_slug == null) {

            $sub_menu_id = ParentMenu::join('sub_menus', function ($sub_menus) {

              $sub_menus->on('sub_menus.parent_menu_id', '=', 'parent_menus.id');
            })->select('sub_menus.id as id', 'sub_menus.parent_menu_id as parent_menu_id', 'sub_menus.name as name')->where('parent_menus.slug', '=', $parent_slug)->where('sub_menus.slug', '=', $sub_slug)->first();

            $dynamic_contents = Post::where('parent_menu_id', $sub_menu_id->parent_menu_id)->where('sub_menu_id', $sub_menu_id->id)->whereNull('child_menu_id')->first();

            // dd($sub_menu_id);
            // if( $sub_menu_id != null)
            // {

            //     $dynamic_contents = Post::where('sub_menu_id', $sub_menu_id->id)->first();

            // }
          } else {
            if ($sub_child_slug == null) {
              $parent_menu_id = ParentMenu::where('slug', '=', $parent_slug)->first();

              $sub_menu_id = ParentMenu::join('sub_menus', function ($sub_menus) {

                $sub_menus->on('sub_menus.parent_menu_id', '=', 'parent_menus.id');
              })->select('sub_menus.name as name', 'sub_menus.slug as slug', 'sub_menus.id as id')->where('parent_menus.slug', '=', $parent_slug)->where('sub_menus.slug', '=', $sub_slug)->first();

              $child_menu_id = ParentMenu::join('sub_menus', function ($sub_menus) {

                $sub_menus->on('sub_menus.parent_menu_id', '=', 'parent_menus.id');
              })->join('child_menus', function ($child_menus) {

                $child_menus->on('child_menus.sub_menu_id', '=', 'sub_menus.id');
              })->select('child_menus.id as id', 'child_menus.sub_menu_id as sub_menu_id', 'sub_menus.parent_menu_id as parent_menu_id', 'child_menus.name as name')->where('sub_menus.slug', '=', $sub_slug)->where('child_menus.slug', '=', $child_slug)->first();


              $dynamic_contents = Post::where('parent_menu_id', $child_menu_id->parent_menu_id)->where('sub_menu_id', $child_menu_id->sub_menu_id)->where('child_menu_id', $child_menu_id->id)->first();

              // dd($sub_menu_id);

              return view('front.dynamic-content', compact('dynamic_contents', 'child_menu_id', 'parent_menu_id', 'sub_menu_id'));
            } else {
              $parent_menu_id = ParentMenu::where('slug', '=', $parent_slug)->first();

              $sub_menu_id = ParentMenu::join('sub_menus', function ($sub_menus) {

                $sub_menus->on('sub_menus.parent_menu_id', '=', 'parent_menus.id');
              })->select('sub_menus.name as name', 'sub_menus.slug as slug', 'sub_menus.id as id')->where('parent_menus.slug', '=', $parent_slug)->where('sub_menus.slug', '=', $sub_slug)->first();

              $child_menu_id = ParentMenu::join('sub_menus', function ($sub_menus) {

                $sub_menus->on('sub_menus.parent_menu_id', '=', 'parent_menus.id');
              })->join('child_menus', function ($child_menus) {

                $child_menus->on('child_menus.sub_menu_id', '=', 'sub_menus.id');
              })->select('child_menus.id as id', 'child_menus.name as name', 'child_menus.slug as slug')->where('sub_menus.slug', '=', $sub_slug)->where('child_menus.slug', '=', $child_slug)->first();

              $sub_child_menu_id = ParentMenu::join('sub_menus', function ($sub_menus) {

                $sub_menus->on('sub_menus.parent_menu_id', '=', 'parent_menus.id');
              })->join('child_menus', function ($child_menus) {

                $child_menus->on('child_menus.sub_menu_id', '=', 'sub_menus.id');
              })->join('sub_child_menus', function ($sub_child_menus) {
                $sub_child_menus->on('sub_child_menus.child_menu_id', '=', 'child_menus.id');
              })
                ->select('sub_child_menus.id as id', 'sub_child_menus.child_menu_id as child_menu_id', 'child_menus.sub_menu_id as sub_menu_id', 'sub_menus.parent_menu_id as parent_menu_id', 'sub_child_menus.name as name')->where('sub_menus.slug', '=', $sub_slug)->where('child_menus.slug', '=', $child_slug)->where('sub_child_menus.slug', '=', $sub_child_slug)->first();


              $dynamic_contents = Post::where('parent_menu_id', $sub_child_menu_id->parent_menu_id)->where('sub_menu_id', $sub_child_menu_id->sub_menu_id)->where('child_menu_id', $sub_child_menu_id->child_menu_id)->where('sub_child_menu_id', $sub_child_menu_id->id)->first();

              // dd($sub_menu_id);

              return view('front.dynamic-content', compact('dynamic_contents', 'sub_child_menu_id', 'child_menu_id', 'parent_menu_id', 'sub_menu_id'));
            }
          }
        }
      }

      $parent_menu_id = ParentMenu::where('slug', '=', $parent_slug)->first();

      $sub_menu = SubMenu::all();

      if ($sub_slug != null) {
        if ($child_slug != null) {

          if ($sub_child_slug != null) {
            $sub_child_menu_id = ParentMenu::join('sub_menus', function ($sub_menus) {

              $sub_menus->on('sub_menus.parent_menu_id', '=', 'parent_menus.id');
            })->join('child_menus', function ($child_menus) {

              $child_menus->on('child_menus.sub_menu_id', '=', 'sub_menus.id');
            })->join('sub_child_menus', function ($sub_child_menus) {
              $sub_child_menus->on('sub_child_menus.child_menu_id', '=', 'child_menus.id');
            })
              ->select('sub_child_menus.id as id', 'sub_child_menus.name as name')->where('sub_menus.slug', '=', $sub_slug)->where('child_menus.slug', '=', $child_slug)->where('sub_child_menus.slug', '=', $sub_child_slug)->first();
          } else {

            $child_menu_id = ParentMenu::join('sub_menus', function ($sub_menus) {

              $sub_menus->on('sub_menus.parent_menu_id', '=', 'parent_menus.id');
            })->join('child_menus', function ($child_menus) {

              $child_menus->on('child_menus.sub_menu_id', '=', 'sub_menus.id');
            })->select('child_menus.id as id', 'child_menus.name as child_menu')->where('sub_menus.slug', '=', $sub_slug)->where('child_menus.slug', '=', $child_slug)->first();

            $sub_child_menu_id = null;
          }
        } else {
          $sub_menu_id = ParentMenu::join('sub_menus', function ($sub_menus) {

            $sub_menus->on('sub_menus.parent_menu_id', '=', 'parent_menus.id');
          })->select('sub_menus.name as name', 'sub_menus.slug as slug', 'sub_menus.id as id')->where('parent_menus.slug', '=', $parent_slug)->where('sub_menus.slug', '=', $sub_slug)->first();

          $child_menu_id = null;
          $sub_child_menu_id = null;
        }
      } else {
        $sub_menu_id = null;
        $child_menu_id = null;
        $sub_child_menu_id = null;
      }

      $content_type = "dynamic";

      $team_details = FacultyDetail::get();

      $team_tabs = FacultyTab::get();

      $prospects = DownloadProspect::all();

      $counts = ChooseNo::all();

      $gallery = GalleryTab::where('post_id', @$dynamic_contents->id)->get();

      if (@$dynamic_contents->tab_section == 'Y') {
        $post_tabs = PostTab::where('post_id', '=', @$dynamic_contents->id)->get();
      } else {
        $post_tabs = null;
      }

      if ($parent_menu_id != null) {
        $side_bar_menu =  $parent_menu_id->submenus;
      } else {
        $side_bar_menu =  null;
      }

      $content_list = Post::where('parent_menu_id', '=', $parent_menu_id->id)->orderBy('title')->get();

      $service_menu_id = ParentMenu::select('id')->where('slug', '=', 'services')->first();

      // $services = Post::where('parent_menu_id','=',@$service_menu_id->id)->get();

      $services = Post::join('sub_menus', function ($sub_menus) {
        $sub_menus->on('sub_menus.id', 'posts.sub_menu_id');
      })->select('posts.*')->where('posts.parent_menu_id', '=', @$service_menu_id->id)->orderBy('sub_menus.hierarchy')->whereNull('posts.deleted_at')->get();

      $news_menu_id = ParentMenu::select('id', 'name', 'slug')->where('layout_name', 'BLOG')->first();

      $recent_news = Post::where('parent_menu_id', @$news_menu_id->id)->orderBy('event_date', 'desc')->whereNull('deleted_at')->paginate(3);

      $media_album_id = MediaAlbum::select('id')->where('category', '=', 'PLACEMENTS')->first();
      $campus_images = MediaAlbumContent::where('media_album_id', '=', @$media_album_id->id)->first();

      $clients = explode(",", @$campus_images->filename);

      // $clients = array_reverse($clients);

      $clients = array_filter($clients);

      $clients = array_values($clients);

      // dd($gallery);

      return view('front.dynamic-content', compact('dynamic_contents', 'parent_menu_id', 'content_type', 'sub_menu_id', 'child_menu_id', 'sub_menu', 'side_bar_menu', 'team_details', 'team_tabs', 'prospects', 'post_tabs', 'counts', 'content_list', 'gallery', 'services', 'recent_news', 'clients'));
    } catch (\Exception $e) {
      return redirect('/');
    }
  }

  // News and Events

  public function getAllNews()
  {
    $slug = Route::currentRouteName();

    $news_menu_id = ParentMenu::select('id', 'name', 'slug')->where('slug', '=', $slug)->first();

    $recent_news = Post::where('parent_menu_id', @$news_menu_id->id)->orderBy('event_date', 'desc')->whereNull('deleted_at')->get();

    $categories = Category::all();

    return view('front.all-news', compact('recent_news', 'news_menu_id', 'categories'));
  }

  public function getNewsInDetail($news_slug = null)
  {
    $dynamic_content = Post::where('slug', $news_slug)->first();

    $news_menu_id = ParentMenu::select('id', 'name', 'slug')->where('id', '=', @$dynamic_content->parent_menu_id)->first();

    $recent_news = Post::where('parent_menu_id', @$news_menu_id->id)->orderBy('event_date', 'desc')->get();

    $gallery = GalleryTab::where('post_id', @$dynamic_content->id)->get();

    $categories = Category::join('posts', function ($posts) {
      $posts->on('posts.category_id', '=', 'categories.id');
    })->select('categories.id as id', 'categories.title as title')
      ->where('posts.parent_menu_id', @$news_menu_id->id)->whereNull('deleted_at')
      ->pluck('title', 'id');

    return view('front.news-in-detail', compact('dynamic_content', 'recent_news', 'gallery', 'news_menu_id', 'categories'));
  }

  public function getAllNewsFilter($category_id = null)
  {

    $news_menu_id = ParentMenu::select('id', 'name', 'slug')->where('layout_name', 'BLOG')->first();

    $recent_news = Post::where('parent_menu_id', $news_menu_id->id)->where('category_id', '=', $category_id)->orderBy('event_date', 'desc')->whereNull('deleted_at')->paginate(3);

    $latest_news = Post::where('parent_menu_id', '=', $news_menu_id->id)->where('category_id', '=', $category_id)->orderBy('event_date', 'desc')->whereNull('deleted_at')->limit(8)->get();

    $categories = Category::join('posts', function ($posts) {
      $posts->on('posts.category_id', '=', 'categories.id');
    })->select('categories.id as id', 'categories.title as title')
      ->where('posts.parent_menu_id', $news_menu_id->id)->whereNull('deleted_at')
      ->pluck('title', 'id');

    return view('front.all-news', compact('recent_news', 'latest_news', 'news_menu_id', 'categories'));
  }

  public function getServiceDetail($slug = null)
  {
    $parent_menu_id = ParentMenu::select('slug', 'id', 'name')->where('slug', 'services')->first();
    $sub_menu_id = SubMenu::select('slug', 'id', 'name')->where('slug', $slug)->first();

    $services = Post::join('sub_menus', function ($sub_menus) {
      $sub_menus->on('sub_menus.id', 'posts.child_menu_id');
    })->select('posts.*')->where('posts.parent_menu_id', @$parent_menu_id->id)->orderBy('sub_menus.hierarchy')->whereNull('posts.deleted_at')->get();

    $dynamic_content = Post::where('sub_menu_id', $sub_menu_id->id)->first();

    if (@$dynamic_content->tab_section == 'Y') {
      $post_tabs = PostTab::where('post_id', '=', @$dynamic_content->id)->get();
    } else {
      $post_tabs = null;
    }

    $gallery = GalleryTab::where('post_id', @$dynamic_content->id)->get();

    $prospect = DownloadProspect::where('post_id', @$dynamic_content->id)->first();

    return view('front.service-detail', compact('parent_menu_id', 'sub_menu_id', 'services', 'dynamic_content', 'post_tabs'));
  }

  // Faculty Details

  public function getFaculty()
  {
    $service_menu_id = SubMenu::select('id')->where('slug', '=', 'services')->first();

    $services = Post::where('parent_menu_id', '=', @$service_menu_id->id)->orderBy('sub_menu_id')->orderBy('title')->get();

    $team_detail = FacultyDetail::join('link_faculties', function ($link_faculties) {
      $link_faculties->on('link_faculties.faculty_id', '=', 'faculty_details.id');
    })->join('posts', function ($posts) {
      $posts->on('posts.id', 'link_faculties.post_id');
    })->select('faculty_details.*', 'posts.sub_menu_id')->where('faculty_details.type', 'faculty')->whereNull('faculty_details.deleted_at')->whereNull('link_faculties.deleted_at')->orderBy('faculty_details.appointment', 'desc')->orderBY('posts.id')->get();

    return view('front.faculty-list', compact('team_detail', 'services'));
  }

  public function getTeamDetails($team_slug = null)
  {
    $team_detail = FacultyDetail::where('slug', $team_slug)->first();

    $schedules = FacultySchedule::where('faculty_id', $team_detail->id)->get();

    $department_id = LinkFaculty::where('faculty_id', $team_detail->id)->first();

    $department = Post::where('id', $department_id->post_id)->first();

    return view('front.faculty-detail', compact('team_detail', 'department', 'schedules'));
  }

  public function getFacilityDetail($sub_slug = null)
  {
    // dd($child_slug);

    $parent_menu_id = ParentMenu::select('slug', 'id')->where('slug', 'facilities')->first();

    $dynamic_contents = Post::where('slug', $sub_slug)->first();

    $sub_menu_id = SubMenu::select('slug', 'id')->where('id', $dynamic_contents->sub_menu_id)->first();

    $facilities = Post::where('parent_menu_id', '=', $parent_menu_id->id)->orderBy('id', 'asc')->where('title', '!=', @$dynamic_contents->title)->whereNotNull('sub_menu_id')->get();

    $dept_address = Address::where('post_id', $dynamic_contents->id)->first();

    if (@$dynamic_contents->tab_section == 'Y') {
      $post_tabs = PostTab::where('post_id', '=', @$dynamic_contents->id)->get();
    } else {
      $post_tabs = null;
    }

    $gallery = GalleryTab::where('post_id', @$dynamic_contents->id)->get();

    $prospect = DownloadProspect::where('post_id', @$dynamic_contents->id)->first();

    // dd($gallery);
    // dd($dynamic_contents);
    // dd($dynamic_contents->LinkFaculty[0]->facultyDetails);
    return view('front.facility-detail', compact('dynamic_contents', 'facilities', 'sub_menu_id', 'post_tabs', 'gallery', 'prospect', 'dept_address'));
  }

  // Testimonial

  public function testimonial()
  {
    $parent_menu_id = ParentMenu::select('id', 'name', 'slug')->where('slug', '=', 'testimonials')->first();

    $testimonial = Testimonial::paginate(4);

    return view('front.testimonials', compact('testimonial', 'parent_menu_id'));
  }

  public function getTestimonial(Request $request)
  {
    // dd($request->input('text'));
    $testimonial = Testimonial::where('title', 'LIKE', '%' . $request->input('text') . '%')->get();

    return response()->json($testimonial);
  }

  public function getTestimonialDetail($slug = null)
  {
    $testimonial = Testimonial::where('slug', $slug)->first();
    return view('front.testimonial-indetail', compact('testimonial'));
  }

  // Contact Us

  public function contactUs()
  {
    $address_list = Address::get();

    // dd($address);

    return view('front.contact-us', compact('address_list'));
  }

  public function careers()
  {
    return view('front.career');
  }


  public function getQuote($id = null)
  {
    $package = '';
    $timings = '';

    $address_list = Address::get();

    return view('front.get-quote', compact('address_list', 'package', 'timings'));
  }


  public function postContact(Request $request)
  {
    // dd($request->all());

    $this->validate($request, [
      //'g-recaptcha-response' => 'required|captcha',
      'cf-turnstile-response' => 'required',
    ]);

    $prev_route = basename(url()->previous());

    if ($prev_route == 'contact-us') {

      $data = array('name' => $request->name, 'email' => $request->email, 'phone' => $request->phone, 'subject' => $request->subject, 'city' => @$request->city, 'country' => @$request->country, 'message_content' => @$request->message, 'company' => @$request->company);

      Mail::send('front.mail-send', $data, function ($details) use ($data) {
        $details->to('info@safetyguard.com')->from($data['email'], $data['name'])->replyTo($data['email'], $data['name'])->subject('Enquiry Details');
      });

      Mail::send('front.mail-reply', $data, function ($details) use ($data) {
        // dd($details);
        $details->to($data['email'])->from('info@safetyguard.com', 'Safety Guard')->subject('Safety Guard - Thank you');
      });

      return redirect()->back()->with('success', 'Thank you for contacting Safety Guard. Our relationship with you will be smooth and productive, and it will be an honor to serve you.<br/>We have recorded your inquiry in our CRM. While our representative contacts you soon');
    } else {

      //dd(@$request->all());

      $quote_data = GraduationRegister::create($request->all());

      $data = array('name' => $quote_data->name, 'email' => $quote_data->email, 'phone' => $quote_data->phone, 'subject' => @$quote_data->subject, 'city' => @$quote_data->city, 'country' => @$quote_data->country, 'message_content' => @$quote_data->message, 'company' => @$quote_data->company, 'no_of_vehicle' => @$quote_data->no_of_vehicle);

      Mail::send('front.mail-send', $data, function ($details) use ($data) {
        $details->to('info@safetyguard.com')->from($data['email'], $data['name'])->replyTo($data['email'], $data['name'])->subject('Quote Details');
      });

      Mail::send('front.quote-reply', $data, function ($details) use ($data) {
        //dd($details, $data);
        $details->to($data['email'])->from('info@safetyguard.com', 'Safety Guard')->subject('Safety Guard - Thank you');
      });

      return redirect()->route('quote-thanks')->with('success', 'Thank you for contacting Safety Guard. Our relationship with you will be smooth and productive, and it will be an honor to serve you.<br/>We have recorded your inquiry in our CRM. While our representative contacts you soon');
    }
  }

  public function postResume(Request $request)
  {
    // dd($request->all());

    $this->validate($request, [
      'cf-turnstile-response' => 'required',
      //'g-recaptcha-response' => 'required|captcha',
    ]);


    // $resume_exist = UploadedResume::where('email',$request->email)->where('designation_id',$request->designation_id)->whereNull('deleted_at')->get();

    $resume_exist = UploadedResume::where('email', $request->email)->whereNull('deleted_at')->get();

    //$designation_name = Career::where('id',$request->subject)->first();

    if ($resume_exist->count() == 0) {
      // dd($request->all());
      $resume_content = new UploadedResume();
      //$resume_content->designation_id = $request->designation_id;
      $resume_content->name = $request->name;
      $resume_content->email = $request->email;
      $resume_content->contact_no = $request->phone;
      // $resume_content->subject=$request->subject;
      // $resume_content->job_title=$request->job;
      $resume_content->message = !empty($request->message) ? $request->message : null;

      if (Input::hasFile('resume')) {
        $file = Input::file('resume');
        $filename = Carbon::now()->format('y-m-d') . '_' . $request->name . '_' . $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $destinationPath = storage_path('app/public/resume/');

        $destinationPath = storage_path('app/public/resume/');

        $data = array(
          'name' => $request->name, 'email' => $request->email, 'contact_no' => $request->mobile, 'subject' => $request->subject,
          'storage_path' => $destinationPath
        );

        Mail::send('front.send-resume-email', $data, function ($details) use ($data, $filename, $request) {

          $details->to('info@safetyguard.com')->from($data['email'], $data['name'])
            ->replyTo($data['email'], $data['name'])->subject('Resume Details')->attach($request->file('resume')->getRealPath(), array(
              'as'    => $request->file('resume')->getClientOriginalName(),
              'mime'  => $request->file('resume')->getMimeType()
            ));
        });


        $file->move($destinationPath, $filename);
        $resume_content->file_path = $filename;
      }
      $resume_content->save();

      return redirect()->route('careers')->with('success', 'Thank you for your application');
    } else {
      return redirect()->route('careers')->with('danger', 'Already Applied');
    }

    return redirect()->route('thank-you')->with('success', 'Thank you for your request for quotation. We will reply on your request as soon as possible !');
  }


  public function postApplication(Request $request)
  {
    // dd($request->all());

    $appointment = GraduationRegister::create($request->all());

    $data = array('name' => $appointment->name, 'email' => $appointment->email, 'mobile' => $appointment->mobile, 'subject' => $appointment->subject, 'message_content' => $appointment->message);

    Mail::send('front.mail-send', $data, function ($details) use ($data) {
      $details->to($data['email'])->from('supportmlr@sgs.com')->subject('Alumni Registration');
    });

    return back()->with('success', 'Thank You for Registration');
  }

  public function thankYou()
  {
    return view('front.thanks');
  }

  public function invokeCurlRequest($type, $url, $headers, $post)
  {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    if ($type == "POST") {

      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }

    $server_output = curl_exec($ch);
    // print_r($server_output);
    // exit();
    curl_close($ch);

    return $server_output;
  }
}
