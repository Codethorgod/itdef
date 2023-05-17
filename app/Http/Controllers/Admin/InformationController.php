<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function add(Request $request){
        return view('admin.informations.add');
    }

    public function list(Request $request){
        return view('admin.informations.list');
    }
}
