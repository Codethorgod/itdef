<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DefinitionController extends Controller
{
    public function add_def(Request $request){
        return view('admin.alldefinitions.definitions.add');
    }

    public function list_def(Request $request){
        return view('admin.alldefinitions.definitions.list');
    }

    public function add_question(Request $request){
        return view('admin.alldefinitions.questions.add');
    }

    public function list_question(Request $request){
        return view('admin.alldefinitions.questions.list');
    }

    public function add_articles(Request $request){
        return view('admin.alldefinitions.articles.add');
    }

    public function list_articles(Request $request){
        return view('admin.alldefinitions.articles.list');
    }


    //Alphabet

    public function list_cat_by_alpha(Request $request){
        $alphabet = \App\Models\Alphabet::get();
       
        return view('admin.alldefinitions.category.category_by_alphabet',compact('alphabet'));
    }

    public function statusalpha(Request $request){
		
		\App\Models\Alphabet::where('id',$request->post('id'))->update(['status'=>$request->post('status')]);
		
		return response(array('message'=>'Alphabet status changed successfully.'),200);
	}



    //branch

    public function add_cat_by_branch(Request $request){

        $alphabets = \App\Models\Alphabet::where('status','1')->get();

        return view('admin.alldefinitions.category.category_by_branch.add',compact('alphabets'));
    }

    public function list_cat_by_branch(Request $request){
        return view('admin.alldefinitions.category.category_by_branch.list');
    }
}
