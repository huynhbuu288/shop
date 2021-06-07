@extends('admin_layout')
@section('admin_content')
    

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                  Cập Nhật Danh Mục Sản Phẩm
                </header>    
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-arlert">'.$message. '</span>';
                    Session::put('message', null);
                }
                     ?>
                <div class="panel-body">
                    @foreach($edit_category_product as $key => $edit_value)
                  
                    <div class="position-center">
                        {!!Form::open(['action' => ['App\Http\Controllers\CategoryProduct@update_category_product', $edit_value->category_id ], 'method' =>'POST'])!!}
                        {{Form::hidden('_method','PUT')}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Danh Mục</label>
                            <input type="text" value="{{$edit_value->category_name}}" name="category_product_name"  class="form-control" 
                            id="exampleInputEmail1" placeholder="Tên Danh Mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô Tả Danh Mục</label>
                            <textarea style="resize: none" rows="5" class="form-control" name="category_product_desc" 
                            id="exampleInputPassword1" placeholder="Mô Tả Danh Mục">{{ $edit_value->category_desc }}
                            </textarea>
                        </div>
                       
                       
                        <button type="submit" name="updata_category_product" class="btn btn-info">Cập Nhật danh muc</button>
                        {!!Form::close()!!}
                    </div>
                    @endforeach
                </div>
            </section>

    </div>
    @endsection