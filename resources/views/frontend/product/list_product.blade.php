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
        
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="content" >
                    <div class="list_products shop_mode_thumbs">
                        <ul class="products columns-3" style="list-style: none;">
                            @foreach($gd_cordy_list as $item_gd_cordy)
                            <li class="post-2152 product type-product status-publish has-post-thumbnail product_cat-organic-dairy product_cat-planting product_tag-best-selling-products product_tag-featured-products product_tag-fresh  column-1_3 first instock featured shipping-taxable purchasable product-type-simple ">
                                <a href="{{route('detail_product',$item_gd_cordy->slug)}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <div class="post_item_wrap" style="width: 217px;">
                                        <div class="post_featured">
                                            <div class="post_thumb">
                                                <a href="{{route('detail_product',$item_gd_cordy->slug)}}">
                                                    <img width="570" height="703" src="{{asset('storage/'.$item_gd_cordy->image)}}"  />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post_content">
                                            <h2 class="woocommerce-loop-product__title" style="font-size: 18px;">
                                                <a href="{{route('detail_product',$item_gd_cordy->slug)}}">
                                                    <a href="{{route('detail_product',$item_gd_cordy->slug)}}" class="splink">{{$item_gd_cordy->name}}</a>
                                                </a>
                                            </h2>
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount spcordy">
                                                    <span class="woocommerce-Price-currencySymbol"></span>{{number_format($item_gd_cordy->price)}} VND</span>&nbsp
                                                    <a href="{{asset('/cart/add/'.$item_gd_cordy->id)}}" class="top_panel_cart_button" data-items="0" data-summa="&euro;0.00">&nbsp
													<span class="contact_icon icon-shopping-cart13" style="font-size: 20px;font-weight: bolder;"></span>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div> <!-- .list_products -->
                </div> <!-- </div> class="content"> -->
            </div> <!-- </div> class="content_wrap"> -->
         <!-- </div> class="content"> -->	
                                
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="    float: right;">
                <div class="sidebar widget_area scheme_original right1101" role="complementary">
                    <div class="sidebar_inner widget_area_inner">
                        <aside id="woocommerce_product_search-2" class="widget_number_4 widget woocommerce widget_product_search">
                            <form role="search" method="get" class="search_form" action="{{asset('/tim-kiem')}}">
                                <input type="text" class="search_field" placeholder="Tìm kiếm &hellip;" value="" name="name" title="Search for products:" />
                                <button class="search_button icon-search" type="submit"></button>
                                <input type="hidden" name="post_type" value="product" />
                            </form>
                        </aside>
                        </br>
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
    </div> <!-- </div> class="content_wrap"> -->
</div>		<!-- </.page_content_wrap> -->

