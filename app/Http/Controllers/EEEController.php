<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class EEEController extends Controller
{
    public function eee()
    {
    	$eeestudent_info=DB::table('students_tbl')
    	->where(['student_department'=>4])
    	->get();
    	
    	$manage_student=view('admin.eee')
    	->with('eee_student_info',$eeestudent_info);
    	return view('layout')->with('eee',$manage_student);

    }
}