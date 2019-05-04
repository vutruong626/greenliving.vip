@extends('frontend.master')
@section('head')
	<title>Cao Nấm Trùng Thảo Cordy-X MHD PHARMA </title>	
    <meta name="description" content="Cao Nấm Trùng Thảo Cordy-X là sản phẩm cao đặc chứa tinh chất Đông Trùng Hạ Thảo và tinh chất Nấm Linh Chi. Công nghệ chiết xuất PHÂN TỬ giúp cao đặc hoà tan và thẩm thấu nhanh.">
@parent
@endsection
@section('content')
<div class="page_content_wrap page_paddings_no">
	<div class="content_wrap">
		<div class="content">
			<article class="itemscope post_item post_item_single post_featured_default post_format_standard post-788 page type-page status-publish hentry" itemscope itemtype="http://schema.org/Article">
				<section class="post_content" itemprop="articleBody">
					<div class="sc_reviews alignright"><!-- #TRX_REVIEWS_PLACEHOLDER# --></div>
					<div class="vc_row wpb_row vc_row-fluid">
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper">
									<div class="wpb_revslider_element wpb_content_element">
										<link href="http://fonts.googleapis.com/css?family=Roboto:400%7CLove+Ya+Like+A+Sister:700%2C400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
										<div id="rev_slider_12_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
											<div id="rev_slider_12_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
                                                <ul>	<!-- SLIDE  -->
                                                    @foreach($sliders as $item_sliders)
													<li data-index="rs-34" data-transition="fade" data-slotamount="default" data-hideafterloop="0" 
                                                    data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  
                                                    data-thumb="{{asset('storage/'.$item_sliders->image)}}"  
                                                    data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" 
                                                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" 
                                                    data-description="">
														<!-- MAIN IMAGE -->
														<img src="{{asset('storage/'.$item_sliders->image)}}"  alt="" title="slider1_home1"  width="1920" height="612" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
														<!-- LAYER NR. 2 -->
														<div class="tp-caption white_text_30px   tp-resizeme" 
															id="slide-34-layer-2" 
															data-x="['left','left','left','left']" data-hoffset="['25','25','25','25']" 
															data-y="['top','top','top','top']" data-voffset="['275','275','275','275']" 
															data-width="none"
															data-height="none"
															data-whitespace="nowrap"

															data-type="text" 
															data-responsive_offset="on" 

															data-frames='[{"delay":1300,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"+896900","speed":600,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
															data-textAlign="['left','left','left','left']"
															data-paddingtop="[0,0,0,0]"
															data-paddingright="[0,0,0,0]"
															data-paddingbottom="[0,0,0,0]"
															data-paddingleft="[0,0,0,0]"

															style="z-index: 6; white-space: nowrap; font-size: 30px; line-height: 38px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: ;font-family:Roboto;text-shadow:0.5px 0.866px 6px rgb( 41, 53, 44 );">{{$item_sliders->title}}
														</div>

														<div class="tp-caption button_medium_filled   tp-resizeme" 
															id="slide-34-layer-3" 
															data-x="['left','left','left','left']" data-hoffset="['25','25','25','25']" 
															data-y="['top','top','top','top']" data-voffset="['389','389','389','389']" 
															data-width="none"
															data-height="none"
															data-whitespace="nowrap"

															data-type="text" 
															data-responsive_offset="on" 

															data-frames='[{"delay":1800,"speed":900,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"+897000","speed":600,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
															data-textAlign="['center','center','center','center']"
															data-paddingtop="[0,0,0,0]"
															data-paddingright="[0,0,0,0]"
															data-paddingbottom="[0,0,0,0]"
															data-paddingleft="[0,0,0,0]"

															style="z-index: 7; white-space: nowrap; font-size: 14px; line-height: 20px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: px;font-family:Roboto;">
															<a href="{{$item_sliders->url}}" class="sc_button sc_button_round sc_button_style_filled sc_button_scheme_original sc_button_size_medium">Đọc thêm </a> 
														</div>
													</li>
													
                                                    @endforeach
												</ul>
												<script data-cfasync="false" src="{{asset('js/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}">
													</script>
													<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
														if(htmlDiv) {
															htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
														}else{
															var htmlDiv = document.createElement("div");
															htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
															document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
														}
													</script>
												<div class="tp-bannertimer" style="height: 5px; background: rgba(0,0,0,0.15);"></div>	
											</div>
												<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss=".tp-caption.very_large_text,.very_large_text{color:rgba(255,255,255,1.00);font-size:60px;line-height:70px;font-weight:700;font-style:normal;font-family:Love Ya Like A Sister;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0px 0px 0px 0px}";
													if(htmlDiv) {
														htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
													}else{
														var htmlDiv = document.createElement("div");
														htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
														document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
													}
												</script>
												<script type="text/javascript">
													if (setREVStartSize!==undefined) setREVStartSize(
														{c: '#rev_slider_12_1', responsiveLevels: [1240,1024,778,480], gridwidth: [1170,1024,778,680], gridheight: [612,600,600,600], sliderLayout: 'fullwidth'});

														var revapi12,
													tpj;	
													(function() {			
														if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad); else onLoad();	
														function onLoad() {				
															if (tpj===undefined) { tpj = jQuery; if("off" == "on") tpj.noConflict();}
															if(tpj("#rev_slider_12_1").revolution == undefined){
																revslider_showDoubleJqueryError("#rev_slider_12_1");
															}else{
																revapi12 = tpj("#rev_slider_12_1").show().revolution({
																	sliderType:"standard",
																	jsFileLocation:"//organics.axiomthemes.com/wp-content/plugins/revslider/public/assets/js/",
																	sliderLayout:"fullwidth",
																	dottedOverlay:"none",
																	delay:900000,
																	navigation: {
																		keyboardNavigation:"off",
																		keyboard_direction: "horizontal",
																		mouseScrollNavigation:"off",
																		mouseScrollReverse:"default",
																		onHoverStop:"off",
																		touch:{
																			touchenabled:"on",
																			touchOnDesktop:"off",
																			swipe_threshold: 75,
																			swipe_min_touches: 50,
																			swipe_direction: "horizontal",
																			drag_block_vertical: false
																		}
																		,
																		bullets: {
																			enable:true,
																			hide_onmobile:true,
																			hide_under:600,
																			style:"hermes",
																			hide_onleave:false,
																			direction:"horizontal",
																			h_align:"center",
																			v_align:"bottom",
																			h_offset:0,
																			v_offset:40,
																			space:12,
																			tmp:''
																		}
																	},
																	responsiveLevels:[1240,1024,778,480],
																	visibilityLevels:[1240,1024,778,480],
																	gridwidth:[1170,1024,778,680],
																	gridheight:[612,600,600,600],
																	lazyType:"none",
																	parallax: {
																		type:"mouse",
																		origo:"slidercenter",
																		speed:2000,
																		speedbg:0,
																		speedls:0,
																		levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],
																	},
																	shadow:0,
																	spinner:"off",
																	stopLoop:"off",
																	stopAfterLoops:-1,
																	stopAtSlide:-1,
																	shuffle:"off",
																	autoHeight:"off",
																	hideThumbsOnMobile:"off",
																	hideSliderAtLimit:0,
																	hideCaptionAtLimit:0,
																	hideAllCaptionAtLilmit:0,
																	debugMode:false,
																	fallbacks: {
																		simplifyAll:"off",
																		nextSlideOnWindowFocus:"off",
																		disableFocusListener:false,
																	}
																});
															}; /* END OF revapi call */

														}; /* END OF ON LOAD FUNCTION */
													}()); /* END OF WRAPPING FUNCTION */
												</script>
												<script>
													var htmlDivCss = unescape(".hermes.tp-bullets%20%7B%0A%7D%0A%0A.hermes%20.tp-bullet%20%7B%0A%20%20%20%20overflow%3Ahidden%3B%0A%20%20%20%20border-radius%3A50%25%3B%0A%20%20%20%20width%3A16px%3B%0A%20%20%20%20height%3A16px%3B%0A%20%20%20%20background-color%3A%20rgba%280%2C%200%2C%200%2C%200%29%3B%0A%20%20%20%20box-shadow%3A%20inset%200%200%200%202px%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%20%20%20-webkit-transition%3A%20background%200.3s%20ease%3B%0A%20%20%20%20transition%3A%20background%200.3s%20ease%3B%0A%20%20%20%20position%3Aabsolute%3B%0A%7D%0A%0A.hermes%20.tp-bullet%3Ahover%20%7B%0A%09%20%20background-color%3A%20rgba%280%2C0%2C0%2C0.21%29%3B%0A%7D%0A.hermes%20.tp-bullet%3Aafter%20%7B%0A%20%20content%3A%20%27%20%27%3B%0A%20%20position%3A%20absolute%3B%0A%20%20bottom%3A%200%3B%0A%20%20height%3A%200%3B%0A%20%20left%3A%200%3B%0A%20%20width%3A%20100%25%3B%0A%20%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%20box-shadow%3A%200%200%201px%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%20-webkit-transition%3A%20height%200.3s%20ease%3B%0A%20%20transition%3A%20height%200.3s%20ease%3B%0A%7D%0A.hermes%20.tp-bullet.selected%3Aafter%20%7B%0A%20%20height%3A100%25%3B%0A%7D%0A%0A");
													var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
													if(htmlDiv) {
														htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
													}
													else{
														var htmlDiv = document.createElement('div');
														htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
														document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
													}
												</script>
										</div><!-- END REVOLUTION SLIDER -->
									</div>
									<div class="vc_empty_space"   style="height: 6.429em" >
										<span class="vc_empty_space_inner"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="vc_row wpb_row vc_row-fluid">
                        @foreach($gioithieu as $item_gioithieu)
						<div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-md vc_hidden-sm vc_hidden-xs">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper">
									<div class="sc_section" style="background-color:#f2f5f8;">
										<div class="sc_section_inner">
											<div class="sc_section_overlay" style="">
												<div class="sc_section_content" style="">
													<div class="vc_empty_space"   style="height: 2.9em" >
														<span class="vc_empty_space_inner"></span>
													</div>
													<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2" style="margin-left:25px;">
														<div class="column-1_2 sc_column_item sc_column_item_1 odd first">
															<div class="sc_section aligncenter" style="height:100%;height:100%;">
																<div class="sc_section_inner">
																	<figure class="sc_image  sc_image_shape_square" style="height:242px;">
																		<img src="{{asset('storage/'.$item_gioithieu->image)}}" alt="" style="height:242px;"/>
																	</figure>
																</div>
															</div>
														</div>
														<div class="column-1_2 sc_column_item sc_column_item_2 even">
															<div class="sc_section">
																<div class="sc_section_inner">
																	<div class="wpb_text_column wpb_content_element " >
																		<div class="wpb_wrapper">
																			<p><a href="#">{{$item_gioithieu->function}}</a></p>

																		</div>
																	</div>
																</div>
															</div>
															<h2 class="sc_title sc_title_regular" style="text-transform: capitalize; letter-spacing: 0px;margin-top:0px;margin-bottom:0.2em;	font-weight:700; height: 85px; overflow-y: hidden;">{{$item_gioithieu->name}}</h2>
															<div class="sc_section">
																<div class="sc_section_inner">
																	<div class="wpb_text_column wpb_content_element " >
																		<div class="wpb_wrapper">
																			<p style="height: 100px; overflow-y: hidden;">{{$item_gioithieu->title}}</p>

																		</div>
																	</div>
																</div>
															</div>
															<div class="vc_empty_space"   style="height: 2.4em" >
																<span class="vc_empty_space_inner"></span>
															</div>
															<a href="{{route('about',$item_gioithieu->slug)}}" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small  sc_button_iconed none">đọc thêm</a>
														</div>
													</div>
													<div class="vc_empty_space"   style="height: 2.4em" >
														<span class="vc_empty_space_inner"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="vc_empty_space"   style="height: 1.5em" >
										<span class="vc_empty_space_inner"></span>
									</div>
								</div>
							</div>
                        </div>
                        @endforeach
					</div>
					<div class="vc_row wpb_row vc_row-fluid">
						@foreach($gioithieu as $item_gioithieu)
						<div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-lg">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper">
									<div class="sc_section" style="background-color:#f2f5f8;">
										<div class="sc_section_inner">
											<div class="sc_section_overlay" style="">
												<div class="sc_section_content" style="">
													<div class="vc_empty_space"   style="height: 2.9em" >
														<span class="vc_empty_space_inner"></span>
													</div>
													<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2" style="margin-left:25px;">
														<div class="column-1_2 sc_column_item sc_column_item_1 odd first">
															<div class="sc_section aligncenter" style="height:100%;height:100%;">
																<div class="sc_section_inner">
																	<figure class="sc_image  sc_image_shape_square" style="height:242px;">
																		<img src="{{asset('storage/'.$item_gioithieu->image)}}" alt="" />
																	</figure>
																</div>
															</div>
														</div>
														<div class="column-1_2 sc_column_item sc_column_item_2 even">
															<div class="sc_section">
																<div class="sc_section_inner">
																	<div class="wpb_text_column wpb_content_element " >
																		<div class="wpb_wrapper">
																			<p>{{$item_gioithieu->function}}</p>

																		</div>
																	</div>
																</div>
															</div>
															<h2 class="sc_title sc_title_regular" style="text-transform: capitalize; letter-spacing: 0px;margin-top:0px;margin-bottom:0.2em;font-weight:700;">{{$item_gioithieu->name}}</h2>
															<div class="sc_section">
																<div class="sc_section_inner">
																	<div class="wpb_text_column wpb_content_element " >
																		<div class="wpb_wrapper">
																			<p style="height: 100px; overflow-y: hidden;">{{$item_gioithieu->title}}</p>

																		</div>
																	</div>
																</div>
															</div>
															<div class="vc_empty_space"   style="height: 2.4em" >
																<span class="vc_empty_space_inner"></span>
															</div>
															<a href="{{route('about',$item_gioithieu->slug)}}" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small  sc_button_iconed none">đọc thêm</a>
														</div>
													</div>
													<div class="vc_empty_space"   style="height: 2.4em" >
														<span class="vc_empty_space_inner"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="vc_empty_space"   style="height: 1.5em" >
										<span class="vc_empty_space_inner"></span>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					@foreach($contents as $item_contents)
					<div class="vc_row wpb_row vc_row-fluid" >
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper">
									<div class="vc_empty_space"   style="height: 4.5em" >
										<span class="vc_empty_space_inner"></span>
									</div>
									<div id="sc_call_to_action_1312485239" class="sc_call_to_action sc_call_to_action_style_1 sc_call_to_action_align_center" data-animation="animated fadeIn normal" style="width:100%;">
										<div class="sc_call_to_action_info">
											<h3 class="sc_call_to_action_title sc_item_title">{{$item_contents->title}}</h3>
											<div class="sc_call_to_action_descr sc_item_descr">{!! $item_contents->content !!}<br />
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="vc_row wpb_row vc_row-fluid" style="width: 1531px; margin-left: -181px;">
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper">
									<div class="sc_section imgc" style="background-image:url({{asset('storage/'.$item_contents->image)}});background-repeat:no-repeat;background-size:cover;">
										<div class="sc_section_inner">
											<div class="sc_section_overlay" style="">
												<div class="sc_section_content" style="">
													<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
														<div class="column-1_2 sc_column_item sc_column_item_1 odd first"></div>
														<!-- <div class="column-1_2 sc_column_item sc_column_item_2 even">
															<h3 class="sc_title sc_title_regular sc_align_center" style="margin-top:1.6em;margin-right:3.15em;margin-left:0.25em;text-align:center;color:#80b500;font-weight:300;">WHEN QUALITY MATTERS TO YOU<br />
																	AND YOUR CUSTOMERS
															</h3>
														</div> -->
													</div>
													<div class="vc_empty_space"   style="height: 38.5em" >
														<span class="vc_empty_space_inner"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					<div class="vc_row wpb_row vc_row-fluid">
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper">
									<h3 class="sc_title sc_title_regular sc_align_left" style="margin-top:3.5em;text-align:left;" data-animation="animated fadeIn normal">Gia đình Cordy</h3>
									<style type="text/css">.blog-organics .esg-media-poster{width:auto !important; min-height:180px; max-width:100% !important}.blog-organics .esg-entry-media{max-height:180px}.blog-organics .eg-organics-blog-element-27{display:inline-block}.shop-organics .added_to_cart{font-size:10px !important;  line-height:13px !important;  color:#ffffff !important;  font-weight:400 !important;  padding:11px 11px 11px 13px !important;  border-radius:4px 4px 4px 4px !important;  background-color:rgba(128,181,0,1.00) !important;  z-index:2 !important;  display:block;  font-family:"Roboto" !important;  text-transform:uppercase !important}.shop-organics .added_to_cart:hover{background-color:rgba(63,40,3,1.00) !important}.shop-organics .add_to_cart_button.added{display:none !important}.esg-content.eg-twitterstream-element-33-a{display:inline-block}.eg-twitterstream-element-35{word-break:break-all}.esg-overlay.eg-twitterstream-container{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}.esg-content.eg-facebookstream-element-33-a{display:inline-block}.eg-facebookstream-element-0{word-break:break-all}.esg-overlay.eg-flickrstream-container{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}
									</style>
									<style type="text/css">.shop-organics .navigationbuttons,.shop-organics .esg-pagination,.shop-organics .esg-filters{text-transform:uppercase; text-align:center}.shop-organics .esg-filterbutton,.shop-organics .esg-navigationbutton,.shop-organics .esg-sortbutton,.shop-organics .esg-cartbutton{color:#000; margin-right:5px; cursor:pointer; position:relative; z-index:2; padding:1px 30px; border:none; line-height:38px; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size:12px; font-weight:700; font-family:"Open Sans",sans-serif; display:inline-block; background:#fff; margin-bottom:5px}.shop-organics .esg-navigationbutton{padding:0}.shop-organics .esg-navigationbutton *{color:#000}.shop-organics .esg-navigationbutton{color:#80b500}.shop-organics .esg-pagination-button:last-child{margin-right:0}.shop-organics .esg-navigationbutton.esg-left{left:40px}.shop-organics .esg-navigationbutton.esg-right{left:20px}.shop-organics .esg-navigationbutton.esg-left,.shop-organics .esg-navigationbutton.esg-right{bottom:67px;  background-color:transparent}.shop-organics .esg-filters.esg-singlefilters{height:0px}.shop-organics .esg-sortbutton-wrapper,.shop-organics .esg-cartbutton-wrapper{display:inline-block}.shop-organics .esg-sortbutton-order,.shop-organics .esg-cartbutton-order{display:inline-block;  vertical-align:top;  border:none;  width:40px;  line-height:40px;  border-radius:5px;  -moz-border-radius:5px;  -webkit-border-radius:5px;  font-size:12px;  font-weight:700;  color:#999;  cursor:pointer;  background:#eee;  background:#fff;  margin-left:5px}.shop-organics .esg-cartbutton{color:#fff; cursor:default !important}.shop-organics .esg-cartbutton .esgicon-basket{color:#fff;   font-size:15px;   line-height:15px;   margin-right:10px}.shop-organics .esg-cartbutton-wrapper{cursor:default !important}.shop-organics .esg-sortbutton,.shop-organics .esg-cartbutton{display:inline-block; position:relative; cursor:pointer; margin-right:0px; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px}.shop-organics .esg-navigationbutton:hover,.shop-organics .esg-filterbutton:hover,.shop-organics .esg-sortbutton:hover,.shop-organics .esg-sortbutton-order:hover,.shop-organics .esg-cartbutton-order:hover,.shop-organics .esg-filterbutton.selected{border-color:none;color:#000;  background:transparent}.shop-organics .esg-navigationbutton:hover *{color:#333}.shop-organics .esg-sortbutton-order.tp-desc:hover{color:#333}.shop-organics .esg-filter-checked{padding:1px 3px;  color:#cbcbcb;  background:#cbcbcb;  margin-left:7px;  font-size:9px;  font-weight:300;  line-height:9px;  vertical-align:middle}.shop-organics .esg-filterbutton.selected .esg-filter-checked,.shop-organics .esg-filterbutton:hover .esg-filter-checked{padding:1px 3px 1px 3px;  color:#fff;  background:#000;  margin-left:7px;  font-size:9px;  font-weight:300;  line-height:9px;  vertical-align:middle}
									</style>
									<style type="text/css">.eg-arthur-organic-element-36{font-size:13px !important; line-height:20px !important; color:#3f2803 !important; font-weight:700 !important; padding:0px 0px 0px 0px !important; border-radius:0px 0px 0px 0px !important; background:transparent !important; z-index:2 !important; display:block; font-family:"roboto" !important; text-transform:capitalize !important}.eg-arthur-organic-element-32{font-size:10px !important; line-height:13px !important; color:#ffffff !important; font-weight:400 !important; padding:11px 11px 11px 13px !important; border-radius:4px 4px 4px 4px !important; background:#80b500 !important; z-index:2 !important; display:block; font-family:"Roboto" !important; text-transform:uppercase !important}.eg-arthur-organic-element-28{font-size:10px !important; line-height:13px !important; color:#ffffff !important; font-weight:400 !important; padding:11px 11px 11px 13px !important; border-radius:4px 4px 4px 4px !important; background:#80b500 !important; z-index:2 !important; display:block; font-family:"Roboto" !important; text-transform:uppercase !important}.eg-arthur-organic-element-1{font-size:14px !important; line-height:22px !important; color:#80b500 !important; font-weight:400 !important; padding:0px 0px 0px 0px !important; border-radius:0px 0px 0px 0px !important; background:transparent !important; z-index:2 !important; font-family:"Roboto" !important; text-transform:capitalize !important}.eg-arthur-organic-element-30{font-size:12px !important; line-height:12px !important; color:#80b500 !important; font-weight:400 !important; display:block !important; text-align:left !important; clear:none !important; margin:0px 0px 7px 0px !important; padding:0px 0px 0px 0px !important; border-radius:0px 0px 0px 0px !important; background:transparent !important; position:relative !important; z-index:2 !important}.eg-arthur-organic-element-25{font-size:12px; line-height:22px; color:#b33451; font-weight:400; display:block; text-align:left; clear:none; margin:0px 2px 21px 0px ; padding:0px 0px 0px 0px ; border-radius:0px 0px 0px 0px ; position:relative; z-index:2 !important; font-family:"Roboto"; text-transform:capitalize}
									</style>
									<style type="text/css">.eg-arthur-organic-element-32:hover{font-size:10px !important; line-height:13px !important; color:#ffffff !important; font-weight:400 !important; border-radius:4px 4px 4px 4px !important; background:#3f2803 !important; font-family:"Roboto" !important; text-transform:uppercase !important}.eg-arthur-organic-element-28:hover{font-size:10px !important; line-height:13px !important; color:#ffffff !important; font-weight:400 !important; border-radius:4px 4px 4px 4px !important; background:#3f2803 !important; font-family:"Roboto" !important; text-transform:uppercase !important}.eg-arthur-organic-element-1:hover{font-size:14px !important; line-height:22px !important; color:#669100 !important; font-weight:400 !important; border-radius:0px 0px 0px 0px !important; background:transparent !important; font-family:"Roboto" !important; text-transform:capitalize !important}</style>
									<style type="text/css">.eg-arthur-organic-element-36-a{display:block !important; text-align:left !important; clear:none !important; margin:16px 0px 4px 0px !important; position:relative !important}</style>
									<style type="text/css">.eg-arthur-organic-element-32-a{display:inline-block !important; float:none !important; clear:none !important; margin:0px 0px 5px 0px !important; position:relative !important}</style>
									<style type="text/css">.eg-arthur-organic-element-28-a{display:inline-block !important; float:none !important; clear:both !important; margin:0px 0px 5px 0px !important; position:relative !important}</style>
									<style type="text/css">.eg-arthur-organic-element-1-a{font-size:14px !important; line-height:22px !important; color:#80b500 !important; font-family:"Roboto" !important; font-weight:400 !important; text-decoration:none !important; text-transform:capitalize !important; display:block !important; text-align:left !important; clear:none !important; margin:0px 0px 4px 0px !important; position:relative !important}</style>
									<style type="text/css">.eg-arthur-organic-container{background:rgba(128,181,0,0.25)}</style>
									<style type="text/css">.eg-arthur-organic-content{background:transparent; padding:0px 0px 0px 0px; border-width:0px 0px 0px 0px; border-radius:0px 0px 0px 0px; border-color:#e5e5e5; border-style:none; text-align:center}</style>
									<style type="text/css">.esg-grid .mainul li.eg-arthur-organic-wrapper{background:#ffffff; padding:0px 0px 0px 0px; border-width:0px 0px 0px 0px; border-radius:0px 0px 0px 0px; border-color:; border-style:none}</style>
									<style type="text/css">.esg-grid .mainul li.eg-arthur-organic-wrapper .esg-media-poster{background-size:cover; background-position:center center; background-repeat:no-repeat}</style>

									<article class="myportfolio-container shop-organics source_type_post" id="esg-grid-18-1-wrap">

										<div id="esg-grid-18-1" class="esg-grid" style="background: transparent;padding: 0px 0px 0px 0px ; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;">
											<article class="esg-filters esg-singlefilters" style="margin-bottom: 0px; text-align: right; ">
												<div class="esg-navigationbutton esg-left  esg-fgc-18"  style="margin-left: 15px !important; margin-right: 15px !important; display: none;">
													<i class="eg-icon-left-open"></i>
												</div>
												<div class="esg-navigationbutton esg-right  esg-fgc-18"  style="margin-left: 15px !important; margin-right: 15px !important; display: none;">
													<i class="eg-icon-right-open"></i>
												</div>
											</article>
											<div class="esg-clear-no-height"></div>
											<ul>
                                                @foreach($gd_cordy_index as $item_gd_cordy)
												<li id="eg-18-post-id-1346" class="filterall filter-simple filter-featured filter-organic-dairy filter-fresh-meal filter-best-selling-products filter-featured-products filter-new-products eg-arthur-organic-wrapper eg-post-id-1346" data-date="1441459331">
													<div class="esg-media-cover-wrapper">
														<div class="esg-entry-media">
															<img src="{{asset('storage/'.$item_gd_cordy->image)}}" alt="" width="628" height="775">
														</div>
														<div class="esg-entry-cover esg-fade" data-delay="0">
															<div class="esg-overlay esg-fade eg-arthur-organic-container" data-delay="0"></div>
															<div class="esg-center eg-post-1346 eg-arthur-organic-element-32-a esg-slideup" data-delay="0.1">
																<a class="eg-arthur-organic-element-32 eg-post-1346 esgbox" href="{{asset('storage/'.$item_gd_cordy->image)}}" data-width="628"  data-height="775" >Quick View</a>
															</div>
															<div class="esg-center eg-arthur-organic-element-34 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
															<!-- <div class="esg-center eg-post-1346 eg-arthur-organic-element-28-a esg-slideup" data-delay="0.25">
																<a href="{{asset('/cart/add/'.$item_gd_cordy->id)}}" rel="nofollow" data-product_id="1346" data-product_sku="" class="eg-arthur-organic-element-28 eg-post-1346 button add_to_cart_button ajax_add_to_cart product_type_simple">Add to cart</a>
															</div> -->
															<div class="esg-center eg-post-1346 eg-arthur-organic-element-28-a esg-slideup"
                                                                data-delay="0.25">
                                                                <a href="{{asset('/cart/add/'.$item_gd_cordy->id)}}" rel=""
                                                                    data-product_id="1346" data-product_sku="" class="eg-arthur-organic-element-28 eg-post-1346 button add_to_cart_button ">
                                                                    Thêm vào giỏ hàng</a>

                                                            </div>
														</div>
														<div class="esg-entry-content eg-arthur-organic-content">
															<div class="esg-content eg-post-1346 eg-arthur-organic-element-36-a">
																<a class="eg-arthur-organic-element-36 eg-post-1346" href="{{route('detail_product',$item_gd_cordy->slug)}}" target="_self" style="height: 20px; overflow-y: hidden;">{{$item_gd_cordy->name}}</a>
															</div>
															<div class="esg-content eg-post-1346 eg-arthur-organic-element-1-a">
																<a class="eg-arthur-organic-element-1 eg-post-1346" href="product-category/organic-dairy/index.html" rel="tag">{{$item_gd_cordy->functions}}</a>
															</div>
															<div class="esg-content eg-post-1346 eg-arthur-organic-element-25">
																<!-- <del>
																	<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&euro;</span>9.99</span>
																</del>  -->
																<ins>
																	<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{ number_format($item_gd_cordy->price)}} VND</span>
																</ins>
															</div>
														</div>   
													</div>
                                                </li>
                                                @endforeach
												
											</ul>
										</div>
									</article>
									<div class="clear"></div>
											<script type="text/javascript">
												function eggbfc(winw,resultoption) {
													var lasttop = winw,
													lastbottom = 0,
													smallest =9999,
													largest = 0,
													samount = 0,
													lamount = 0,
													lastamount = 0,
													resultid = 0,
													resultidb = 0,
													responsiveEntries = [
													{ width:1400,amount:5,mmheight:0},
													{ width:1170,amount:4,mmheight:0},
													{ width:1024,amount:4,mmheight:0},
													{ width:960,amount:3,mmheight:0},
													{ width:778,amount:3,mmheight:0},
													{ width:640,amount:3,mmheight:0},
													{ width:480,amount:2,mmheight:0}
													];
													if (responsiveEntries!=undefined && responsiveEntries.length>0)
														jQuery.each(responsiveEntries, function(index,obj) {
															var curw = obj.width != undefined ? obj.width : 0,
															cura = obj.amount != undefined ? obj.amount : 0;
															if (smallest>curw) {
																smallest = curw;
																samount = cura;
																resultidb = index;
															}
															if (largest<curw) {
																largest = curw;
																lamount = cura;
															}
															if (curw>lastbottom && curw<=lasttop) {
																lastbottom = curw;
																lastamount = cura;
																resultid = index;
															}
														});
													if (smallest>winw) {
														lastamount = samount;
														resultid = resultidb;
													}
													var obj = new Object;
													obj.index = resultid;
													obj.column = lastamount;
													if (resultoption=="id")
														return obj;
													else
														return lastamount;
												}
												if ("masonry"=="even") {
													var coh=0,
													container = jQuery("#esg-grid-18-1");
													var	cwidth = container.width(),
													ar = "4:5",
													gbfc = eggbfc(jQuery(window).width(),"id"),
													row = 1;
													ar = ar.split(":");
													var aratio=parseInt(ar[0],0) / parseInt(ar[1],0);
													coh = cwidth / aratio;
													coh = coh/gbfc.column*row;
													var ul = container.find("ul").first();
													ul.css({display:"block",height:coh+"px"});
												}
												var essapi_18;
												jQuery(document).ready(function() {
													essapi_18 = jQuery("#esg-grid-18-1").tpessential({
														gridID:18,
														layout:"masonry",
														forceFullWidth:"off",
														lazyLoad:"off",
														row:1,
														apiName: "essapi_18",
														loadMoreAjaxToken:"12561bf45f",
														loadMoreAjaxUrl:"{{asset('js/wp-admin/admin-ajax.php')}}",
														loadMoreAjaxAction:"Essential_Grid_Front_request_ajax",
														ajaxContentTarget:"ess-grid-ajax-container-",
														ajaxScrollToOffset:"0",
														ajaxCloseButton:"off",
														ajaxContentSliding:"on",
														ajaxScrollToOnLoad:"on",
														ajaxCallbackArgument:"off",
														ajaxNavButton:"off",
														ajaxCloseType:"type1",
														ajaxCloseInner:"false",
														ajaxCloseStyle:"light",
														ajaxClosePosition:"tr",
														space:30,
														pageAnimation:"horizontal-slide",
														paginationScrollToTop:"off",
														paginationAutoplay:"off",
														spinner:"spinner0",
														lightBoxMode:"single",
														lightboxHash:"group",
														lightboxPostMinWid:"75%",
														lightboxPostMaxWid:"75%",
														lightboxSpinner:"off",
														lightBoxFeaturedImg:"off",
														lightBoxPostTitle:"off",
														lightBoxPostTitleTag:"h2",
														lightboxMargin : "0|0|0|0",
														lbContentPadding : "0|0|0|0",
														lbContentOverflow : "auto",
														animSpeed:1200,
														delayBasic:1,
														mainhoverdelay:1,
														filterType:"single",
														showDropFilter:"hover",
														filterGroupClass:"esg-fgc-18",
														filterNoMatch:"No Items for the Selected Filter",
														filterDeepLink:"off",
														googleFonts:['Open+Sans:300,400,600,700,800','roboto:100,200,300,400,500,600,700,800,900','Droid+Serif:400,700'],
														responsiveEntries: [
														{ width:1400,amount:5,mmheight:0},
														{ width:1170,amount:4,mmheight:0},
														{ width:1024,amount:4,mmheight:0},
														{ width:960,amount:3,mmheight:0},
														{ width:778,amount:3,mmheight:0},
														{ width:640,amount:3,mmheight:0},
														{ width:480,amount:2,mmheight:0}
														]
													});

													var arrows = true,
													lightboxOptions = {
														margin : [0,0,0,0],
														buttons : ["share","thumbs","close"],
														infobar : true,
														loop : true,
														slideShow : {"autoStart": false, "speed": 3000},
														animationEffect : "fade",
														animationDuration : 500,
														beforeShow: function(a, c) {
															if(!arrows) {
																jQuery("body").addClass("esgbox-hidearrows");
															}
															var i = 0,
															multiple = false;
															a = a.slides;
															for(var b in a) {
																i++;
																if(i > 1) {
																	multiple = true;
																	break;
																}
															}
															if(!multiple) jQuery("body").addClass("esgbox-single");
															if(c.type === "image") jQuery(".esgbox-button--zoom").show();
														},
														beforeLoad: function(a, b) {
															jQuery("body").removeClass("esg-four-by-three");
															if(b.opts.$orig.data("ratio") === "4:3") jQuery("body").addClass("esg-four-by-three");
														},
														afterLoad: function() {jQuery(window).trigger("resize.esglb");},
														afterClose : function() {jQuery("body").removeClass("esgbox-hidearrows esgbox-single");},
														transitionEffect : "fade",
														transitionDuration : 366,
														hash : "group",
														arrows : true,
														wheel : false,
													};

													jQuery("#esg-grid-18-1").data("lightboxsettings", lightboxOptions);


													try{
														jQuery("#esg-grid-18-1 .esgbox").esgbox(lightboxOptions);
													} catch (e) {}

												});
											</script>
									<div class="vc_empty_space"   style="height: 1.7em" >
										<span class="vc_empty_space_inner"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="vc_row wpb_row vc_row-fluid vc_custom_1452766656212">
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper " >
                                    <h2 class="title_center" style="    font-size: 30px;">CAO NẤM TRÙNG THẢO CORDY-X </br> QUÀ TẶNG SỨC KHỎE CHO NGƯỜI THÂN YÊU NHẤT </h2>
								</div>
							</div>
						</div>
					</div>
					<div class="vc_row wpb_row vc_row-fluid">
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper">
									<h3 class="sc_title sc_title_regular sc_align_left" style="margin-top:3.5em;margin-bottom:1.3em;text-align:left;" data-animation="animated fadeInUp normal">Thông tin cần Quan tâm</h3>
									<style type="text/css">.blog-organics .esg-media-poster{width:auto !important; min-height:180px; max-width:100% !important}.blog-organics .esg-entry-media{max-height:180px}.blog-organics .eg-organics-blog-element-27{display:inline-block}.shop-organics .added_to_cart{font-size:10px !important;  line-height:13px !important;  color:#ffffff !important;  font-weight:400 !important;  padding:11px 11px 11px 13px !important;  border-radius:4px 4px 4px 4px !important;  background-color:rgba(128,181,0,1.00) !important;  z-index:2 !important;  display:block;  font-family:"Roboto" !important;  text-transform:uppercase !important}.shop-organics .added_to_cart:hover{background-color:rgba(63,40,3,1.00) !important}.shop-organics .add_to_cart_button.added{display:none !important}.esg-content.eg-twitterstream-element-33-a{display:inline-block}.eg-twitterstream-element-35{word-break:break-all}.esg-overlay.eg-twitterstream-container{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}.esg-content.eg-facebookstream-element-33-a{display:inline-block}.eg-facebookstream-element-0{word-break:break-all}.esg-overlay.eg-flickrstream-container{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); background:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); background:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}
									</style>
											<!-- CACHE CREATED FOR: 21 -->
									<style type="text/css">.blogger2 .navigationbuttons,.blogger2 .esg-pagination,.blogger2 .esg-filters{text-transform:uppercase; text-align:center}.blogger2 .esg-filterbutton,.blogger2 .esg-navigationbutton,.blogger2 .esg-sortbutton,.blogger2 .esg-cartbutton{color:#000; margin-right:5px; cursor:pointer; position:relative; z-index:2; padding:1px 30px; border:none; line-height:38px; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; font-size:12px; font-weight:700; font-family:"Open Sans",sans-serif; display:inline-block; background:#fff; margin-bottom:5px}.blogger2 .esg-navigationbutton{padding:0}.blogger2 .esg-navigationbutton *{color:#000}.blogger2 .esg-navigationbutton{color:#80b500}.blogger2 .esg-pagination-button:last-child{margin-right:0}.blogger2 .esg-navigationbutton.esg-left{left:7px;}.blogger2 .esg-navigationbutton.esg-right{left:4px}.blogger2 .esg-navigationbutton.esg-left,.blogger2 .esg-navigationbutton.esg-right{bottom:67px;  background-color:transparent}.blogger2 .esg-filters.esg-singlefilters{height:0px}.blogger2 .esg-navigationbutton .eg-icon-left-open,.blogger2 .esg-navigationbutton .eg-icon-right-open{width:0.45em;  font-size:17px;  color:#80b500}.blogger2 .esg-sortbutton-wrapper,.blogger2 .esg-cartbutton-wrapper{display:inline-block}.blogger2  .esg-sortbutton-order,.blogger2  .esg-cartbutton-order{display:inline-block;  vertical-align:top;  border:none;  width:40px;  line-height:40px;  border-radius:5px;  -moz-border-radius:5px;  -webkit-border-radius:5px;  font-size:12px;  font-weight:700;  color:#999;  cursor:pointer;  background:#eee;  background:#fff;  margin-left:5px}.blogger2 .esg-cartbutton{color:#fff; cursor:default !important}.blogger2 .esg-cartbutton .esgicon-basket{color:#fff;   font-size:15px;   line-height:15px;   margin-right:10px}.blogger2 .esg-cartbutton-wrapper{cursor:default !important}.blogger2 .esg-sortbutton,.blogger2 .esg-cartbutton{display:inline-block; position:relative; cursor:pointer; margin-right:0px; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px}.blogger2 .esg-navigationbutton:hover,.blogger2 .esg-filterbutton:hover,.blogger2 .esg-sortbutton:hover,.blogger2 .esg-sortbutton-order:hover,.blogger2 .esg-cartbutton-order:hover,.blogger2 .esg-filterbutton.selected{border-color:none;color:#000;  background:transparent}.blogger2 .esg-navigationbutton:hover *{color:#333}.blogger2 .esg-sortbutton-order.tp-desc:hover{color:#333}.blogger2 .esg-filter-checked{padding:1px 3px;  color:#cbcbcb;  background:#cbcbcb;  margin-left:7px;  font-size:9px;  font-weight:300;  line-height:9px;  vertical-align:middle}.blogger2 .esg-filterbutton.selected .esg-filter-checked,.blogger2 .esg-filterbutton:hover .esg-filter-checked{padding:1px 3px 1px 3px;  color:#fff;  background:#000;  margin-left:7px;  font-size:9px;  font-weight:300;  line-height:9px;  vertical-align:middle}</style>
									<style type="text/css">.eg-blogger-element-0{font-size:18px; line-height:22px; color:#3f2803; font-weight:500; padding:0px 0px 0px 0px ; border-radius:0px 0px 0px 0px ; background:#ffffff; z-index:2 !important; display:block; font-family:"roboto"; text-transform:capitalize}.eg-blogger-element-1{font-size:36px; line-height:36px; color:#ffffff; font-weight:400; padding:0px 0px 0px 0px ; border-radius:0px 0px 0px 0px ; background:transparent; z-index:2 !important; display:block}.eg-blogger-element-3{font-size:14px !important; line-height:18px !important; color:#8a8a8a !important; font-weight:400 !important; display:inline-block !important; float:none !important; clear:none !important; margin:0px 0px 0px 0px !important; padding:0px 10px 0px 0px !important; border-radius:0px 0px 0px 0px !important; background:#ffffff !important; position:relative !important; z-index:2 !important; font-family:"Roboto" !important; text-transform:capitalize !important; border-top-width:0px !important; border-right-width:0px !important; border-bottom-width:0px !important; border-left-width:0px !important; border-color:#ffffff !important; border-style:solid !important}.eg-blogger-element-29{font-size:14px; line-height:18px; color:#555555; font-weight:400; display:inline-block; float:none; clear:none; margin:0px 0px 0px 0px ; padding:0px 0px 0px 0px ; border-radius:0px 0px 0px 0px ; background:transparent; position:relative; z-index:2 !important; border-top-width:0px; border-right-width:0px; border-bottom-width:0px; border-left-width:0px; border-color:#ffffff; border-style:solid}.eg-blogger-element-27{font-size:14px; line-height:17px; color:#81d742; font-weight:400; padding:0px 0px 0px 0px ; border-radius:0px 0px 0px 0px ; background:transparent; z-index:2 !important; display:block; border-top-width:0px; border-right-width:0px; border-bottom-width:0px; border-left-width:0px; border-color:#ffffff; border-style:solid}.eg-blogger-element-23{font-size:14px !important; line-height:16px !important; color:#aaaaaa !important; font-weight:300 !important; padding:0px 10px 0px 0px !important; border-radius:0px 0px 0px 0px !important; background:transparent !important; z-index:2 !important; display:block; font-family:"Roboto" !important; text-transform:capitalize !important; border-top-width:0px !important; border-right-width:0px !important; border-bottom-width:0px !important; border-left-width:0px !important; border-color:#aaaaaa !important; border-style:solid !important}.eg-blogger-element-6{font-size:14px !important; line-height:22px !important; color:#555555 !important; font-weight:400 !important; display:block !important; text-align:left !important; clear:none !important; margin:24px 0px 0px 0px !important; padding:0px 0px 0px 0px !important; border-radius:0px 0px 0px 0px !important; background:#ffffff !important; position:relative !important; z-index:2 !important; font-family:"Roboto" !important; text-transform:capitalize !important}</style>
									<style type="text/css">.eg-blogger-element-1:hover{font-size:36px; line-height:36px; color:#ffffff; font-weight:400; border-radius:0px 0px 0px 0px ; border-top-width:0px; border-right-width:0px; border-bottom-width:0px; border-left-width:0px; border-color:#ffffff; border-style:solid}</style>
									<style type="text/css">.eg-blogger-element-0-a{display:block; text-align:left; clear:both; margin:0px 0px 5px 0px ; position:relative}</style>
									<style type="text/css">.eg-blogger-element-1-a{display:inline-block; float:none; clear:none; margin:0px 0px 0px 0px ; position:relative}</style>
									<style type="text/css">.eg-blogger-element-27-a{display:inline-block; float:none; clear:none; margin:0px 0px 0px 0px ; position:relative}</style>
									<style type="text/css">.eg-blogger-element-23-a{display:inline-block !important; float:none !important; clear:none !important; margin:0px 0px 0px 10px !important; position:relative !important}</style>
									<style type="text/css">.eg-blogger-container{background:rgba(128,181,0,0.25)}</style>
									<style type="text/css">.eg-blogger-content{background:#ffffff; padding:26px 0px 30px 0px; border-width:0px 0px 0px 0px; border-radius:0px 0px 0px 0px; border-color:transparent; border-style:none; text-align:left}</style>
									<style type="text/css">.esg-grid .mainul li.eg-blogger-wrapper{background:#ffffff; padding:0px 0px 0px 0px; border-width:0px 0px 0px 0px; border-radius:0px 0px 0px 0px; border-color:transparent; border-style:none}</style>
									<style type="text/css">.esg-grid .mainul li.eg-blogger-wrapper .esg-media-poster{background-size:cover; background-position:center center; background-repeat:no-repeat}</style>

									<article class="myportfolio-container blogger2 source_type_post" id="esg-grid-21-2-wrap">

										<div id="esg-grid-21-2" class="esg-grid" style="background: transparent;padding: 0px 0px 0px 0px ; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;">
											<article class="esg-filters esg-singlefilters" style="margin-bottom: 0px; text-align: right; ">
												<div class="esg-navigationbutton esg-left  esg-fgc-21"  style="margin-left: 2.5px !important; margin-right: 2.5px !important; display: none;">
													<i class="eg-icon-left-open"></i>
												</div>
												<div class="esg-navigationbutton esg-right  esg-fgc-21"  style="margin-left: 2.5px !important; margin-right: 2.5px !important; display: none;">
													<i class="eg-icon-right-open"></i>
												</div>
											</article>
											<div class="esg-clear-no-height"></div>
											<ul>
                                                @foreach($news as $item_news)
												<li id="eg-21-post-id-2001" class="filterall filter-home-1-news filter-home-3-gallery eg-blogger-wrapper eg-post-id-2001" data-date="1438431578">
													<div class="esg-media-cover-wrapper">
														<div class="esg-entry-media">
															<img src="{{asset('storage/'.$item_news->image)}}" alt="" width="870" height="490">
														</div>

														<div class="esg-entry-cover esg-fade" data-delay="0" data-clickable="on">

															<a class="eg-invisiblebutton" href="{{route('detail_news',$item_news->slug)}}" target="_self"></a>                
															<div class="esg-overlay esg-fade eg-blogger-container" data-delay="0"></div>

															<div class="esg-center eg-post-2001 eg-blogger-element-1-a">
																<a class="eg-blogger-element-1 eg-post-2001" href="{{route('detail_news',$item_news->slug)}}" target="_self">
																	<i class="eg-icon-eye"></i>
																</a>
															</div>
														</div>
														<div class="esg-entry-content eg-blogger-content">
															<div class="esg-content eg-post-2001 eg-blogger-element-0-a">
																<a class="eg-blogger-element-0 eg-post-2001" href="{{route('detail_news',$item_news->slug)}}" target="_self" style="height: 43px; overflow-y: hidden;">{{$item_news->name}}</a>
															</div>
															<div class="esg-content eg-post-2001 eg-blogger-element-3">{{$item_news->created_at}}</div>
															<div class="esg-content eg-post-2001 eg-handlehideunder eg-blogger-element-29" data-hideunder="2000" data-hidetype="visibility">/</div>
															<div class="esg-content eg-blogger-element-22 esg-none esg-clear" style="height: 5px; visibility: hidden;"></div>
															<div class="esg-content eg-post-2001 eg-blogger-element-6" style="height: 85px; overflow-y: hidden;">{{$item_news->title}}</div>
														</div>   
													</div>
												</li>
												@endforeach

                                            </ul>
                                        </div>
                                    </article>
                                    <div class="clear"></div>
                                    <script type="text/javascript">
                                        function eggbfc(winw,resultoption) {
                                            var lasttop = winw,
                                            lastbottom = 0,
                                            smallest =9999,
                                            largest = 0,
                                            samount = 0,
                                            lamount = 0,
                                            lastamount = 0,
                                            resultid = 0,
                                            resultidb = 0,
                                            responsiveEntries = [
                                            { width:1400,amount:4,mmheight:0},
                                            { width:1170,amount:4,mmheight:0},
                                            { width:1024,amount:4,mmheight:0},
                                            { width:960,amount:3,mmheight:0},
                                            { width:778,amount:3,mmheight:0},
                                            { width:640,amount:3,mmheight:0},
                                            { width:480,amount:1,mmheight:0}
                                            ];
                                            if (responsiveEntries!=undefined && responsiveEntries.length>0)
                                                jQuery.each(responsiveEntries, function(index,obj) {
                                                    var curw = obj.width != undefined ? obj.width : 0,
                                                    cura = obj.amount != undefined ? obj.amount : 0;
                                                    if (smallest>curw) {
                                                        smallest = curw;
                                                        samount = cura;
                                                        resultidb = index;
                                                    }
                                                    if (largest<curw) {
                                                        largest = curw;
                                                        lamount = cura;
                                                    }
                                                    if (curw>lastbottom && curw<=lasttop) {
                                                        lastbottom = curw;
                                                        lastamount = cura;
                                                        resultid = index;
                                                    }
                                                });
                                            if (smallest>winw) {
                                                lastamount = samount;
                                                resultid = resultidb;
                                            }
                                            var obj = new Object;
                                            obj.index = resultid;
                                            obj.column = lastamount;
                                            if (resultoption=="id")
                                                return obj;
                                            else
                                                return lastamount;
                                        }
                                        if ("masonry"=="even") {
                                            var coh=0,
                                            container = jQuery("#esg-grid-21-2");
                                            var	cwidth = container.width(),
                                            ar = "3:2",
                                            gbfc = eggbfc(jQuery(window).width(),"id"),
                                            row = 1;
                                            ar = ar.split(":");
                                            var aratio=parseInt(ar[0],0) / parseInt(ar[1],0);
                                            coh = cwidth / aratio;
                                            coh = coh/gbfc.column*row;
                                            var ul = container.find("ul").first();
                                            ul.css({display:"block",height:coh+"px"});
                                        }
                                        var essapi_21;
                                        jQuery(document).ready(function() {
                                            essapi_21 = jQuery("#esg-grid-21-2").tpessential({
                                                gridID:21,
                                                layout:"masonry",
                                                forceFullWidth:"off",
                                                lazyLoad:"off",
                                                row:1,
                                                apiName: "essapi_21",
                                                loadMoreAjaxToken:"12561bf45f",
                                                loadMoreAjaxUrl:"{{asset('js/wp-admin/admin-ajax.php')}}",
                                                loadMoreAjaxAction:"Essential_Grid_Front_request_ajax",
                                                ajaxContentTarget:"ess-grid-ajax-container-",
                                                ajaxScrollToOffset:"0",
                                                ajaxCloseButton:"off",
                                                ajaxContentSliding:"on",
                                                ajaxScrollToOnLoad:"on",
                                                ajaxCallbackArgument:"off",
                                                ajaxNavButton:"off",
                                                ajaxCloseType:"type1",
                                                ajaxCloseInner:"false",
                                                ajaxCloseStyle:"light",
                                                ajaxClosePosition:"tr",
                                                space:30,
                                                pageAnimation:"horizontal-slide",
                                                paginationScrollToTop:"off",
                                                paginationAutoplay:"off",
                                                spinner:"spinner0",
                                                lightBoxMode:"single",
                                                lightboxHash:"group",
                                                lightboxPostMinWid:"75%",
                                                lightboxPostMaxWid:"75%",
                                                lightboxSpinner:"off",
                                                lightBoxFeaturedImg:"off",
                                                lightBoxPostTitle:"off",
                                                lightBoxPostTitleTag:"h2",
                                                lightboxMargin : "0|0|0|0",
                                                lbContentPadding : "0|0|0|0",
                                                lbContentOverflow : "auto",
                                                animSpeed:1200,
                                                delayBasic:1,
                                                mainhoverdelay:2,
                                                filterType:"single",
                                                showDropFilter:"hover",
                                                filterGroupClass:"esg-fgc-21",
                                                filterNoMatch:"No Items for the Selected Filter",
                                                filterDeepLink:"off",
                                                googleFonts:['Open+Sans:300,400,600,700,800','roboto:100,200,300,400,500,600,700,800,900','Droid+Serif:400,700'],
                                                responsiveEntries: [
                                                { width:1400,amount:4,mmheight:0},
                                                { width:1170,amount:4,mmheight:0},
                                                { width:1024,amount:4,mmheight:0},
                                                { width:960,amount:3,mmheight:0},
                                                { width:778,amount:3,mmheight:0},
                                                { width:640,amount:3,mmheight:0},
                                                { width:480,amount:1,mmheight:0}
                                                ]
                                            });

                                            var arrows = true,
                                            lightboxOptions = {
                                                margin : [0,0,0,0],
                                                buttons : ["share","thumbs","close"],
                                                infobar : true,
                                                loop : true,
                                                slideShow : {"autoStart": false, "speed": 3000},
                                                animationEffect : "fade",
                                                animationDuration : 500,
                                                beforeShow: function(a, c) {
                                                    if(!arrows) {
                                                        jQuery("body").addClass("esgbox-hidearrows");
                                                    }
                                                    var i = 0,
                                                    multiple = false;
                                                    a = a.slides;
                                                    for(var b in a) {
                                                        i++;
                                                        if(i > 1) {
                                                            multiple = true;
                                                            break;
                                                        }
                                                    }
                                                    if(!multiple) jQuery("body").addClass("esgbox-single");
                                                    if(c.type === "image") jQuery(".esgbox-button--zoom").show();
                                                },
                                                beforeLoad: function(a, b) {
                                                    jQuery("body").removeClass("esg-four-by-three");
                                                    if(b.opts.$orig.data("ratio") === "4:3") jQuery("body").addClass("esg-four-by-three");
                                                },
                                                afterLoad: function() {jQuery(window).trigger("resize.esglb");},
                                                afterClose : function() {jQuery("body").removeClass("esgbox-hidearrows esgbox-single");},
                                                transitionEffect : "fade",
                                                transitionDuration : 500,
                                                hash : "group",
                                                arrows : true,
                                                wheel : false,
                                            };

                                            jQuery("#esg-grid-21-2").data("lightboxsettings", lightboxOptions);


                                        });
                                    </script>
									<div class="vc_empty_space"   style="height: 1.7em" >
										<span class="vc_empty_space_inner"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="sc_section scheme_original" >
                                <div class="content_wrap">
                                    <div class="footer_shortcode_area">
										<p>
											<h3 class="sc_title sc_title_regular sc_align_left" style="margin-top:3.5em;margin-bottom:1.35em;text-align:left;">Khách hàng nói gì?</h3> 
											<div class="sc_testimonials_wrap sc_section" style="background: #f2f5f8;">
												<div class="sc_section_overlay" style="">
													<div id="sc_testimonials_132390921" class="sc_testimonials sc_testimonials_style_testimonials-4  sc_slider_swiper swiper-slider-container sc_slider_pagination sc_slider_pagination_bottom sc_slider_nocontrols sc_slider_nopagination sc_slider_controls sc_slider_controls_bottom sc_slider_height_auto aligncenter" data-interval="3000" data-slides-per-view="1" data-slides-min-width="250" style="width:100%;">
														<div class="slides swiper-wrapper">
                                                            @foreach($clients as $item_clients)
															<div class="swiper-slide" data-style="width:100%;" style="width:100%; ">			
																<div id="sc_testimonials_132390921_1" class="sc_testimonial_item" style="height: auto;">
																	<div class="sc_testimonial_content" style="max-height: auto !important;">
																		<p >{!! $item_clients->content !!}</p>
																	</div>
																	<div class="sc_testimonial_avatar" style="margin-top: 15px;">
                                                                        <a href="{{$item_clients->face}}">
																		    <img class="wp-post-image" width="75" height="75" alt="High speed and quality" src="{{asset('storage/'.$item_clients->image)}}">
                                                                        </a>
                                                                        </div>
																	<div class="sc_testimonial_author" style="margin-top: 34px;">
																		<span class="sc_testimonial_author_name">{{$item_clients->name}}</span><span class="sc_testimonial_author_position">{{$item_clients->email}}</span>
																	</div>
																</div>
                                                            </div>
                                                            @endforeach
															
														</div>
														<div class="sc_slider_controls_wrap">
															<a class="sc_slider_prev" href="#"></a>
															<a class="sc_slider_next" href="#"></a>
														</div>
														<div class="sc_slider_pagination_wrap"></div>
													</div>
												</div>
											</div>
										</p>
									</div>
                                </div>
                                
                                <div class="content_wrap">
								<div class="columns_wrap">
									<aside id="organics_widget_socials-2" class="widget_number_1 column-1_4 widget widget_socials">
										<h5 class="widget_title">Kết nối với chúng tôi</h5>		
										<div class="widget_inner">
											<div class="logo_descr">Để hỗ trợ tốt nhất cho quý khách hàng, có thể chia sẻ và tìm hiểu thêm sản phẩm của chúng tôi tại các liên kết xã hội dưới đây:</div>
											<div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
												<div class="sc_socials_item">
													<a href="{{$contact->youtube}}" target="_blank" >
														<div class="icons8-play-button">
															<img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNDgiIGhlaWdodD0iNDgiCnZpZXdCb3g9IjAgMCA0OCA0OCIKc3R5bGU9IiBmaWxsOiMwMDAwMDA7Ij48ZyBpZD0ic3VyZmFjZTEiPjxwYXRoIHN0eWxlPSIgZmlsbDojRkYzRDAwOyIgZD0iTSA0My4xOTkyMTkgMzMuODk4NDM4IEMgNDIuODAwNzgxIDM2IDQxLjEwMTU2MyAzNy42MDE1NjMgMzkgMzcuODk4NDM4IEMgMzUuNjk5MjE5IDM4LjM5ODQzOCAzMC4xOTkyMTkgMzkgMjQgMzkgQyAxNy44OTg0MzggMzkgMTIuMzk4NDM4IDM4LjM5ODQzOCA5IDM3Ljg5ODQzOCBDIDYuODk4NDM4IDM3LjYwMTU2MyA1LjE5OTIxOSAzNiA0LjgwMDc4MSAzMy44OTg0MzggQyA0LjM5ODQzOCAzMS42MDE1NjMgNCAyOC4xOTkyMTkgNCAyNCBDIDQgMTkuODAwNzgxIDQuMzk4NDM4IDE2LjM5ODQzOCA0LjgwMDc4MSAxNC4xMDE1NjMgQyA1LjE5OTIxOSAxMiA2Ljg5ODQzOCAxMC4zOTg0MzggOSAxMC4xMDE1NjMgQyAxMi4zMDA3ODEgOS42MDE1NjMgMTcuODAwNzgxIDkgMjQgOSBDIDMwLjE5OTIxOSA5IDM1LjYwMTU2MyA5LjYwMTU2MyAzOSAxMC4xMDE1NjMgQyA0MS4xMDE1NjMgMTAuMzk4NDM4IDQyLjgwMDc4MSAxMiA0My4xOTkyMTkgMTQuMTAxNTYzIEMgNDMuNjAxNTYzIDE2LjM5ODQzOCA0NC4xMDE1NjMgMTkuODAwNzgxIDQ0LjEwMTU2MyAyNCBDIDQ0IDI4LjE5OTIxOSA0My42MDE1NjMgMzEuNjAxNTYzIDQzLjE5OTIxOSAzMy44OTg0MzggWiAiPjwvcGF0aD48cGF0aCBzdHlsZT0iIGZpbGw6I0ZGRkZGRjsiIGQ9Ik0gMjAgMzEgTCAyMCAxNyBMIDMyIDI0IFogIj48L3BhdGg+PC9nPjwvc3ZnPg==">
														</div>
													</a>
												</div>
												<div class="sc_socials_item">
													<a href="{{$contact->fanpage}}" target="_blank" class="social_icons social_facebook">
														<span class="icon-facebook"></span>
													</a>
												</div>
											</div>		
										</div>

									</aside>
									<aside id="organics_widget_recent_posts-5" class="widget_number_2 column-1_4 widget widget_recent_posts">
										<h5 class="widget_title">FAQ</h5>
										@foreach($faq as $item_faq)
										<article class="post_item with_thumb first">
											<div class="post_content">
												<p class="post_title">-
													<a href="{{route('faq',$item_faq->id)}}" style="    color: #333333;">{{$item_faq->title}}</a>
												</p>
											</div>
										</article>
										@endforeach
										
									</aside>
									<!-- <aside id="tag_cloud-6" class="widget_number_3 column-1_4 widget widget_tag_cloud">
										<h5 class="widget_title">Tags</h5>
										<div class="tagcloud">
											<a href="tag/family/index.html" class="tag-cloud-link tag-link-166 tag-link-position-1" style="font-size: 17.081081081081pt;" aria-label="family (5 items)">family</a>
											<a href="tag/farming/index.html" class="tag-cloud-link tag-link-175 tag-link-position-2" style="font-size: 13.675675675676pt;" aria-label="farming (3 items)">farming</a>
											<a href="tag/food/index.html" class="tag-cloud-link tag-link-167 tag-link-position-3" style="font-size: 15.567567567568pt;" aria-label="food (4 items)">food</a>
											<a href="tag/gluten/index.html" class="tag-cloud-link tag-link-176 tag-link-position-4" style="font-size: 13.675675675676pt;" aria-label="gluten (3 items)">gluten</a>
											<a href="tag/grocery/index.html" class="tag-cloud-link tag-link-171 tag-link-position-5" style="font-size: 15.567567567568pt;" aria-label="grocery (4 items)">grocery</a>
											<a href="tag/healthy/index.html" class="tag-cloud-link tag-link-168 tag-link-position-6" style="font-size: 15.567567567568pt;" aria-label="healthy (4 items)">healthy</a>
											<a href="tag/lifestyle/index.html" class="tag-cloud-link tag-link-173 tag-link-position-7" style="font-size: 8pt;" aria-label="lifestyle (1 item)">lifestyle</a>
											<a href="tag/organic/index.html" class="tag-cloud-link tag-link-174 tag-link-position-8" style="font-size: 13.675675675676pt;" aria-label="organic (3 items)">organic</a>
											<a href="tag/post-format/index.html" class="tag-cloud-link tag-link-164 tag-link-position-9" style="font-size: 22pt;" aria-label="post format (10 items)">post format</a>
										</div>
									</aside> -->
									<aside id="organics_widget_recent_posts-6" class="widget_number_4 column-1_4 widget widget_recent_posts">
										<h5 class="widget_title">Liên Hệ </h5>
										<div class="vc_row wpb_row vc_row-fluid vc_custom_1439909374065" style="    margin-left: -63px;margin-right: -63px;">
											<div class="wpb_column vc_column_container vc_col-sm-12" style="    margin-left: 40px;">
												<div class="vc_column-inner " >
													<div class="wpb_wrapper">
														<div  id="sc_form_500373089_wrap" class="sc_form_wrap">
															<div  id="sc_form_500373089" class="sc_form sc_form_style_form_2 aligncenter">
																<div class="sc_columns columns_wrap">
																	<div class="sc_form_fields column-2_3">
																		<form  id="sc_form_500373089" data-formtype="form_2" method="post" action="">
																			<div class="sc_form_info">
																				<div class="sc_form_item sc_form_field label_over">
																					<label class="required" for="sc_form_username">Tên</label>
																					<input id="sc_form_username" type="text" name="username" placeholder="Tên *" style="max-height: 0px;">
																				</div>
																				<div class="sc_form_item sc_form_field label_over">
																					<label class="required" for="sc_form_email">E-mail</label>
																					<input id="sc_form_email" type="text" name="email" placeholder="E-mail *"  style="max-height: 0px;">
																				</div>
																			</div>
																			<div class="sc_form_item sc_form_message label_over">
																				<label class="required" for="sc_form_message">Thông điệp</label>
																				<textarea id="sc_form_message" name="message" placeholder="Thông điệp" style="min-height: 4.5em;"></textarea>
																			</div>
																			<div class="sc_form_field sc_form_field_checkbox">
																				<input type="checkbox" id="i_agree_privacy_policy_sc_form_1" name="i_agree_privacy_policy" class="sc_form_privacy_checkbox" value="1">
																				<label for="i_agree_privacy_policy_sc_form_1">I agree that my submitted data .</label>
																			</div>                    
																			<div class="sc_form_item sc_form_button">
																				<button  disabled="disabled">Gửi tin nhắn</button>
																			</div>
																			<div class="result sc_infobox"></div>
																		</form>
																	</div>
																</div>
															</div>
														</div>
														<!-- <div class="vc_empty_space"   style="height: 7.5em" >
															<span class="vc_empty_space_inner"></span>
														</div> -->
													</div>
												</div>
											</div>
										</div>
									</aside>
								</div>	<!-- /.columns_wrap -->
							</div>	<!-- /.content_wrap -->

				</section> <!-- </section> class="post_content" itemprop="articleBody"> -->
			</article> <!-- </article> class="itemscope post_item post_item_single post_featured_default post_format_standard post-788 page type-page status-publish hentry" itemscope itemtype="http://schema.org/Article"> -->	<section class="related_wrap related_wrap_empty"></section>

		</div> <!-- </div> class="content"> -->
	</div> <!-- </div> class="content_wrap"> -->
</div>		<!-- </.page_content_wrap> -->
							
@endsection