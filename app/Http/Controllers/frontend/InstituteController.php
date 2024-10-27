<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\CourseModel;
use App\Models\Session;
use App\Models\User;
use App\Models\Notice;
use App\Models\Branch;
use App\Models\stRegAvlableAmount;
use Auth;
class InstituteController extends Controller
{
    public function dashboard(){
        // Artisan auto command
        Artisan::call('optimize:clear');

        $data['instituteStudent']=Student::where('created_by',Auth::user()->id)->count();
        // male female chart
        $data['maleStudent']= Student::where('created_by',Auth::user()->id)->where('gender','male')->count();
        $data['femaleStudent']= Student::where('created_by',Auth::user()->id)->where('gender','female')->count();

        $data['myStudent']=Student::orderBy('id','desc')->with('course','session')->where('created_by',Auth::user()->id)->where('status','pending')->get();
        $institute=Auth::user()->branch_id;
       $data['amount']=stRegAvlableAmount::orderBy('id','desc')->where('institute_id', $institute)->first();
      
       $data['notice'] = Notice::orderBy('id', 'desc')->where('status', 'Active')->get()->map(function ($notice) 
       {
            $notice->time_ago = \Carbon\Carbon::parse($notice->date)->diffForHumans();
            return $notice;
        });
 
        return view('Institute.Dashboard',$data);
    }

    public function welcome(){
        $branch=Branch::where('status','Approved')->get();
    
        return view('welcome',compact('branch'));
    }
}
