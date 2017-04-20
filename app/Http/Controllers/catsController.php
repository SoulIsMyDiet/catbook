<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Html\Requests;
use App\User;

class catsController extends Controller
{
    public function create(){
	return view('admin.cats.create');
    }
public function store(Request $request){
	User::create($request->all());
	return 'success';
}

}
