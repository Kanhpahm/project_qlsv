<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index(){
        $faculties = Faculty::select('faculties.*')->Paginate(5);
     return view('admin.faculties.index',['faculties'=>$faculties]);
    }
}
