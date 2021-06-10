@extends('layout')
@section('content')
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Kết Qủa Tìm Kiếm
    </h2>
 @foreach($search_product as $key => $search)
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{URL::to('public/uploads/product/'.$search->product_image)}}" alt="">
                        <h2>{{($search->product_price).' '.'VND'}}</h2>
                        <p>{{$search->product_name}}</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Gio Hàng</a>
                    </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Thêm Yêu Thích</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>Thêm So Sánh </a></li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach 
</div><!--features_items-->



@endsection