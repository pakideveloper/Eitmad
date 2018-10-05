<?php

namespace App\Http\Controllers\Ecommerce\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use CartProvider;
use Syscover\ShoppingCart\Item;
use App\Product;
use Session;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
    	// CartProvider::instance('shopping')->destroy();
    	$cas = 'new';
    	$id = $request->input('product_id');
    	// echo $id;
    	// die();
    	// $id = \Crypt::decrypt($id);
    	$cart_items = CartProvider::instance('shopping')->getCartItems();
    	foreach ($cart_items as $key => $value) {
    		
    		if (\Crypt::decrypt($value->id) == \Crypt::decrypt($id)) {
    			$cas = 'old';
    			$rowId = $value->rowId;
    			$quantity = $value->quantity + 1;
    		}
    	}
    	switch ($cas) {
    		case 'new':
    			$product = Product::find(\Crypt::decrypt($id));
    			
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
		    	// $item = CartProvider::instance('shopping')->getCartItems()->get($rowId);
		    	$total_quantity = CartProvider::instance('shopping')->getQuantity();
		    	$object = new \stdClass;
		    	$object->discount_id = $product->id;
		    	// $object->rowId = $item->rowId;
		    	$object->name = $product->product_name;
		    	$object->price = $product->product_discounted_price;
		    	$object->quantity = '1';
		    	$object->status = 'new';
		    	$object->totalItems = $total_quantity;
		    	$object->total = CartProvider::instance('shopping')->total;
				$object = json_encode($object);

		    	return $object;
    			break;
			case 'old':
				CartProvider::instance('shopping')->setQuantity($rowId, $quantity);
				$item = CartProvider::instance('shopping')->getCartItems()->get($rowId);
				$object = new \stdClass;
		    	$object->discount_id = \Crypt::decrypt($id);
		    	$object->price = $item->price;
		    	$object->name = $item->name;
		    	$object->quantity = $item->quantity;
		    	$object->sub_total = $item->subtotal;
		    	$object->total = CartProvider::instance('shopping')->total;
		    	$object->total_quantity = CartProvider::instance('shopping')->getQuantity();
		    	$object->status = 'old';
				$object = json_encode($object);

		    	return $object;
				break;
    		
    		
    	}
    	
    	


    }

    public function test(){
    	// CartProvider::instance('test')->destroy();
    	$object = new \stdClass();
    	$object->rowId = '23233nm34m3n4m3n'; 
    	$object->name = 'name'; 
    	$object->price = '100'; 
    	$object->quantity = '3'; 
    	$object->total = '300'; 
    	// Session::set('mySession') = $object;
    	// Session::set('variableName', $object);
    	session(['key' => $object]);
    	// $sess = Session::get('mySession'); 
    	// print_r($sess);
    	// if(CartProvider::instance('test')->add(new Item('293ad', 'Product 1', 1, 9.99))){
    	// 	echo "hogya";
    	// }
	// $product = new stdClass;
	// $product = json_encode($product);
	// // print_r($product);
	// return $product;
	// die();
	// CartProvider::instance('shopping')->destroy();
    $cart_items = session('key');
    	print_r($cart_items);
    }
}
