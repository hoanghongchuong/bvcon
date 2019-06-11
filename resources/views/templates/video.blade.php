@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb breadcrumbx">
                <li>
                    <a href="{{url('')}}">{{trans('label.home')}}</a>
                </li>
                <li class="active">Video</li>
            </ol>
        </div>
    </div>
</div>
<div class="content-home-cate mt-0" style="">
    <div class="container">
        <div class="row">
        	@foreach($video as $item)
        	<div class="col-md-4 col-sm-4 col-xs-6">
                <a class="background-item" data-fancybox="video" href="https://www.youtube.com/embed/{{$item['link']}}" style="background-image: url('{{asset('upload/hinhanh/'.$item['photo'])}}'); transition-duration: .5s;">
		            <span class="plus-icon" style="transition-duration: .5s;">
		                <img src="{{asset('public/images/play.png')}}">
		            </span>
	                <div class="text" style="transition-duration: .5s">
	                    <h4 class="title">{{$item['name_'.$lang]}}</h4>
	                    <div class="detail-list">
	                        <p class="time"><i class="fa fa-clock-o"></i>19.03.2019</p>
	                    </div>
	                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
