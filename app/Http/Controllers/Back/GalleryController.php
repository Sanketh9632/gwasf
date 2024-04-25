<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\ {
    Http\Controllers\Controller,
    Http\Requests\FacultyRequest,  
    Models\GalleryTab,
    Models\ParentMenu,
    Models\Post,
    Repositories\GalleryRepository
};
use DB;
use Illuminate\Support\Str;

class GalleryController extends Controller
{

    use Indexable;

    /**
     * Create a new PostController instance.
     *
     * @param  \App\Repositories\PostRepository $repository
     */
    public function __construct(GalleryRepository $repository)
    {
        $this->repository = $repository;

        $this->table = 'gallery_tabs';
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

        $project = Post::join('gallery_tabs', function($gallery_tabs){

                    $gallery_tabs->on('gallery_tabs.post_id','=','posts.id');

                })->select('posts.*')->whereNull('gallery_tabs.deleted_at')->groupBy('posts.id')->paginate(10);


        if(isset($search))
        {
            $project =  Post::where('title', 'like', "%".$search."%")->paginate(10);
        }
        $links = $project->appends ($request->all())->links ('back.pagination');
        // Ajax response
        if ($request->ajax ()) {

            return response ()->json ([
                'table' => view ("back.gallery.table", ['project' => $project])->render (),
                'pagination' => $links->toHtml (),
            ]);
        }

        // dd($project);

        return view('back.gallery.index', compact ('project'));
    }

    /**
     * Show the form for creating a new gallery.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $array_select = array('' => '--Select--');

        $post_id = ParentMenu::where('slug','services')->first();
	$about_id = ParentMenu::where('slug','about-us')->first();

        $project_page = Post::where('parent_menu_id', $post_id->id)->orWhere('parent_menu_id', $about_id->id)->orderBy('title')->pluck('title','id');
        
	// $project_page = Post::all()->pluck('title','id');

        foreach ($project_page as $key => $value) 
        {
            $array_select[$key] = $value;
        }

        $project_page = $array_select;  

        $project = null;
        $post_tabs = null;
        $actual_project_page = null;


        return view('back.gallery.create',compact('project','post_tabs','project_page','actual_project_page'));
    }

    
    public function store(Request $request)
    {
       // dd($request->all());

       $result = $this->repository->store($request);
       
       if($result == 'success')
       {
            return redirect(route('gallery.index'))->with('category-ok', __('Gallery details added successfully'));
       }
       else
       {

         return redirect(route('gallery.index'))->with('category-danger', __('The Gallery already exist'));
       }    
    }

    /**
     * Show the form for editing the specified slider.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($post_link_page)
    {
        // dd($post_link_page_id);
        $project = Post::find($post_link_page);
        
        $post_tabs = GalleryTab::where('post_id',$project->id)->get();

        // dd($post_tabs);

        $array_select = array('' => '--Select--');

        $post_id = ParentMenu::where('slug','services')->first();
	$about_id = ParentMenu::where('slug','about-us')->first();

        $project_page = Post::where('parent_menu_id', $post_id->id)->orWhere('parent_menu_id', $about_id->id)->orderBy('title')->pluck('title','id');

        // $project_page = Post::all()->pluck('title','id');

        foreach ($project_page as $key => $value) 
        {
            $array_select[$key] = $value;
        }

        $project_page = $array_select;      

        $actual_project_page = $project->id;    
       

        return view('back.gallery.edit', compact ('project','post_tabs','project_page','actual_project_page'));
    }

    /**
     * Update the specified slider in storage.
     *
     * @param  \App\Http\Requests\SliderRequest  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $post_link_page)
    {
        $project = Post::find($post_link_page);

        // dd($request->all());
   
        $result = $this->repository->update($project, $request);

        if($result == 'success')
       {
             return redirect(route('gallery.index'))->with('category-ok', __('The Gallery details has been successfully updated'));
       }
       else
       {

         return redirect(route('gallery.index'))->with('category-danger', __('The Gallery already exist. Cannot update'));
       }
        
    }

     /**
     * Update "active" field for slider.
     *
     * @param  \App\Models\Slider $slider
     * @param  bool $status
     * @return \Illuminate\Http\Response
     */
    // public function updateActive(GalleryTab $faculty, $status = false)
    // {
    //     $faculty->active = $status;
    //     $faculty->save();

    //     return response ()->json ();
    // }

    /**
     * Remove the specified slider from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($post_link_page)
    {
        $project = Post::find($post_link_page);

        GalleryTab::where('post_id',$project->id)->delete();

        return response ()->json ();
    }


    public function getSubContentList(Request $request)
    {
        $subContentList = PostTab::where('post_id',$request->id)->whereNull('deleted_at')->pluck('post_tabs.tab_title', 'post_tabs.id');

        return response ()->json($subContentList);
    }

     public function deletePostTabSection(Request $request)
    {
       // dd($request->all());
        //$content = PostTab::where('id',$request->id)->first();
        $contents = GalleryTab::find($request->id);
        
        $contents->delete();

        return 'true';
       
    }

}
