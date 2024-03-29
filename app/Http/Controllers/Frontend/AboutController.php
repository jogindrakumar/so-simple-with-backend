<?php

namespace App\Http\Controllers\Frontend;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $abouts = About::all();
        return view('backend.about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('backend.about.create');
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
        $request->validate([
            
            'fname'                 => 'required',
            'position'              => 'required',
            'desp_1'                => 'required',
            'desp_2'                => 'required',
            'twt'                   => 'required',
            'insta'                 => 'required',
            'fb'                    => 'required',
            'youtube'               => 'required',
            'p_email'               => 'required',
            'off_email'             => 'required',
            'phone'                 => 'required',
            'img'                   => 'required',
            ]);
            
        $image = $request->file('img');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(360,360)->save('upload/about/'.$name_gen);
        $save_url = 'upload/about/'.$name_gen;

        About::insert([

            'fname'                 => $request->fname,
            'position'              => $request->position,
            'desp_1'               => $request->desp_1,
            'desp_2'                => $request->desp_2,
            'twt'                   => $request->twt,
            'insta'                 => $request->insta,
            'fb'                    => $request->fb,
            'youtube'               => $request->youtube,
            'p_email'               => $request->p_email,
            'off_email'             => $request->off_email,
            'phone'                 => $request->phone,
            'img'                   => $save_url,
            ]);
             $notification = array(
                'message' => 'about Inserted Successfully',
                'alert-type' => 'success'
                    );
            return redirect()->route('about.view')->with($notification);
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
        $abouts = About::findOrFail($id);
        return view('backend.about.edit',compact('abouts'));
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
                    Image::make($image)->resize(360,360)->save('upload/about/'.$name_gen);
                    $save_url = 'upload/about/'.$name_gen;

                

        About::FindOrFail($id)->update([

        'img'              =>   $save_url,
       
        ]);
         $notification = array(
            'message' => 'your profile picture Updated Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('about.view')->with($notification);
         }else{

            
        About::FindOrFail($id)->update([

            'fname'                 => $request->fname,
            'position'              => $request->position,
            'desp_1'               => $request->desp_1,
            'desp_2'                => $request->desp_2,
            'twt'                   => $request->twt,
            'insta'                 => $request->insta,
            'fb'                    => $request->fb,
            'youtube'               => $request->youtube,
            'p_email'               => $request->p_email,
            'off_email'             => $request->off_email,
            'phone'                 => $request->phone, 
       
        ]);
         $notification = array(
            'message' => 'your profile details Updated Successfully',
            'alert-type' => 'success'
                );
        return redirect()->route('about.view')->with($notification);

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
    }
}
