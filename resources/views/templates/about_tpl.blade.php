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
                <li class="active">{{trans('label.gioithieu')}}</li>
            </ol>
        </div>
    </div>
</div>
<div class="content-home-cate mt-0" style="">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <h1 class="name_detail_news" style="margin-top: 0px;">{{$data['name_'.$lang]}}</h1>
                <div class="detail_news_box">
                    {!! $data['content_'.$lang] !!}
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
