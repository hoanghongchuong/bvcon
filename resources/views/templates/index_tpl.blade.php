@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$lang = Session::get('locale');
$cateNganhNghe = \App\NewsCate::where('com','nganh-nghe')->where('status',1)->get();
$slogans = \App\Slogan::get();
?>
<!-- menu-mobile -->
<div class="visible-xs visible-sm menu-mobile menu-sidebar">
    <div class="logo-mobile">
        <p class="col-xs-12 col-sm-12"><a href="" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" alt=""></a></p>        
    </div>
    <div class="vk-header__search">
        <div class="container">                
            <a href="#menuMobile" class="menu_Mobile" data-toggle="collapse" class="_btn d-lg-none menu_title"><i class="fa fa-bars"></i> Menu</a>
        </div>
    </div>
    <nav class="vk-header__menu-mobile">
        <ul class="vk-menu__mobile collapse" id="menuMobile">
            
            <li><a href="{{url('')}}">Trang chủ</a></li>
            <li><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>                
            <li>
                <a href="">Ngành nghề</a>
                <a href="#menu2" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                <ul class="collapse" id="menu2">
                    @foreach($cateNganhNghe as $cate)
                    <li><a href="#">{{$cate['name_'.$lang]}}</a></li>
                    @endforeach
                    <li><a href="{{url('san-pham')}}">Cung cấp các thiết bị điện.</a></li>
                </ul>
            </li>                
        </ul>
    </nav>        
</div>    
<!-- /menu-mobile -->
<!-- slider box -->
<div class="slider">
    <!-- menu -->
    <div class="menu visible-lg visible-md vk-header menu-home">
        <div class="container">
            <div class="row">
                <div class="col-md-2 pdr-0">
                    <a href="{{url('')}}" title="">
                        <img src="{{asset('upload/hinhanh/'.$setting->photo)}}" class="img-logo" alt="">
                    </a>
                </div>
                <div class="col-md-10 pdl-0">
                    <ul class="navi">                                       
                        <li><a href="{{url('')}}">{{trans('label.home')}}</a></li>
                        <li><a href="{{url('gioi-thieu')}}">{{trans('label.gioithieu')}}</a></li>
                        <li>
                            <a href="">{{trans('label.nganhnghe')}}</a>
                            <ul class="vk-menu__child">                                
                                @foreach($cateNganhNghe as $cate)
                                <li><a href="{{url('nganh-nghe/'.$cate['alias_vi'])}}">{{$cate['name_'.$lang]}}</a></li>
                                @endforeach
                                <li><a href="{{url('san-pham')}}">Cung cấp các thiết bị điện.</a></li>   
                            </ul>
                        </li>
                        <li class="language"><a href="{{url('lang/'.'vi')}}" class="pdr-0">VN</a><a href="{{url('lang/'.'en')}}" title="" class="pdl-0"> / EN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- /menu -->
    <div id="carousel-id1" class="carousel slide" data-ride="carousel">                    
        <div class="carousel-inner">
            @foreach($sliders as $k=>$slider)
            <div class="item @if($k == 0)active @endif vk-banner-item">
                <img  alt="Third slide" src="{{asset('upload/hinhanh/'.$slider['photo'])}}">
                <div class="des-slider">
                    @foreach($slogans as $slogan)
                    <div class="col-md-4 fadeInUp animated wow animated" data-wow-delay=".15s">
                        <p class="title-s">{{$slogan['name_'.$lang]}}</p>
                        <div class="mota">
                            <p>{!! $slogan['content_'.$lang] !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>                    
            </div>
            @endforeach
        </div>
        <a class="left carousel-control" href="#carousel-id1" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id1" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
@endsection
