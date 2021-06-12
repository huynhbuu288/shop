@extends('layout')
@section('content')

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="{{URL::to('/')}}">TRANG CHỦ</a></li>
              <li class="active">Thanh Toán giỏ Hàng</li>
            </ol>
        </div>

       


        
        <div class="review-payment">
            <h2>Xem lại giỏ hàng</h2>
        </div> 
        <div class="table-responsive cart_info">
            <?php
               $content = Cart::content(); 
             
               ?> 
               <table class="table table-condensed">
                   <thead>
                       <tr class="cart_menu">
                           <td class="image">Hình Ảnh Sản Phẩm</td>
                           <td class="description">Mô Tả</td>
                           <td class="price">giá</td>
                           <td class="quantity">Số Lượng</td>
                           <td class="total">Tổng Tiền</td>
                           <td></td>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($content as $v_content)
                       <tr>
                           <td class="cart_product">
                               <a href=""><img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" width="80" alt=""/></a>
                           </td>
                           <td class="cart_description">
                               <h4><a href="">{{$v_content->name}}</a></h4>
                               <p>Web ID: 1089772</p>
                           </td>
                           <td class="cart_price">
                               <p>{{number_format($v_content->price)}}.VND</p>
                           </td>
                           <td class="cart_quantity">
                               <div class="cart_quantity_button">
                                   <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                                       {{ csrf_field() }}
                                   <input class="cart_quantity_input" type="text" name="cart_quantity"
                                    value="{{$v_content->qty}}">
                                   <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
                                   <input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
                                   </form>
                               </div>
                           </td>
                           <td class="cart_total">
                               <p class="cart_total_price">
                                   <?php
                                   $subtotal = $v_content->price * $v_content->qty;
                                   echo number_format($subtotal).' '.'.VND';
                                   ?>
                               </p>
                           </td>
                           <td class="cart_delete">
                               <a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
                           </td>
                       </tr>
                       @endforeach
                      
                   </tbody>
               </table>
           </div>
           <h4 style="margin:40px 0;font-size:20px">Chọn Hình Thức Thanh Toán</h4>
           @foreach ($customer1 as $kh1)
           <form action="{{URL::to('/order-place/'.$kh1->customer_id)}}" method="post">
            {{ csrf_field() }}
        <div class="payment-options">
                <span>
                    <label><input  name="payment_option" value="1" type="checkbox"> Trả Bằng Thẻ ATM</label>
                </span>
                <span>
                    <label><input name="payment_option" value="2" type="checkbox"> Thanh Toán Khi Nhận Hàng</label>
                </span>
                <span>
                    <label><input name="payment_option" value="3" type="checkbox"> Thanh Toán Thẻ Tín Dụng</label>
                </span>
                <input type="submit" value="Đặt Hàng" name="send_order_place" class="btn btn-primary btn-sm">
                {{-- <span>
                    <label><input type="checkbox"></label>
                </span> --}}
            </div>
           </form>
           @endforeach
    </div>
</section> <!--/#cart_items-->

@endsection 