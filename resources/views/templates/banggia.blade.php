@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
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
                            <a href="{{url('san-pham/'.$category['alias_vi'])}}"><i class="fa fa-caret-right"></i> {{$category['name_'.$lang]}}</a>
                            
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
                <div class="box-content">
                    <div class="page-inner">
                    	@foreach($data as $item)
                    	<p><a href="{{asset('upload/document/'.$item->document)}}" title="">{{$item['name_'.$lang]}}</a></p>
                    	<hr>
                    	@endforeach
                    </div>
                </div>                
            </div> 
        </div>
    </div>
</div>
@endsection