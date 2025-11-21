<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(Request $request){

        $sort = $request->input('sort');
        if($sort != 'asc' && $sort != 'desc'){
            $sort = 'desc';
        }

        $status = $request->input('status');
        $validate = $request->validate([
            'status' => "exists:statuses,id"
        ]);
        
        if($validate){
            $reports = Report::where('status_id', $status)
            ->orderBy('created_at', $sort)
                ->paginate(8);
        } else {
            $reports = Report::where('user_id',)
            ->orderBy('created_at', $sort)
            ->paginate(8);
        }
        $statuses = Status::all();
        return view('admin.index', compact('status' , 'reports', 'statuses', 'sort'));

    }
}
