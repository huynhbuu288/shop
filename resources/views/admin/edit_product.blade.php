@extends('admin_layout')
@section('admin_content')
    

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                  Cập Nhật Thương Hiệu Sản Phẩm
                </header>    
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-arlert">'.$message. '</span>';
                    Session::put('message', null);
                }
                     ?>
                <div class="panel-body">
                    @foreach($edit_brand_product as $key => $edit_value)
                  
                    <div class="position-center">
                        {!!Form::open(['action' => ['App\Http\Controllers\BrandProduct@update_brand_product', $edit_value->brand_id ], 'method' =>'POST'])!!}
                        {{Form::hidden('_method','PUT')}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Danh Mục</label>
                            <input type="text" value="{{$edit_value->brand_name}}" name="brand_product_name"  class="form-control" 
                            id="exampleInputEmail1" placeholder="Tên Danh Mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô Tả Danh Mục</label>
                            <textarea style="resize: none" rows="5" class="form-control" name="brand_product_desc" 
                            id="exampleInputPassword1" placeholder="Mô Tả Danh Mục">{{ $edit_value->brand_desc }}
                            </textarea>
                        </div>
                       
                       
                        <button type="submit" name="updata_brand_product" class="btn btn-info">Cập Nhật Thương Hiệu Sản Phẩm</button>
                        {!!Form::close()!!}
                    </div>
                    @endforeach
                </div>
            </section>

    </div>
    @endsection