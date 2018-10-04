<?php

namespace App\Http\Controllers\Ecommerce\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use CartProvider;
use Syscover\ShoppingCart\Item;
use App\Product;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
    	// CartProvider::instance('shopping')->destroy();
    	$cas = 'new';
    	$id = $request->input('product_id');
    	$id = \Crypt::decrypt($id);
    	$cart_items = CartProvider::instance('shopping')->getCartItems();
    	foreach ($cart_items as $key => $value) {
    		if ($value->id == $id) {
    			$cas = 'old';
    			$rowId = $value->rowId;
    			$quantity = $value->quantity + 1;
    		}
    	}
    	switch ($cas) {
    		case 'new':
    			$product = Product::find($id);
		    	CartProvider::instance('shopping')->add(new Item(
		    		$id, 
		    		$product->product_name,
		    		1, 
		    		$product->product_discounted_price, 
		    		1.00, 
		    		true, 
		    		[], 
		    		['orignal_price' => $product->product_price]
		    	));
		    	$object = new \stdClass;
		    	$object->id = \Crypt::encrypt($product->id);
		    	$object->name = $product->product_name;
		    	$object->price = $product->product_discounted_price;
		    	$object->quantity = '1';
		    	$object->status = 'new';
		    	$object->totalItems = CartProvider::instance('shopping')->getQuantity();
				$object = json_encode($object);

		    	return $object;
    			break;
			case 'old':
				CartProvider::instance('shopping')->setQuantity($rowId, $quantity);
				return CartProvider::instance('shopping')->getQuantity();
				break;
    		
    		
    	}
    	
    	


    }
}