<script type="text/javascript">if (typeof ORGANICS_GLOBALS == 'undefined') var ORGANICS_GLOBALS = {};ORGANICS_GLOBALS['ajax_url']			 = '../wp-admin/admin-ajax.html';ORGANICS_GLOBALS['ajax_nonce']		 = 'e69ff56c17';ORGANICS_GLOBALS['ajax_nonce_editor'] = 'cd26980418';ORGANICS_GLOBALS['site_url']			= '../index.html';ORGANICS_GLOBALS['vc_edit_mode']		= false;ORGANICS_GLOBALS['theme_font']		= 'Cantarell';ORGANICS_GLOBALS['theme_skin']			= 'trex2_no_less';ORGANICS_GLOBALS['theme_skin_color']		= '';ORGANICS_GLOBALS['theme_skin_bg_color']	= '';ORGANICS_GLOBALS['slider_height']	= 100;ORGANICS_GLOBALS['system_message']	= {message: '',status: '',header: ''};ORGANICS_GLOBALS['user_logged_in']	= false;ORGANICS_GLOBALS['toc_menu']		= '';ORGANICS_GLOBALS['toc_menu_home']	= false;ORGANICS_GLOBALS['toc_menu_top']	= false;ORGANICS_GLOBALS['menu_fixed']		= true;ORGANICS_GLOBALS['menu_mobile']	= 1023;ORGANICS_GLOBALS['menu_slider']     = true;ORGANICS_GLOBALS['demo_time']		= 0;ORGANICS_GLOBALS['media_elements_enabled'] = true;ORGANICS_GLOBALS['ajax_search_enabled'] 	= true;ORGANICS_GLOBALS['ajax_search_min_length']	= 3;ORGANICS_GLOBALS['ajax_search_delay']		= 200;ORGANICS_GLOBALS['css_animation']      = true;ORGANICS_GLOBALS['menu_animation_in']  = 'fadeIn';ORGANICS_GLOBALS['menu_animation_out'] = 'fadeOut';ORGANICS_GLOBALS['popup_engine']	= 'magnific';ORGANICS_GLOBALS['email_mask']		= '^([a-zA-Z0-9_\-]+\.)*[a-zA-Z0-9_\-]+@[a-z0-9_\-]+(\.[a-z0-9_\-]+)*\.[a-z]{2,6}$';ORGANICS_GLOBALS['contacts_maxlength']	= 1000;ORGANICS_GLOBALS['comments_maxlength']	= 1000;ORGANICS_GLOBALS['remember_visitors_settings']	= false;ORGANICS_GLOBALS['admin_mode']			= false;ORGANICS_GLOBALS['isotope_resize_delta']	= 0.3;ORGANICS_GLOBALS['error_message_box']	= null;ORGANICS_GLOBALS['viewmore_busy']		= false;ORGANICS_GLOBALS['video_resize_inited']	= false;ORGANICS_GLOBALS['top_panel_height']		= 0;
</script>
<script type="application/ld+json">
		{"@context":"https:\/\/schema.org\/","@graph":[{"@type":"Product","@id":"http:\/\/greenliving.vip\/product\/apetito-pure-fruit-juice\/","name":"Apetito Pure Fruit Juice","url":"http:\/\/greenliving.vip\/product\/apetito-pure-fruit-juice\/"},{"@type":"Product","@id":"http:\/\/greenliving.vip\/product\/body-beauty-organic\/","name":"Body Beauty Organic","url":"http:\/\/greenliving.vip\/product\/body-beauty-organic\/"},{"@type":"Product","@id":"http:\/\/greenliving.vip\/product\/carrot-juice\/","name":"Carrot Juice","url":"http:\/\/greenliving.vip\/product\/carrot-juice\/"},{"@type":"Product","@id":"http:\/\/greenliving.vip\/product\/conconut-chips\/","name":"Conconut Chips","url":"http:\/\/greenliving.vip\/product\/conconut-chips\/"},{"@type":"Product","@id":"http:\/\/greenliving.vip\/product\/espresso-coffe-beans\/","name":"Espresso Coffe Beans","url":"http:\/\/greenliving.vip\/product\/espresso-coffe-beans\/"},{"@type":"Product","@id":"http:\/\/greenliving.vip\/product\/fresh-meal-kit\/","name":"Fresh Meal Kit","url":"http:\/\/greenliving.vip\/product\/fresh-meal-kit\/"},{"@type":"Product","@id":"http:\/\/greenliving.vip\/product\/organic-bread\/","name":"Organic Bread","url":"http:\/\/greenliving.vip\/product\/organic-bread\/"},{"@type":"Product","@id":"http:\/\/greenliving.vip\/product\/organic-dairy\/","name":"Organic Dairy","url":"http:\/\/greenliving.vip\/product\/organic-dairy\/"},{"@type":"Product","@id":"http:\/\/greenliving.vip\/product\/organic-milk-2\/","name":"Organic Milk","url":"http:\/\/greenliving.vip\/product\/organic-milk-2\/"},{"@type":"Product","@id":"http:\/\/greenliving.vip\/product\/organic-protein-powder\/","name":"Organic Protein Powder","url":"http:\/\/greenliving.vip\/product\/organic-protein-powder\/"},{"@type":"Product","@id":"http:\/\/greenliving.vip\/product\/organic-veggie-mix\/","name":"Organic Veggie Mix","url":"http:\/\/greenliving.vip\/product\/organic-veggie-mix\/"}]}
	</script>	
		<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
<script type='text/javascript'>
/* <![CDATA[ */
var TRX_UTILS_STORAGE = {"ajax_url":"http:\/\/greenliving.dev\/wp-admin\/admin-ajax.php","ajax_nonce":"e69ff56c17","site_url":"http:\/\/greenliving.vip","user_logged_in":"0","email_mask":"^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$","msg_ajax_error":"Invalid server answer!","msg_error_global":"Invalid field's value!","msg_name_empty":"The name can't be empty","msg_email_empty":"Too short (or empty) email address","msg_email_not_valid":"E-mail address is invalid","msg_text_empty":"The message text can't be empty","msg_send_complete":"Send message complete!","msg_send_error":"Transmit failed!","login_via_ajax":"1","msg_login_empty":"The Login field can't be empty","msg_login_long":"The Login field is too long","msg_password_empty":"The password can't be empty and shorter then 4 characters","msg_password_long":"The password is too long","msg_login_success":"Login success! The page will be reloaded in 3 sec.","msg_login_error":"Login failed!","msg_not_agree":"Please, read and check 'Terms and Conditions'","msg_email_long":"E-mail address is too long","msg_password_not_equal":"The passwords in both fields are not equal","msg_registration_success":"Registration success! Please log in!","msg_registration_error":"Registration failed!"};
/* ]]> */
</script>

@endsection