<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobType;
use App\Models\Category;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    // this method will show jobs page
    public function index(Request $request){

        $categories = Category::where('status', 1)->get();
        $jobTypes = JobType::where('status', 1)->get();

        $jobs = Job::where('status', 1);

        // Search using keywords 
        if(!empty($request->keyword)){
            $jobs = $jobs->where(function($query) use($request){
                $query->orWhere('title', 'like', '%'.$request->keyword.'%');
                $query->orWhere('keywords', 'like', '%'.$request->keyword.'%');
            });
        }
        
        // Search by location 
        if(!empty($request->location)){
            $jobs = $jobs->where('location', $request->location);
        }

        // Search by category 
        if(!empty($request->category)){
            $jobs = $jobs->where('category_id', $request->category);
        }
        
        // Search using Job Type 
        $jobsTypeArray = [];
        if(!empty($request->jobType)){
            $jobsTypeArray = explode(',', $request->jobType);
            $jobs = $jobs->whereIn('job_type_id', $jobsTypeArray);
        }

        // Search using Experience 
        if($request->has('experience') && $request->experience !== ''){
            $jobs = $jobs->where('experience', $request->experience);
        }

        if($request->sort === '0'){
            $jobs = $jobs->orderBy('created_at', 'ASC');
        }else {
            $jobs = $jobs->orderBy('created_at', 'DESC');
        }

        $jobs = $jobs->paginate(9);

        return view('front.jobs', [
            'categories' => $categories,
            'jobTypes' => $jobTypes,
            'jobs' => $jobs,
            'jobTypeArray' => $jobsTypeArray
        ]);
    }
}