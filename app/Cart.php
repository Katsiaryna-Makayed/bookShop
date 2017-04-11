<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	function addToCart($id, $count=1)
    {         
     	$_SESSION['cart'][$id]=$_SESSION['cart'][$id]+$count;      
    	return true;
    }     
      
    function delFromCart($id, $count=1){}
      
    function clearCart(){}
}
