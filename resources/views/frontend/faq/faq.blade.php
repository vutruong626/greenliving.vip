@extends('frontend.master')
@section('content')
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<div class="top_panel_title top_panel_style_6  title_present breadcrumbs_present scheme_original">
	<div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
		<div class="content_wrap">
			<h1 class="page_title" style="    font-size: 44px">CÁC CÂU HỎI THƯỜNG GẶP</h1>
		</div>
	</div>
</div>
<div class="top_panel_title top_panel_style_6  title_present breadcrumbs_present scheme_original">
    <div class="page_content_wrap page_paddings_yes">
		<div class="content_wrap">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <script> 
                    $(document).ready(function(){
                    $(".flip").click(function(){
                        $(".panel").slideToggle("slow");
                    });
                    });
                </script>
                <div class="container">
                    <!-- <h2>Dropdowns</h2> -->
                        @foreach($faq as $item_faq)
                        <div class="dropdown">
                            <button type="button" data-toggle="dropdown" 
                                 @if($item_faq->id == $select_id_faq) style="background: #80b500;color: #ffffff;width: 100%;margin-bottom: 10px;text-align: left;" @else style="background: #f0f0f0;color: #3f2803;width: 100%;margin-bottom: 10px;text-align: left;" @endif>
                                
                                {{$item_faq->title}}<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" style="width: 100%;padding-left: 30px;">
                                <li><p>{!!$item_faq->content!!}</p></li>
                            
                            </ul>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection