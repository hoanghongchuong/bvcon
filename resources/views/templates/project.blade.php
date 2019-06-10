@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div class="content-project">
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title">Dự án</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="box-des">
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <img src="{{asset('upload/hinhanh/'.$mota['photo'])}}" alt="" class="wpb_single_image img">
                </div>
                <div class="col-md-8 col-lg-8 col-xs-12">
                    <div class="des-project">
                        {!! $mota['mota_'.$lang] !!}
                    </div>
                </div>
            </div>
            <div class="slider-project">
                <div class="owl-carousel owl-carousel-product owl-theme popup">
                    @foreach($projects as $item)
                    <div class="item">
                        <img src="{{asset('upload/hinhanh/'.$item->photo)}}" alt="">
                        
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="show-popup">
                <div class="overlay"></div>
                <div class="img-show">
                    <span>X</span>
                    <img src="">
                </div>
            </div>
        </div>
    </div>

</div>
@endsection