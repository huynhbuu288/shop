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
                        {!!Form::open(['action' => ['App\Http\Controllers\ProductController@save_product'], 'method' =>'POST'])!!}
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
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
                                
                                {{-- @foreach ($cate as $key=> $cate) --}}
                                    
                              
                                {{-- <option value="{{($cate->menu_id)}}">{{($cate->menu_name)}}</option> --}}
                                {{-- @endforeach --}}
                               
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Thương Hiệu Sản Phẩm</label>
                            <select name="product_room" class="form-control input-sm m-bot15">
                                {{-- @foreach ($room as $key=> $room)
                                <option value="{{($room->room_id)}}">{{($room->room_name)}}</option>
                                
                                @endforeach --}}
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
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
                        {!!Form::close()!!}
                    </div>

                </div>
            </section>

    </div>
    @endsection