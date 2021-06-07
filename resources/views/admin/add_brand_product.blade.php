@extends('admin_layout')
@section('admin_content')
    

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Thương Hiệu Sản Phẩm
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
                        {!!Form::open(['action' => ['App\Http\Controllers\BrandProduct@save_brand_product'], 'method' =>'POST'])!!}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Thương Hiệu</label>
                            <input type="text" name="brand_product_name"  class="form-control" 
                            id="exampleInputEmail1" placeholder="Tên Danh Mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô Tả Thương Hiệu</label>
                            <textarea style="resize: none" rows="5" class="form-control" name="brand_product_desc" 
                            id="exampleInputPassword1" placeholder="Mô Tả Danh Mục">
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hiển Thị</label>
                            <select name="brand_product_status" class="form-control input-sm m-bot15">
                                <option value="1">ẨN</option>
                                <option value="0">Hiển Thị</option>
                               
                            </select>
                        </div>
                        <div class="checkbox">
                      
                        </div>
                        <button type="submit" name="add_brand_product" class="btn btn-info">Thêm Thương Hiệu</button>
                        {!!Form::close()!!}
                    </div>

                </div>
            </section>

    </div>
    @endsection