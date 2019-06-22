@extends('index')
@section('content')
<?php
    $sliders = \App\Slider::where('com','gioi-thieu')->where('status',1)->get();
?>
<div class="slider">
	<div id="carousel-id" class="carousel slide" data-ride="carousel">                    
        <div class="carousel-inner">
           @foreach($sliders as $k=>$slider)
            <div class="item @if($k ==0)active @endif">
                <img  alt="Third slide" src="{{asset('upload/hinhanh/'.$slider['photo'])}}">                            
            </div>
            @endforeach
        </div>
        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
<div class="box-content mt-0">
	<div class="about-left">
		<div class="boxInfoGrid">
            {!! $about['mota_'.$lang] !!}
        </div>
	</div>
	<div class="video-right">
		<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/FPlEouHnYB8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
		<a class="background-item" data-fancybox="video" href="https://www.youtube.com/embed/{{$video['link']}}" style="background-image: url('{{asset('upload/hinhanh/'.$video['photo'])}}'); transition-duration: .5s;">
            <span class="plus-icon" style="transition-duration: .5s;">
                <img src="{{asset('public/images/play.png')}}">
            </span>
            <div class="text" style="transition-duration: .5s">
                <h4 class="title">{{$video['name_'.$lang]}}</h4>
                <div class="detail-list">
                    <p class="time"><i class="fa fa-clock-o"></i>{{date('d/m/Y', strtotime($video['created_at']))}}</p>
                </div>
            </div>
        </a>
	</div>
