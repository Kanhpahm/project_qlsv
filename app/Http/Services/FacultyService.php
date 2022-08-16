<?php

namespace App\Http\Services;

use App\Models\Faculty;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class FacultyService
{
    public function create($request){
        try {
        $faculty = new Faculty();
        $faculty->fill($request->all());
        $faculty->save();
        Session::flash('success','Thêm mới thành công !');
        return redirect()->route('faculty');
        }
        catch (\Exception $err){
            Session::flash('error', 'Thêm khóa học lỗi');
            Log::info($err->getMessage());
            return false;
        }
        return redirect()->route('faculty');
    }
}
