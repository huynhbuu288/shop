<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class ProductController extends Controller
{   
    public function add_product() {
        return view('admin.add_product');
    }

    public function all_product() {
        
        $all_product = DB::table('tbl_brand')->get();
        $manager_product = view('admin.all_product')
        ->with('all_product', $all_product);
        return view('admin_layout')->with('admin.all_product', $manager_product); 
    }
    // public function save_product(Request $request) {

    //     $data = array();
    //     $data['brand_name'] = $request->product_name;
    //     $data['brand_desc'] = $request->product_desc;
    //     $data['brand_status'] = $request->product_status;

    //     DB::table('tbl_brand')->insert($data);
    //     Session::put('message','Thêm Thương Hiệu Sản Phẩm Thành Công');
    //     return Redirect::to('add-brand-product');
    // }
    // public function unactive_product($brand_id){
  
    //   DB::table('tbl_brand')->where('brand_id',$brand_id)->update(['brand_status'=>1]);
    //   Session::put('message','Không Kích Hoạt Thương Hiệu Sản Phẩm Thành Công');
    //   return Redirect::to('all-brand-product');
    // }
    // public function active_product($brand_id){

    //     DB::table('tbl_brand')->where('brand_id',$brand_id)->update(['brand_status'=>0]);
    //     Session::put('message','Kích Hoạt Thương Hiệu Sản Phẩm Thành Công');
    //     return Redirect::to('all-brand-product');
    //   }
    //   public function edit_product($product_id){
    
    //     $edit_product = DB::table('tbl_brand')->where('brand_id',$product_id)->get();
    //     $manager_product = view('admin.edit_product')->with('edit_product', $edit_product);
    //     return view('admin_layout')->with('admin.edit_product', $manager_product); 
    // }
    // public function update_product(Request $request, $product_id){
       
    //     $data = array();
    //     $data['brand_name'] = $request->product_name;
    //     $data['brand_desc'] = $request->product_desc;
    //     DB::table('tbl_brand')->where('brand_id',$product_id)->update($data); 
    //     Session::put('message',' Cập Nhật Thương Hiệu Sản PhẩmThành Công');
    //     return Redirect::to('all-brand-product');
    // }
    // public function delete_product($product_id){
      
    //     DB::table('tbl_brand')->where('brand_id',$product_id)->delete();
    //     Session::put('message',' Xóa Thương Hiệu Sản PhẩmThành Công');
    //     return Redirect::to('all-brand-product');
    // } 
    
}