</div>
<div class="box-content">
	@if(count($data) > 2)
	<div class="home--section-1 popular-news-box">
		<div class="home-news-item" data-aos="fade-up">
			<a class="text" href="{{url('tin-tuc/'.@$data[0]['alias_vi'].'.html')}}">
				<div class="inner-text">
					<p class="date"><i class="fa fa-clock-o"></i> {{date('d/m/Y', strtotime(@$data[0]['created_at']))}}</p>
					<h4 class="title">{{@$data[0]['name_'.$lang]}}</h4>
				</div>
			</a>
			<div class="image">
				<a href="{{url('tin-tuc/'.$data[0]['alias_vi'].'.html')}}" style="background-image: url('{{asset('upload/news/'.@$data[0]['photo'])}}'); transition-duration: .5s;"></a>
			</div>
		</div>
		<div class="home-news-item" data-aos="fade-up" style="width:calc(25% - 4px); padding-left: 2px; padding-right: 2px;">
			<a class="text" href="{{url('tin-tuc/'.@$data[1]['alias_vi'].'.html')}}">
				<div class="inner-text">
					<p class="date"><i class="fa fa-clock-o"></i> {{date('d/m/Y', strtotime(@$data[1]['created_at']))}}</p>
					<h4 class="title">{{@$data[1]['name_'.$lang]}}</h4>
				</div>
			</a>
			<div class="image">
				<a href="{{url('tin-tuc/'.@$data[1]['alias_vi'].'.html')}}" style="background-image: url('{{asset('upload/news/'.@$data[1]['photo'])}}'); transition-duration: .5s;"></a>
			</div>
		</div>
		<div class="home-news-item" data-aos="fade-up">
			<a class="text" href="{{url('tin-tuc/'.@$data[2]['alias_vi'].'.html')}}">
				<div class="inner-text">
					<p class="date"><i class="fa fa-clock-o"></i> {{date('d/m/Y', strtotime(@$data[2]['created_at']))}}</p>
					<h4 class="title">{{@$data[2]['name_'.$lang]}}</h4>
				</div>
			</a>
			<div class="image">
				<a href="{{url('tin-tuc/'.@$data[2]['alias_vi'].'.html')}}" style="background-image: url('{{asset('upload/news/'.@$data[2]['photo'])}}'); transition-duration: .5s;"></a>
			</div>
		</div>
	</div>
	@endif
	<div class="capacity-block" style="background-image: url('{{asset('public/images/bg-1.jpg')}}'); margin-top: 4px;">
		<div class="capacity-top">
			
			<div class="text" style="color:#0b7cc1">{{ $lang =='vi' ? "Năng lực thi công" : "CONSTRUCTION CAPACITY" }}</div>
			<div class="img">
				 <img src="{{asset('public/images/icon-11.png')}}" alt="">
			</div>
			<div class="number">
				<a id="nangluc" target="_blank" href="">
					{{$lang =='vi' ? "Hồ Sơ Năng Lực" : "COMPANY PROFILE"}}
				</a>
			</div>
		</div>
		<div class="capacity-bottom">
			<div class="item-block">
				<div class="item">
					 <div class="img">
						 <img src="{{asset('public/images/nangluc-01.png')}}" alt="">
					</div>
						<div class="text-block">
							<div class="title">Cán bộ <br> nhân viên</div>
							<div class="icon-text">
														
									<div class="icon"> &gt; </div>
									<div class="statis">
								<div class="num" id="sochay" ;"=""><strong>1.224</strong></div>
							</div>
							<span class="unit" id="tidong">Người</span>	
							</div>	
						</div>
				</div>
			</div>
			<div class="item-block">
				<div class="item">
					<div class="img">
						<img src="{{asset('public/images/nangluc-02.jpg')}}" alt="">
					</div>
					<div class="text-block" style="padding-top:17px;">
						<div class="title">Doanh Thu</div>
						 <div class="icon-text">
							<div class="icon">&gt;</div>
							<div class="statis">
								<div class="num" id="sochay"><strong>2.200</strong></div>
							</div>
							
							<span class="unit" id="tidong">Tỷ VNĐ</span>
						</div>
					</div>
				</div>
			</div>
			<div class="item-block">
				<div class="item">
					<div class="img">
						<img src="{{asset('public/images/nangluc-03.png')}}" alt="">
					</div>
					<div class="text-block">
						<div class="title">Hạn mức <br> tín dụng</div>
						 <div class="icon-text">
							<div class="icon">&gt;</div>
							<div class="statis">
								<div class="num" id="sochay"><strong>3.000</strong></div>
							</div>										
							<span class="unit" id="tidong">Tỷ VNĐ</span>
						</div>
					</div>
				</div>
			</div>
			<div class="item-block">
				<div class="item">
					 <div class="img">
						<img src="{{asset('public/images/nangluc-04.png')}}" alt="">
					</div>
					<div class="text-block">
						<div class="title">Nhà máy <br> hawee</div>
						<div class="icon-text">
							<!--<div class="dt">Diện <br>Tích</div>-->
							<div class="icon">&gt;</div>
							<div class="statis">
								<div class="num" id="sochay"><strong>25.000</strong></div>
							</div>
							<span class="unit" id="tidong">m2</span>
						</div>
					</div>
				</div>
			</div>
			<div class="item-block">
				<div class="item">
					 <div class="img">
						<img src="{{asset('public/images/nangluc-05.png')}}" alt="">
					</div>
					<div class="text-block">
						<div class="title">Dự án <br> thi công</div>
						<div class="icon-text">
							<div class="statis">
								<div class="num" id="sochay" "=""><strong>250</strong></div>
							</div>
							<span class="unit" id="tidong">Dự án</span>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<section class="home--section-3">				
		<div class="col-md-12" id="bg-img-hungvd" style="background-image:url('{{asset('public/images/Web-PT.png')}}');">
			<div class="col-md-4 hungvd">
				<div class="home-policy-icon" data-aos="fade-right">
					<a href="" target="_blank"></a>
					<div class="item baohanh" data-aos="fade-up" data-aos-duration="2100"><a href="" target="_blank">										
						<h4 class="dichvubaohanhbaotrih4">DỊCH VỤ BẢO HÀNH</h4>
						<p class="phanungnhanh">Với đội ngũ nhân viên kỹ thuật trên khắp các tỉnh thành</p>
						<p class="textphanungnhanh">Ban phản ứng nhanh 24/7 </p>
						<p style="color:#fff; font-size:16px; text-align:left;font-family:BrandonTextF-Regular;">sẽ có mặt tại hiện trường để xử lý sự cố trong <b class="textphanungnhanh">12 giờ </b><br> kể từ khi nhận được yêu cầu của Khách hàng</p>
						
						</a><div class="item" data-aos="fade-up" data-aos-duration="2100"><a href="" target="_blank">
							</a><div class="anhbaohanh"><a href="" target="_blank">
								</a><a class="linkImage1"><img src="{{asset('public/images/icon-2.png')}}" alt="#"></a>
								<p class="title" style="padding-top:10px;"><b style="font-size:30px;">80</b> Cán bộ kỹ thuật</p>
							</div>
							<div class="anhbaohanh">
								<a class="linkImage1"><img src="{{asset('public/images/intro3-img3.png')}}" alt="#"></a>
								<p class="title" style="padding-top:10px;"><b style="font-size:30px;">06</b> Xe chuyên dụng</p>
							</div>
						</div>
					</div>
				</div>	
			</div>						
		</div>					
	</section>
	<div class="partner-box">
		<div class="owl-carousel owl-theme owl-carousel-partner">                        
            @foreach($partners as $partner)
            <div class="item">
            	<a href="{{$partner->url}}" title="" target="_blank">
                	<img src="{{asset('upload/banner/'.$partner->photo)}}" alt="">
                </a>
            </div>
            @endforeach
        </div>
	</div>
</div>
@endsection