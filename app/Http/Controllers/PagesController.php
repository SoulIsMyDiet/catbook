<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class PagesController extends Controller
{
	public function index(){
		if(view::exists('pages.index'))
	//	return view('pages.index', ['text' => '<b>Hi</b>']);
			return view('pages.index')
			->with('text', '<b>hello</b>')
			->with(['location' => 'Poland', 'city' => 'Gdynia']);
		
		else
			return 'No view available';
	}
}
