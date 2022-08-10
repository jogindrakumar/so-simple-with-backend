<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::all();
        return view('backend.project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $image = $request->file('img');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1897,955)->save('upload/project/'.$name_gen);
        $save_url = 'upload/project/'.$name_gen;

        Project::insert([

            'project_name'       => $request->project_name,
            'descp'              => $request->descp,
            'live_link'          => $request->live_link,
            'youtube_link'       => $request->youtube_link,
            'buy_link'           => $request->buy_link,
            'img'                => $save_url,
            ]);
             $notification = array(
                'message' => 'PROJECT Inserted Successfully',
                'alert-type' => 'success'
                    );
            return redirect()->route('project.view')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $projects = Project::findOrFail($id);
        return view('backend.project.edit',compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $old_img = $request->old_img;
       
         if($request->file('img') ){

            unlink($old_img); 
                 $image = $request->file('img');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(1897,955)->save('upload/project/'.$name_gen);
                $save_url = 'upload/project/'.$name_gen;

                

        Project::FindOrFail($id)->update([

        'img'              =>   $save_url,
       
        ]);
         $notification = array(
            'message' => 'project image Updated Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('project.view')->with($notification);
         }else{

            
        Project::FindOrFail($id)->update([

             'project_name'       => $request->project_name,
            'descp'              => $request->descp,
            'live_link'          => $request->live_link,
            'youtube_link'       => $request->youtube_link,
            'buy_link'           => $request->buy_link,
        
       
        ]);
         $notification = array(
            'message' => 'your project details Updated Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('project.view')->with($notification);

         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $old_project_img = Project::findOrFail($id);
    	$img = $old_project_img->img;
    	unlink($img);
        
       Project::FindOrFail($id)->delete();

         $notification = array(
                        'message' => 'Project Delete Successfully',
                        'alert-type' => 'info'
                            );
                    return redirect()->back()->with($notification);
    }
}
