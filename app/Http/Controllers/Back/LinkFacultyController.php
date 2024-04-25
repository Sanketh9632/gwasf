<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\ {
    Http\Controllers\Controller,
    Models\FacultyDetail,
    Models\FacultyTab,
    Models\LinkFaculty,
    Models\Post,
    Models\ParentMenu,
    Repositories\LinkFacultyRepository
};
use DB;
use Illuminate\Support\Str;

class LinkFacultyController extends Controller
{

    use Indexable;

    /**
     * Create a new PostController instance.
     *
     * @param  \App\Repositories\PostRepository $repository
     */
    public function __construct(LinkFacultyRepository $repository)
    {
        $this->repository = $repository;

        $this->table = 'link_faculties';
    }
    /**
     * Display a listing of the sliders.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = ($request['search'])?$request['search']:null;
        $link_faculties = LinkFaculty::orderBy('id','desc')->paginate(10);

        if(isset($search))
        {
            $link_faculties = LinkFaculty::join('faculty_details', function($faculty_details){
                $faculty_details->on('faculty_details.id','=','link_faculties.faculty_id');
            })->select('link_faculties.*','faculty_details.id as faculty_id')->where('faculty_details.name', 'like', "%".$search."%")->paginate(10);

            // $link_faculties =   LinkFaculty::join('posts', function($posts){
            //     $posts->on('posts.id','=','link_faculties.post_id');
            // })->select('link_faculties.*','posts.id as post_id')->where('title', 'like', "%".$search."%")->paginate(10);
        }
        $links = $link_faculties->appends ($request->all())->links ('back.pagination');
        // Ajax response
        if ($request->ajax ()) {

            return response ()->json ([
                'table' => view ("back.link-faculties.table", ['link_faculties' => $link_faculties])->render (),
                'pagination' => $links->toHtml (),
            ]);
        }

        return view('back.link-faculties.index', compact ('link_faculties'));
    }

    /**
     * Show the form for creating a new faculty.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $array_select = array('' => '--Select--');

        $dept_menu_id = ParentMenu::select('id')->where('slug','=','services')->first();

        $post_pages = Post::where('parent_menu_id', $dept_menu_id->id)->orderBy('sub_menu_id')->orderBy('title')->pluck('title','id');

        foreach ($post_pages as $key => $value) 
        {
            $array_select[$key] = $value;
        }

        $post_pages = $array_select;


        $actual_post_page = null;
        $actual_faculty_name = null;
        $actual_post_tab = null;

        $faculty_select = array('' => '--Select--');

        $faculty_names = FacultyDetail::all()->where('type','faculty')->pluck('full_name','id');

        foreach($faculty_names as $key => $value)
        {
        	$faculty_select[$key] =$value;
        }

        $faculty_names = $faculty_select;
       // $faculty_tabs = null;

        //dd($post_pages);

        return view('back.link-faculties.create',compact('post_pages','actual_post_page','faculty_names','actual_faculty_name','actual_post_tab'));
    }

    
    public function store(Request $request)
    {

        //dd($request->all());

     $result = $this->repository->store($request);

     if($result == 'success')
     {
        return redirect(route('link-faculties.index'))->with('category-ok', __('Faculty details linked to page successfully'));
    }
    else
    {
       return redirect(route('link-faculties.index'))->with('category-danger', __('The link is already exist'));
   }


}

    /**
     * Show the form for editing the specified slider.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(LinkFaculty $link_faculty)
    {
      // dd($link_faculty);

        $link_faculties = $link_faculty;

        $dept_menu_id = ParentMenu::select('id')->where('slug','=','services')->first();

        $post_pages = Post::where('parent_menu_id', $dept_menu_id->id)->orderBy('sub_menu_id')->orderBy('title')->pluck('title','id');

        foreach ($post_pages as $key => $value) 
        {
            $array_select[$key] = $value;
        }

        $post_pages = $array_select;

        // $faculty_select = array('' => '--Select--');

        $faculty_names = FacultyDetail::all()->where('type','faculty')->pluck('full_name','id');
        
        foreach($faculty_names as $key => $value)
        {
        	$faculty_select[$key] = $value;
        }

        $faculty_names = $faculty_select; 

        $actual_post_page = $link_faculty->post_id;
        $actual_post_tab = $link_faculty->post_tab_id;
        $actual_faculty_name =$link_faculty->faculty_id;



        return view('back.link-faculties.edit', compact ('actual_post_page','link_faculties','actual_post_tab','actual_faculty_name','post_pages','faculty_names'));
    }

    /**
     * Update the specified slider in storage.
     *
     * @param  \App\Http\Requests\SliderRequest  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, LinkFaculty $link_faculty)
    {

        $result = $this->repository->update($link_faculty, $request);

        if($result == 'success')
        {
           return redirect(route('link-faculties.index'))->with('category-ok', __('The faculty details has been successfully updated'));
       }
       else
       {

           return redirect(route('link-faculties.index'))->with('category-danger', __('The faculty already exist. Cannot update'));
       }

   }

     /**
     * Update "active" field for slider.
     *
     * @param  \App\Models\Slider $slider
     * @param  bool $status
     * @return \Illuminate\Http\Response
     */
     public function updateActive(LinkFaculty $link_faculty, $status = false)
     {
        $link_faculty->active = $status;
        $link_faculty->save();

        return response ()->json ();
    }

    /**
     * Remove the specified slider from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(LinkFaculty $link_faculty)
    {
        $link_faculty->delete ();
        return response ()->json ();
    }


}
