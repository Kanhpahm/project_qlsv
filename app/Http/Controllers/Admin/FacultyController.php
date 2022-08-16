<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FacultyRequest;
use App\Http\Services\FacultyService;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    
    protected $facultyService;
    public function __construct( FacultyService $facultyService)
    {
        $this->facultyService = $facultyService;
    }

    public function index(){
        $faculties = Faculty::select('faculties.*')
        ->orderBy('id','DESC')
        ->Paginate(7);
     return view('admin.faculties.index',['faculties'=>$faculties]);
    }

    public function create(){
        return view('admin.faculties.add');
    }

    public function store(FacultyRequest $request){
        $this->facultyService->create($request);
        return redirect()->back();
    }
}
