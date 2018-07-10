<?php

namespace rni\Http\Controllers\Admin\Super\Faq;

use Illuminate\Http\Request;

use rni\Http\Requests;
use rni\Http\Controllers\Controller;
use rni\Http\Controllers\Admin\Super\BaseController;
use rni\Faq;

class FaqController extends Controller
{

	public function index(){
		return view('adminpanel.super.faq.index')->with('recFaq',FaQ::where('active',1)->orderBy('noUrut','asc')->get());
	}	

	public function create(){
		return view('adminpanel.super.faq.create');
	}

    public function store(Request $request){

    	$this->validate($request, [
	        'question' => 'required',
	        'answer' => 'required',
	    	'noUrut' => 'unique:faq,noUrut'
	    ]);

    	$store = new Faq;
    	$store->question = $request->question;
    	$store->answer = $request->answer;
    	$store->noUrut = $request->noUrut;
    	$store->active = 1;
    	$store->save();

    	return redirect(route('super.pengaturan.faq'));
    }

    public function edit($id){
		return view('adminpanel.super.faq.edit')->with('recFaqByID',Faq::find($id));
	}

    public function update($id, Request $request){

    	$this->validate($request, [
	        'question' => 'required',
	        'answer' => 'required',
	    	// 'noUrut' => 'unique:faq,noUrut'
	    ]);

    	$update = Faq::findorFail($id);

    	$update->question = $request->question;
    	$update->answer = $request->answer;
    	// $update->noUrut = $request->noUrut;
    	$update->active = 1;
    	$update->save();
       
    	return redirect(route('super.pengaturan.faq'));
    }

    public function delete($id){
    	$faq = Faq::findorFail($id);

    	$faq->active = 0;
    	$faq->save();

    	return redirect(route('super.pengaturan.faq'));
    }
}
