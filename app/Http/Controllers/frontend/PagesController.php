<?php

namespace App\Http\Controllers\frontend;

use App\Models\Post;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index(){

        $job = Post::all();
        return view('pages.index',compact('job'));
    }
    public function about(){
        return view('pages.about');
    }



    public function blog_single(){
        return view('pages.blog-single');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function faq(){
        return view('pages.faq');
    }
    public function gallery(){
        return view('pages.gallery');
    }

    // public function job_single($id){
    //     $job = Jobs::find($id);
    //     $singlejob = Post::all();
    //     return view('pages.job-single',[
    //         'job'=>$job
    //     ]);
    // }
    public function portfolio_single(){
        return view('pages.portfolio-single');
    }
    public function portfolio(){
        return view('pages.portfolio');
    }
    public function service_single(){
        return view('pages.service-single');
    }
    public function services(){
        return view('pages.services');
    }
    public function testimonials(){
        return view('pages.testimonials');
    }


}
