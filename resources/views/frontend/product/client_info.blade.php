@extends('frontend.master')

@section('content')
<div class="top_panel_title top_panel_style_4  title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_4  title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <h1 class="page_title">Kiểm tra</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="/">Trang chủ</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item home" href="{{route('you_cart')}}">Giỏ hàng của bạn</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Kiểm tra</span>					
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        @if ($message = Session::get('err'))
            <div class="panel-body">
                <div class="alert alert-warning" role="alert">
                    {{$message}}
                </div>
            </div>
        @endif
    </div>
</div>
<div class="page_content_wrap page_paddings_yes">
	<div class="content_wrap">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="content" >
                <article class="itemscope post_item post_item_single post_featured_default post_format_standard post-6 page type-page status-publish hentry" itemscope="" itemtype="http://schema.org/Article">
                    <section class="post_content" itemprop="articleBody">
                        <div class="woocommerce">
                            <div class="woocommerce-notices-wrapper"></div>
                            <div class="woocommerce-form-login-toggle">
                                
                                <div class="woocommerce-notices-wrapper"></div>
                                <form name="checkout" method="post" class="checkout woocommerce-checkout" action="{{route('client_info')}}" enctype="multipart/form-data" novalidate="novalidate">
                                        {{csrf_field()}}
                                    <div class="col2-set" id="customer_details">
                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                            <div class="woocommerce-billing-fields">
                                                <h3>Thông tin thanh toán</h3>
                                                <div class="woocommerce-billing-fields__field-wrapper">
                                                    <p class="form-row form-row-wide validate-required" id="billing_last_name_field" data-priority="10">
                                                        <label for="billing_last_name" class="">Họ và tên&nbsp;
                                                            <abbr class="required" title="bắt buộc">*</abbr>
                                                        </label>
                                                        <span class="woocommerce-input-wrapper" style="padding-left: 80px;">
                                                            <input type="text" class="input-text " name="name" id="billing_last_name" placeholder="Nhập đầy đủ họ và tên" value="">
                                                        </span>
                                                        @if ($errors->has('name'))
                                                            <div class="text-danger">{{ $errors->first('name') }}</div>
                                                        @endif
                                                    </p>
                                                    <p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="20">
                                                        <label for="billing_phone" class="">Số điện thoại&nbsp;
                                                            <abbr class="required" title="bắt buộc">*</abbr>
                                                        </label>
                                                        <span class="woocommerce-input-wrapper" style="padding-left: 57px;">
                                                            <input type="tel" class="input-text " name="phone" id="billing_phone" placeholder="Số điện thoại" value="" autocomplete="tel"></span>
                                                    </p>
                                                    @if ($errors->has('phone'))
                                                            <div class="text-danger">{{ $errors->first('phone') }}</div>
                                                        @endif
                                                    <p class="form-row form-row-wide validate-required validate-email" id="billing_email_field" data-priority="21">
                                                        <label for="billing_email" class="">Địa chỉ email&nbsp;
                                                            <abbr class="required" title="bắt buộc">*</abbr>
                                                        </label>
                                                        <span class="woocommerce-input-wrapper" style="padding-left: 57px;">
                                                            <input type="email" class="input-text " name="email" id="billing_email" placeholder="Địa chỉ email" value="" autocomplete="email username">
                                                        </span>
                                                        @if ($errors->has('email'))
                                                            <div class="text-danger">{{ $errors->first('email') }}</div>
                                                        @endif
                                                    </p>
                                                    
                              
                                                    <p class="form-row form-row-wide validate-required" id="billing_address_1_field" data-priority="60">
                                                        <label for="billing_address_1" class="">Địa chỉ nhận hàng&nbsp;
                                                            <abbr class="required" title="bắt buộc">*</abbr>
                                                        </label>
                                                        <span class="woocommerce-input-wrapper" style="padding-left: 27px;">
                                                            <input type="text" class="input-text " name="address" id="billing_address_1" placeholder="Ví dụ: Số 20, ngõ 90" value="" autocomplete="address-line1">
                                                        </span>
                                                        @if ($errors->has('address'))
                                                            <div class="text-danger">{{ $errors->first('address') }}</div>
                                                        @endif
                                                    </p> 
                                                    <!-- <p class="form-row form-row-wide validate-required" id="billing_address_1_field" data-priority="60">
                                                        <label for="billing_address_1" class="">Tình / Thành Phố &nbsp;
                                                            <abbr class="required" title="bắt buộc">*</abbr>
                                                        </label>
                                                        <span class="woocommerce-input-wrapper">
                                                            <input type="text" class="input-text " name="city" id="billing_address_1" placeholder="" value="" autocomplete="address-line1">
                                                        </span>
                                                        @if ($errors->has('city'))
                                                            <div class="text-danger">{{ $errors->first('city') }}</div>
                                                        @endif
                                                    </p>  -->
                                                    <!-- <p class="form-row form-row-wide validate-required" id="billing_address_1_field" data-priority="60">
                                                        <label for="billing_address_1" class="">Quận / Huyện &nbsp;
                                                            <abbr class="required" title="bắt buộc">*</abbr>
                                                        </label>
                                                        <span class="woocommerce-input-wrapper">
                                                            <input type="text" class="input-text " name="district" id="billing_address_1" placeholder="" value="" autocomplete="address-line1">
                                                        </span>
                                                        @if ($errors->has('district'))
                                                            <div class="text-danger">{{ $errors->first('district') }}</div>
                                                        @endif
                                                    </p> 
                                                    <p class="form-row form-row-wide validate-required" id="billing_address_1_field" data-priority="60">
                                                        <label for="billing_address_1" class="">Phường Xã &nbsp;
                                                            <abbr class="required" title="bắt buộc">*</abbr>
                                                        </label>
                                                        <span class="woocommerce-input-wrapper">
                                                            <input type="text" class="input-text " name="area" id="billing_address_1" placeholder="" value="" autocomplete="address-line1">
                                                        </span>
                                                        @if ($errors->has('area'))
                                                            <div class="text-danger">{{ $errors->first('area') }}</div>
                                                        @endif
                                                    </p>  -->
                                                    <!-- hwkjdhawks -->

                                                    <p class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated" id="billing_state_field" data-priority="30">
                                                        <label for="city" class="">Tỉnh/Thành phố&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label>
                                                        <span class="woocommerce-input-wrapper" style="padding-left: 44px;width: 62%;">
                                                            <select name="city" id="city" class="js-example-basic-single"  data-placeholder="Chọn tỉnh/thành phố" tabindex="-1" aria-hidden="true" >
                                                            <option value="all"></option>
                                                            @foreach($province as $item_province)
                                                                <option value="{{$item_province->id}}">{{$item_province->name}}</option>
                                                            @endforeach
                                                            </select>
                                                            @if ($errors->has('city'))
                                                                <div class="text-danger">{{ $errors->first('city') }}</div>
                                                            @endif
                                                            
                                                        </span>
                                                    </p>

                                                    <p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_city_field" data-priority="40">
                                                        <label for="district" class="">Quận/Huyện&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label>
                                                        <span class="woocommerce-input-wrapper" style="padding-left: 63px;width: 67%;">
                                                            <select name="district" id="district" class="js-example-basic-single" data-allow_clear="true" data-placeholder="Chọn quận huyện" tabindex="-1" aria-hidden="true">
                                                                <option value=""></option>
                                                                @foreach($district as $item_District)
                                                                <option value="{{$item_District->id}}">{{$item_District->name}}</option>
                                                                @endforeach
                                                            </select>

                                                            @if ($errors->has('district'))
                                                                <div class="text-danger">{{ $errors->first('district') }}</div>
                                                            @endif
                                                            
                                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                        </span>
                                                    </span>
                                                    </p>
 
                                                    <p class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated" id="billing_address_2_field" data-priority="50">
                                                        <label for="billing_address_2" class="">Xã/Phường/thị trấn&nbsp;<abbr class="required" title="bắt buộc">*</abbr></label>
                                                        <span class="woocommerce-input-wrapper" style="padding-left: 20px;">
                                                            <select name="area" id="area" class="js-example-basic-single" data-allow_clear="true" data-placeholder="Chọn xã/Phường/thị trấn" tabindex="-1" aria-hidden="true">
                                                                <option value=""></option>
                                                                @foreach($ward as $item_ward)
                                                                <option value="{{$item_ward->id}}">{{$item_ward->name}}</option>
                                                                @endforeach
                                                            </select>
                                                                @if ($errors->has('area'))
                                                                    <div class="text-danger">{{ $errors->first('area') }}</div>
                                                                @endif
                                                            <span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" style="width: 1px;">
                                                                <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                            </span>
                                                        </span>
                                                    </p>
                                                    <!-- ncdkjsnadk -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="woocommerce-shipping-fields"></div>
                                            <div class="woocommerce-additional-fields">
                                                <h3>Thông tin bổ sung</h3>
                                                <div class="woocommerce-additional-fields__field-wrapper">
                                                    <p class="form-row notes" id="order_comments_field" data-priority="10">
                                                        <label for="order_comments" class="">Ghi chú đơn hàng&nbsp;
                                                            <span class="optional">(tuỳ chọn)</span>
                                                        </label>
                                                        <span class="woocommerce-input-wrapper" style="width: 100%;">
                                                            <textarea name="note" class="input-text " id="order_comments" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn."></textarea>
                                                        </span>
                                                    </p> 
                                                </div>
                                                <button type="submit" class="btn btn-success" style="font-family: roboto;font-weight: bold;float: right;background-color: #80B500;">XÁC NHẬN</button>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>  
                    <section class="related_wrap related_wrap_empty"></section>
                </article>
            </div>
        </div>
            

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="float: right;">
            <div class="sidebar widget_area scheme_original right1101" role="complementary">
                <div class="sidebar_inner widget_area_inner">
                    <aside id="woocommerce_widget_cart-2" class="widget_number_1 widget woocommerce widget_shopping_cart">
                        <h5 class="widget_title">GIỎ HÀNG</h5>
                        <div class="widget_shopping_cart_content" style="opacity: 1;">
                            @foreach($gd_cordy_pay as $item_gd_cordy_pay)
                            <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                    <a href="{{asset('/cart/remove/'.$item_gd_cordy_pay->id),0}}" class="remove remove_from_cart_button" aria-label="Remove this item" data-product_id="2148" data-cart_item_key="e21e4e58ad9ab56e8a4634046da90113" data-product_sku="">×</a>													
                                    <a href="#" style="    margin-bottom: -23px;">
                                        <img width="570" height="703" src="{{asset('storage/'.$item_gd_cordy_pay->image)}}" 
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""  
                                                sizes="(max-width: 570px) 100vw, 570px" ><p style="height: 23px; overflow-y: hidden;">{{$item_gd_cordy_pay->name}}</p>						
                                    </a>
                                    <span class="quantity"> {{$item_gd_cordy_pay['qty']}}× 
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol" id="p_{{$item_gd_cordy_pay->id}}"> {{number_format($item_gd_cordy_pay->price)}} VND</span>
                                        </span>
                                    </span>					
                                </li>
                            </ul>
                            @endforeach

                            <!-- <p class="woocommerce-mini-cart__total total">
                                <strong>Subtotal:</strong> 
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol"></span>1232$</span>
                            </p> -->

                            <p class="woocommerce-mini-cart__buttons buttons">
                                <!-- <a href="" class="button wc-forward">View cart</a> -->
                                <p class="woocommerce-mini-cart__total total">
										<strong>Tổng tiền:</strong> 
										<span class="woocommerce-Price-amount amount" style="color: red;">
										<span class="woocommerce-Price-currencySymbol"></span>{{number_format($cart_detail['weight'],0)}} VNĐ</span>
									</p>
                                <a href="{{route('you_cart')}}" class="button checkout wc-forward">Kiểm tra</a>
                            </p>
                        </div>
                    </aside>
                    <aside id="woocommerce_product_search-2" class="widget_number_4 widget woocommerce widget_product_search">
                        <form role="search" method="get" class="search_form" action="{{asset('/tim-kiem')}}">
                            <input type="text" class="search_field" placeholder="Tìm kiếm &hellip;" value="" name="name" title="Search for products:" />
                            <button class="search_button icon-search" type="submit"></button>
                            <input type="hidden" name="post_type" value="product" />
                        </form>
                    </aside>
                    <aside id="woocommerce_product_categories-3" class="widget_number_3 widget woocommerce widget_product_categories">
                        <h5 class="widget_title">DANH  MỤC SẢN PHẨM </h5>
                        <ul class="product-categories">
                            <li class="cat-item cat-item-96">
                                <a href="{{route('product')}}">Cordyx</a> 
                                <span class="count">(1)</span>
                            </li>
                            
                        </ul>
                    </aside>
                    
                </div>
            </div> <!-- /.sidebar -->
        </div>
    </div>
</div>

<script> 
// In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.js-example-basic-single').select2();


        $("#city").on('change', function(){    // 2nd (A)
            console.log('change');
            // do your code here
            // It will specifically called on change of your element    

        });
    });

    
</script>

@endsection