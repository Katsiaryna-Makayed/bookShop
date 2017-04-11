<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Goods;


class GenreController extends Controller
{
    public function getIndex($id){

    	$result = Categories::where('showhide', 'show')->where('parent_id', $id)->get();
		
		if(sizeof($result) == 0){
			$cat_number=Categories::find($id);		
			return view('try')->with('cat_number', $cat_number);	
		}

		else return view('category')->with('result', $result);	
	}
}
