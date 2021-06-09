@extends('admin_layout')
@section('admin_content')
    

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Sản Phẩm
                </header>    
                <div class="panel-body">
                    <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-arlert">'.$message. '</span>';
                        Session::put('message', null);
                    }
                         ?>
                    <div class="position-center">
                       <form role="form" action="{{URL::to('save-product')}}" method="post" 
                       enctype="multipart/form-data">
                       {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                            <input product="text" name="product_name"  class="form-control" 
                            id="exampleInputEmail1" placeholder="Tên Danh Mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">giá Sản Phẩm</label>
                            <input product="text" name="product_price"  class="form-control" 
                            id="exampleInputEmail1" placeholder="Gía Phòng">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình Ảnh Sản Phẩm</label>
                            <input type="file" name="product_image"  class="form-control" 
                            id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô Tả Sản Phẩm</label>
                            <textarea  class="form-control" name="product_desc" 
                            id="exampleInputPassword1" placeholder="Mô Tả Phòng">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội Dung Sản Phẩm</label>
                            <textarea  class="form-control" name="product_content" 
                            id="exampleInputPassword1" placeholder="Nội Dung Phòng">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Danh Mục Sản Phẩm</label>
                            <select name="product_cate" class="form-control input-sm m-bot15">
                                @foreach ($cate_product as $key=> $cate)
                                <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>
                                @endforeach
                               
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Thương Hiệu Sản Phẩm</label>
                            <select name="product_brand" class="form-control input-sm m-bot15">
                                @foreach ($brand_product as $key=> $brand)
                                <option value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hiển Thị</label>
                            <select name="product_status" class="form-control input-sm m-bot15">
                                <option value="0">ẨN</option>
                                <option value="1">Hiển Thị</option>
                               
                            </select>
                        </div>
                        <button product="submit" name="add_product" class="btn btn-info">Thêm Sản Phẩm</button>
                      </form>
                    </div>

                </div>
            </section>

    </div>
    @endsection