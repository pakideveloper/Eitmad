<?php

namespace App\Http\Controllers\admin\ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Brand;
use App\Brand_Sub_Category_Assoc;
use App\Product_Sub_Category;
use File;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::latest()->get();
        return view('admin/ecommerce/modules/brand/index',compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $subcategories = Product_Sub_Category::all();
        return view('admin/ecommerce/modules/brand/create',compact('subcategories')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $this->storeValidate($request);
        $brand = new Brand(); 
        $subcategories = new Product_Sub_Category();
        $brand->brand_name = $request->brand_name;
        $subcategories->sub_category_id = $request->sub_category_id;
        $file_name = $request->file['0'] -> getClientOriginalName();
        $file_name = uniqid().$file_name;
        $file_name = preg_replace('/\s+/', '', $file_name);
        $file_type = $request->file['0']->getClientOriginalExtension();
        $request->file['0'] -> move(public_path().'/admin/upload/brands',$file_name);
        $file_size = $request->file['0']->getClientSize();
        $file_size = $file_size/1000;
        $file_size = $file_size.' '.'kb';
        $brand->brand_logo = $file_name;
        $brand->brand_logo_size = $file_size;
        $brand->brand_logo_file_type = $file_type;
        $brand->save();
         if ($request->subcategories) 
        {
            foreach ($request->subcategories as $key => $value) 
            {
                $Brand_Sub_Category_Assoc = new Brand_Sub_Category_Assoc();
                $Brand_Sub_Category_Assoc->sub_category_id = $value;
                $Brand_Sub_Category_Assoc->brand_id = $brand->id;
                $Brand_Sub_Category_Assoc->save();
                
                // print_r($request->Brand_Sub_Category_Assoc);
            }
        }   
        return Redirect()->back()->with('status', 'Brand created successfully!');
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
         $brand = Brand::find($id);
        
        return view('admin/ecommerce/modules/brand/edit', compact('brand'));
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
        $brand = Brand::find($id);
        $brand->brand_name = $request->brand_name;

        if ($request->file['0'])
        {
            $file_name = $request->file['0'] -> getClientOriginalName();
            $file_name = uniqid().$file_name;
            $file_name = preg_replace('/\s+/', '', $file_name);
            $file_type = $request->file['0']->getClientOriginalExtension();
            $request->file['0'] -> move(public_path().'/admin/upload/brands', $file_name);
            $file_size = $request->file['0']->getClientSize();
            $file_size = $file_size/1000;
            $file_size = $file_size.' '.'kb';
            $brand->brand_logo = $file_name;
            $brand->brand_logo_size = $file_size;
            $brand->brand_logo_file_type = $file_type;
        }        
        $brand->update();
        return redirect('/admin/brands')->with('status', 'Brand updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $brand = Brand::find($id);
      $brand->delete();
      return redirect('/admin/brands');
    }
    public function storeValidate(Request $request){
       
        $messages = [
            'brand_name.required' => 'please insert brand name',
            'file.required' => 'please upload brand logo',
            
        ];
        $this->validate($request, [
            'brand_name' => 'required',
             'file' => 'required',       
        ],$messages);
    }
}
