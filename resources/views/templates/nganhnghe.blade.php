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
            <h3>Chúng tôi hiểu rằng</h3>
			<p class="doanvangioithieu">
				Mỗi ngôi nhà được dựng xây là NIỀM TIN của biết bao gia đình.<br>
				Mỗi công trình lớn thành công là GIÁ TRỊ trường tồn của một quốc gia. <br>
				Khi CÙNG nhau, chúng ta có thể xây dựng một tương lai bền vững.<br>
				Tại HAWEE, chúng tôi đón NHẬN niềm tin, TRAO những giá trị bền vững, CÙNG bạn tạo nên thế giới tốt đẹp hơn.
			</p>
			<p style="color:white; text-align:center; font-size:22px; padding-top:20px; padding-bottom:23px; font-weight:bold;"> HAWEE - Truly your partner</p>
        </div>
	</div>
	<div class="video-right">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/FPlEouHnYB8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
</div>
@endsection