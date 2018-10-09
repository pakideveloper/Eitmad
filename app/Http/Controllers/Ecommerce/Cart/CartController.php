<?php

namespace App\Http\Controllers\Ecommerce\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Session;
use Cart;

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
    	$cart_items = Session::get('shopping');
        if ($cart_items) {
            foreach ($cart_items as $key => $value) {
            
                if (\Crypt::decrypt($value->id) == \Crypt::decrypt($id)) {
                    $cas = 'old';
                    $rowId = $value->rowId;
                    $quantity = $value->quantity + 1;
                }
            }
        }
    	
    	switch ($cas) {
    		case 'new':
                $cart = new  \stdClass();
                $cart_items = array();
    			$product = Product::find(\Crypt::decrypt($id));

                $object = new \stdClass();
                $object->rowId = uniqid();
                $object->id = $id;
                $object->name = $product->product_name;
                $object->price = $product->product_discounted_price;
                $object->title_image = $product->title_image;
                $object->quantity = '1';

                array_push($cart_items, $object);
                $cart->cart_items = $cart_items;
                $cart->totalQuantity = '1';
                $cart->subTotal = $product->product_discounted_price;
                $cart->total = $product->product_discounted_price;
                // print_r($cart);
                // die();
    			
		    	
		    	// $item = CartProvider::instance('shopping')->getCartItems()->get($rowId);
		    	$total_quantity = Cart::instance('shopping')->count();
		    	$object = new \stdClass;
		    	$object->discount_id = $product->id;
		    	// $object->rowId = $item->rowId;
		    	$object->name = $product->product_name;
		    	$object->price = $product->product_discounted_price;
		    	$object->quantity = '1';
		    	$object->status = 'new';
		    	$object->totalItems = $cart->totalQuantity;
		    	$object->total = $cart->subTotal;
				$object = json_encode($object);

                Session::put('shopping', $cart);
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
        // Session::flush('shopping');
        // session()->regenerate();
        // die();
        $cart_items = Session::get('shopping');
            print_r($cart_items);
            die();
    	// session()->regenerate();
    	// die();
        // Cart::instance('shopping')->add('192ao12', 'Product 1', 1, 9.99);
    	// CartProvider::instance('shopping')->destroy();
        // CartProvider::instance('shopping')->add(new Item(
        //             3, 
        //             'name',
        //             1, 
        //             2222, 
        //             1.00, 
        //             true, 
        //             [], 
        //             ['orignal_price' => 3000,'image' => 'image']
        //         ));
    	// die();
        Cart::instance('shopping')->destroy();
    	$cart_items = Cart::instance('shopping')->content();
    	print_r($cart_items);
        // foreach ($cart_items as  $value) {
        //     print_r($value->price);
        // }
    	// die();
    	// $object = new \stdClass();
    	// $object->rowId = '23233nm34m3n4m3n'; 
    	// $object->name = 'name'; 
    	// $object->price = '100'; 
    	// $object->quantity = '3'; 
    	// $object->total = '300'; 
    	// Session::set('mySession') = $object;
    	// Session::set('variableName', $object);
    	// session(['key' => $object]);
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
    // $cart_items = session('key');
    // 	print_r($cart_items);
    }
    public function cartAdd($object){

        Cart::instance('shopping')->add(
                    $object->id, 
                    $object->product_name,
                    1, 
                    $object->product_discounted_price,
                    ['orignal_price' => $object->product_price,'image' => $object->title_image]
                );
    }
}
