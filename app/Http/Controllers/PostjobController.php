<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostjobController extends Controller
{
    public function post(){

        return view('jobPost.post-job');
    }

    public function addimage(Request $request)
    {

        $postjob = new Post;

        // if ($request->hasFile('image')) {
        //             $file = $request->file('image');
        //             $extension = $file->getClientOriginalExtension();
        //             $filename = time() . '.' . $extension;
        //             $file->move('uploads/employee/', $filename);
        //             $postjob->image = $filename;
        //         } else {


        //             $postjob->image = 'noimage.jpg';
        //         }


        // echo "<pre>";
        // print_r($request->all());

        // $filename = time() . 'ws.' . $request->file('image')->getClientOriginalExtension();
        // echo $filename;
        // die;

        // echo $request->file('image')->storeAs('upload',$filename);

        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time() . 'ws.' . $request->file('image')->getClientOriginalExtension();
        //    $file = $request->file('image')->storeAs('public/upload',$filename);
           $file->move('uploads/employee/', $filename);
           $postjob->image = $filename;

        }else{
            $postjob->image = 'no image.jpg';
        }


        $postjob->job_title= $request->input('job_title');
        $postjob->location = $request->input('location');
        $postjob->job_region = $request->input('job_region');
        $postjob->job_type = $request->input('job_type');
        $postjob->job_description = $request->input('job_description');
        $postjob->save();

        return redirect('postjob')->with('status','Job posted successfully');




    }

    public function job_listing(){

        $job = Post::all();
        return view('jobPost.job-listings',compact('job'));
    }




}
