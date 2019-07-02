@extends('frontend.master')


@section('content')
<div class="top_panel_title top_panel_style_4  title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_4  title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <h1 class="page_title">Gia đình Cordy</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="/">Trang chủ</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Gia đình Cordy</span>
            </div>
        </div>
    </div>
</div>

<div class="page_content_wrap page_paddings_yes">
    <div class="content_wrap">
        <div class="content">
            <div class="row">
                <div class="col-md-8">
                    <div class="row append-showdata">
                        @foreach($gd_cordy_list as $item_gd_cordy)
                        <div class="column-vt zoom">
                            <div class="card-vt">
                                <a href="{{route('detail_product',$item_gd_cordy->slug)}}" style="text-decoration: none;">
                                    <img src="{{asset('storage/'.$item_gd_cordy->image)}}" alt="{{$item_gd_cordy->id}}"
                                        style="width:100%"></a>
                                <div class="container-vt">
                                    <a href="{{route('detail_product',$item_gd_cordy->slug)}}"
                                        style="text-decoration: none;">
                                        <h6 style="margin-top: 20px;font-size: 16px;font-weight: bold;">
                                            {{$item_gd_cordy->name}}</h6>
                                    </a>
                                    <span class="price-vt">{{number_format($item_gd_cordy->price)}} VND </span>
                                    <a href="{{asset('/cart/add/'.$item_gd_cordy->id)}}" class="top_panel_cart_button"
                                        data-items="0" data-summa="&euro;0.00">
                                        <p class="bt-cart-vt"><button>Thêm vào giỏ hàng &nbsp<span
                                                    class="contact_icon icon-shopping-cart13"
                                                    style="font-size: 20px;font-weight: bolder;"></span></button></p>
                                    </a>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <section class="related_wrap related_wrap_empty"></section>

                </div>
                <div class="col-md-4">
                    <div class="sidebar widget_area scheme_original right1101" role="complementary">
                        <div class="sidebar_inner widget_area_inner">
                            <aside id="woocommerce_product_search-2"
                                class="widget_number_4 widget woocommerce widget_product_search">
                                <form role="search" method="get" class="search_form" action="{{asset('/tim-kiem')}}">
                                    <input type="text" class="search_field" placeholder="Tìm kiếm &hellip;" value=""
                                        name="name" title="Search for products:" />
                                    <button class="search_button icon-search" type="submit"></button>
                                    <input type="hidden" name="post_type" value="product" />
                                </form>
                            </aside>
                            </br>
                            <aside id="woocommerce_product_categories-3"
                                class="widget_number_3 widget woocommerce widget_product_categories">
                                <h5 class="widget_title">DANH MỤC SẢN PHẨM </h5>
                                <ul class="product-categories">
                                    <li class="cat-item cat-item-96">
                                        <a href="{{route('product')}}">Cordyx</a>
                                        <span class="count">(1)</span>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection