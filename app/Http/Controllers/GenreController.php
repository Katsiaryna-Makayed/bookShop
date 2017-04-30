<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Products;
use Auth;



class GenreController extends Controller
{
    public function getCategory($id){

    	$category = Categories::where('showhide', 'show')->where('parent_id', $id)->get();
		$category_one = Categories::where('showhide', 'show')->where('id', $id)->first();
		return view('category')->with('category', $category)->with('category_one', $category_one);	
	}

	public function getGoods($id1 = 0, $id = 0){
		$books=Products::where('showhide', 'show')->where('categories_id', $id)->get();
		return view('good')->with('books', $books);	
	}

	public function getBook($id){
		$book = Products::where('showhide', 'show')->where('id', $id)->first();
		$author = $book->authors_id;
		$author_books = Products::where('showhide', 'show')->where('authors_id', $author)->get();

		//$user = Auth::user();


		//$comments=Products::where('showhide', 'show')->find($id)->comments; // выбираем все комментарии, который относятся к статье


		//return view('try')->with('book', $book)->with('author_books', $author_books)->with('comments', $comments)->with('user', $user);	
		return view('try')->with('book', $book)->with('author_books', $author_books);	
	}
}

