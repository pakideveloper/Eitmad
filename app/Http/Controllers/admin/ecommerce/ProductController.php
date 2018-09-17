<?php

namespace App\Http\Controllers\admin\ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Product_Category;
use App\Product_Sub_Category;
use App\Product_File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "string";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Product_Category::all();
        $sub_categories = Product_Sub_Category::all();
        $brands = Brand::all();
        
        return view ('admin/ecommerce/modules/product/create', compact('categories', 'sub_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->storeValidation();
        $product = new Product();
        $product->product_name = $request->product_name ;
        $product->product_size = $request->product_size ;
        $product->product_colour = $request->product_colour ;
        $product->product_price = '333' ;
        $product->product_quantity = $request->product_quantity ;
        $product->sub_category_id = $request->sub_category_id ;
        $product->product_discounted_price = '1' ;
        $product->brand_id = '1' ;
        $product->discount_id = '2' ;

        $sub_category = Product_Sub_Category::find($product->sub_category_id);
        $features = json_decode($sub_category->feature_names);
        $features_array = array();
        foreach ($features as $key => $value) {
            $input = 'product_'.$value;
            $features_array[$value] = $request->$input;
        }
        $product->other_features = json_encode($features_array);
        $product->save();

        if ($request->images) {
            $images = $request->images;
            foreach ($images as $key => $image) {
                $product_file = new Product_File();
                $product_file->product_id = $product->id;                
                $file_name = $image -> getClientOriginalName();
                $file_name = uniqid().$file_name;
                $file_name = preg_replace('/\s+/', '', $file_name);
                $file_type = $image->getClientOriginalExtension();
                $image -> move(public_path().'/admin/upload/products', $file_name);
                $file_size = $image->getClientSize();
                $file_size = $file_size/1000;
                $file_size = $file_size.' '.'kb';
                $product_file->product_file_name = $file_name;
                $product_file->product_file_size = $file_size;
                $product_file->product_file_extension = $file_type;
                $product_file -> save();
            }
            
        }
       
        // $product-> = $request-> ;
        // $product-> = $request-> ;
        // $product-> = $request-> ;
        // $product-> = $request-> ;
        // $product-> = $request-> ;
        // $product-> = $request-> ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getFeatures($id){
        $sub_category = Product_Sub_Category::find($id);
        $features = json_decode($sub_category->feature_names);
        return $features;
    }
}
