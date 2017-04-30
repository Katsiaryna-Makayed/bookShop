<?php 

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
//use App\Categories;
use App\Products;


class BreadComposer{
	 public function compose(View $view)
	 {
	// 	$url = $_SERVER['REQUEST_URI'];
	// 	$category2 = null;
	// 	$book = null;
	// 	$second = null;
	// 	$arr = explode('/', $url);
	// 	if($arr[1] == 'genre')
	// 	{
	// 		$category = Categories::where('showhide', 'show')->where('id', $arr[2])->first();
	// 		//dd ($category);
	// 	//	if()
	// 	//	$category2=Products::where('showhide', 'show')->where('categories_id', $id)->get();
	// 		if(isset($arr[3]))
	// 		{
	// 			$category2 = Categories::where('showhide', 'show')->where('id', $arr[3])->first();
	// 		} 

	// 	}
	// 	else {
	// 		$category = new Categories;

	// 	}

	// 	if($arr[1] == 'sales')
	// 	{
	// 		$second = 'Акции';
	// 	}

	// 	if($arr[1] == 'new')
	// 	{
	// 		$second = 'Новинки';
	// 	}

	// 	if($arr[1] == 'ourcontacts')
	// 	{
	// 		$second = 'Контакты';
	// 	}

	// 	if($arr[1] == 'cart')
	// 	{
	// 		$second = 'Корзина';
	// 	}





	// 	if($arr[1] == 'book')
	// 	{
	// 		$book = Products::where('showhide', 'show')->where('id', $arr[2])->first();

	// 	}


	// 	$view->with('category', $category)->with('category2', $category2)->with('book', $book)->with('second', $second);	
	}
}
