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
        
        $reports = Report::all();
        $statuses = Status::all();
        return view('admin.index', compact('status' , 'reports', 'statuses', 'sort'));

    }
}
