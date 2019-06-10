@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $sliders = \App\Slider::where('com','gioi-thieu')->where('status',1)->get();
?>
<div class="content-home-cate">
    <div class="container">
        <div class="row">
            <div class="col-md-3 hidden-xs">
                <h3 class="title-cate"><i class="fa fa-align-justify"></i> Danh mục sản phẩm</h3>
                <div class="list-cate-home">
                    <ul class="menu-sidebar">
                        @foreach($categories as $category)
                        <li>
                            <a href=""><i class="fa fa-caret-right"></i> {{$category['name_'.$lang]}}</a>
                            <!-- <ul class="menu-sidebar-child">
                                <li><a href="#" title="KỆ TIVI">Danh mục 1</a></li>
                                <li><a href="#" title="KỆ TIVI">Danh mục 1</a></li>
                                <li><a href="#" title="KỆ TIVI">Danh mục 1</a></li>
                                <li><a href="#" title="KỆ TIVI">Danh mục 1</a></li>
                                <li><a href="#" title="KỆ TIVI">Danh mục 1</a></li>
                                
                            </ul> -->
                        </li>
                        @endforeach
                    </ul>
                </div>
                <h3 class="title-cate">Hỗ trợ trực tuyến</h3>
                <div class="box-support">
                    @foreach($supports as $sp)
                    <div class="media">
                        <a class="pull-left" href="">
                            <img class="media-object" src="{{asset('upload/hinhanh/'.$sp->photo)}}" alt="Image">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">{{$sp['name_'.$lang]}}</h4>
                            <p>{{$sp['mota_'.$lang]}}</p>
                            <p>{{$sp['phone']}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- <h3 class="title-cate">Khuyến mại</h3>
                <div class="box-saleof">
                    <a href="" title=""><img src="images/km1.jpg" alt=""></a>
                    <a href="" title=""><img src="images/km1.jpg" alt=""></a>
                    <a href="" title=""><img src="images/km1.jpg" alt=""></a>
                    <a href="" title=""><img src="images/km1.jpg" alt=""></a>
                    <a href="" title=""><img src="images/km1.jpg" alt=""></a>
                    <a href="" title=""><img src="images/km1.jpg" alt=""></a>
                </div> -->
                <h3 class="title-cate">Tin tức mới</h3>
                <div class="box-news-home">
                    @foreach($news as $n)
                    <div class="item">
                        <div class="col-md-2 col-xs-2 pdl-0 pdr-0">
                            <div class="created-date">
                                <div class="box-date">
                                    <span>{{date('d', strtotime($n->created_at))}} <br>TH{{date('m', strtotime($n->created_at))}}</span>
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-10 col-xs-10">
                            <div class="name_news"><a href="{{url('tin-tuc/'.$n['alias_vi'].'.html')}}" title="">{{$n['name_'.$lang]}}</a></div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <h3 class="title-cate">Fanpage</h3>
                <div class="box-fanpage">
                    <div class="fb-page" data-href="{{$setting->facebook}}" data-tabs="timeline" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{$setting->facebook}}" class="fb-xfbml-parse-ignore"><a href="{{$setting->facebook}}">Facebook</a></blockquote></div>
                </div>
            </div>    
            <div class="col-md-9 col-xs-12 pdl-0 pdr-0">
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
                <div class="box-content top-box">
                    <ul class="cate-child nav nav-tabs ">
                        <li class="active "><a data-toggle="tab" aria-expanded="false" href="#home0">Sản phẩm bán chạy</a></li>
                        <li class=" "><a data-toggle="tab" aria-expanded="false" href="#home1">Sản phẩm Khuyến mại</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="home0">
                            <div class="list-item">
                                @foreach($productSaleOff as $sale)
                                <div class="col-md-3 col-xs-6 pdl-10 pdr-10">
                                    <div class="item">                                        
                                        <div class="box-image">
                                            <a href="{{url('san-pham/'.$sale->alias_vi.'.html')}}" title="{{$sale['name_'.$lang]}}"><img src="{{asset('upload/product/'.$sale['photo'])}}" alt="{{$sale['name_'.$lang]}}"></a>
                                        </div>
                                        <p class="name_product"><a href="{{url('san-pham/'.$sale->alias_vi.'.html')}}" title="{{$sale['name_'.$lang]}}">{{$sale['name_'.$lang]}}</a></p>
                                        <div class="price tac info-price">
                                            <!-- <p class="price_old">2,500,000 VNĐ</p> -->
                                            <p class="price_news">{{trans('label.price')}}:
                                                @if($lang =='vi') 
                                                    {{number_format($sale['price_vi'])}} vnđ
                                                @elseif($lang =='en') 
                                                    $ {{number_format($sale['price_en'])}}
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="home1">
                            <div class="list-item">
                                @foreach($productHot as $hot)
                                <div class="col-md-3 col-xs-6 pdl-10 pdr-10">
                                    <div class="item">                                        
                                        <div class="box-image">
                                            <a href="{{url('san-pham/'.$hot->alias_vi.'.html')}}" title="{{$hot['name_'.$lang]}}"><img src="{{asset('upload/product/'.$hot->photo)}}" alt="{{$hot['name_'.$lang]}}"></a>
                                        </div>
                                        <p class="name_product"><a href="{{url('san-pham/'.$hot->alias.'.html')}}" title="{{$hot['name_'.$lang]}}">{{$hot['name_'.$lang]}}</a></p>
                                        <div class="price tac info-price">
                                            
                                            <p class="price_news">@if($lang =='vi') 
                                                    {{number_format($hot['price_vi'])}} vnđ
                                                @elseif($lang =='en') 
                                                    $ {{number_format($hot['price_en'])}}
                                                @endif</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($cate_pro as $cate)
                <div class="box-content">
                    <div class="title-category">
                        <div class="pull-left">
                            <span class="name-cate">{{$cate['name_'.$lang]}}</span>
                        </div>
                        <div class="pull-right">
                            <a href="" title="" class="read-more">Xem thêm</a>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="owl-carousel owl-theme owl-carousel-product owl-carousel-product1">
                            @foreach($cate->products->take(12)->get() as $item)
                            <div class="item">
                                
                                <div class="box-image">
                                    <a href="{{url('san-pham/'.$item['alias_vi'].'.html')}}" title=""><img src="{{asset('upload/product/'.$item['photo'])}}" alt="{{$item['name_'.$lang]}}"></a>
                                </div>
                                <p class="name_product"><a href="{{url('san-pham/'.$item['alias_vi'].'.html')}}" title="{{$item['name_'.$lang]}}">{{$item['name_'.$lang]}}</a></p>
                                <div class="price tac info-price">
                                    <!-- <p class="price_old">2,500,000 VNĐ</p> -->
                                    <p class="price_news">
                                        {{trans('label.price')}}:
                                        @if($lang =='vi') 
                                            {{number_format($item['price_vi'])}} vnđ
                                        @elseif($lang =='en') 
                                            $ {{number_format($item['price_en'])}}
                                        @endif
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
                @endforeach
            </div> 
        </div>
    </div>
</div>
@endsection
