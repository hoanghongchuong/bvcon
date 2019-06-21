<?php
    $setting = Cache::get('setting');
    // $menus = \App\Menu::where('parent_id', 0)->orderBy('stt','asc')->get()->toArray();
    // dd($menus);
    $categories = \App\ProductCate::where('com','san-pham')->where('parent_id',0)->get()->toArray();
    $lang = Session::get('locale');
    
?>
<div class="menu visible-lg visible-md vk-header">
    <div class="container">
        <div class="row">
            <div class="col-md-2 pdr-0">
                <a href="{{url('')}}" title="">
                    <img src="{{asset('upload/hinhanh/'.$setting->photo)}}" class="img-logo" alt="">
                </a>
            </div>
            <div class="col-md-10 pdl-0">
                <ul class="navi">
                    <li>
                        <a href="{{url('san-pham')}}">{{trans('label.product')}}</a>
                        <ul class="vk-menu__child">                                
                            @foreach($categories as $k=>$category)
                            <li><a href="{{url('san-pham/'.$category['alias_vi'])}}">{{$category['name_'.$lang]}}</a></li>
                            @endforeach                                                   
                        </ul>
                    </li>
                    <li><a href="{{url('tin-tuc')}}">{{trans('label.news')}}</a></li>
                    <li><a href="{{url('du-an')}}">{{trans('label.project')}}</a></li>
                    <li>
                        <a href="">{{trans('label.library')}}</a>
                        <ul class="vk-menu__child">
                            <li><a href="{{url('video')}}">Video</a></li>
                            <li><a href="{{url('hinh-anh')}}">{{trans('label.hinhanh')}}</a></li>                                               
                        </ul>
                    </li>
                    <li><a href="{{url('bang-gia')}}">{{trans('label.banggia')}}</a></li>
                    <li><a href="{{url('lien-he')}}">{{trans('label.contact')}}</a></li>
                    <li><a href="{{url('gio-hang')}}">{{trans('label.cart')}}</a></li>
                    <li class="language"><a href="{{url('lang/'.'vi')}}" class="pdr-0">VN</a><a href="{{url('lang/'.'en')}}" title="" class="pdl-0"> / EN</a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- /menu -->    
<!-- menu-mobile -->
<div class="visible-xs visible-sm menu-mobile menu-sidebar">
    <div class="logo-mobile">
        <p class="col-xs-12 col-sm-12"><a href="{{url('')}}" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" alt=""></a></p>        
    </div>
    <div class="vk-header__search">
        <div class="container">                
            <a href="#menuMobile" class="menu_Mobile" data-toggle="collapse" class="_btn d-lg-none menu_title"><i class="fa fa-bars"></i> Menu</a>
        </div>
    </div>
    <nav class="vk-header__menu-mobile">
        <ul class="vk-menu__mobile collapse" id="menuMobile">
            
            <li><a href="{{url('')}}">{{trans('label.home')}}</a></li>
            <li><a href="{{url('gioi-thieu')}}">{{trans('label.gioithieu')}}</a></li>
            <li>
                <a href="#">{{trans('label.product')}}</a>
                <a href="#menu2" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                <ul class="collapse" id="menu2">
                    @foreach($categories as $k=>$category)
                    <li>
                        <a href="{{url('san-pham/'.$category['alias_vi'])}}">{{$category['name_'.$lang]}}</a>
                        <!-- <?php $category_chidls = \App\ProductCate::where('parent_id',$category['id'])->get()->toArray(); ?>
                        @if(count($category_chidls) > 0)
                        <a href="#menu-child{{$k}}" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                        <ul class="collapse" id="menu-child{{$k}}">
                            @foreach($category_chidls as $child)                                    
                            <li><a href="{{url('san-pham/'.$child['alias_'.$lang])}}" title="{{$child['name_'.$lang]}}">{{$child['name_'.$lang]}}</a></li>
                            @endforeach
                        </ul>
                        @endif -->
                    </li>
                    @endforeach
                                      
                </ul>
            </li>                
            <li><a href="{{url('tin-tuc')}}">{{trans('label.news')}}</a></li>
            <li><a href="{{url('du-an')}}">{{trans('label.project')}}</a></li>
            <li>
                <a href="">{{trans('label.library')}}</a>
                    <a href="#menu3" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                    <ul class="collapse" id="menu3">
                        <li><a href="{{url('video')}}">Video</a></li>
                        <li><a href="{{url('hinh-anh')}}">{{trans('label.hinhanh')}}</a></li>                                          
                    </ul>
                
            </li>
            <li><a href="{{url('bang-gia')}}">{{trans('label.banggia')}}</a></li>
            <li><a href="{{url('lien-he')}}">{{trans('label.contact')}}</a></li>
            <li><a href="{{url('gio-hang')}}">{{trans('label.cart')}}</a></li>                
        </ul>
    </nav>        
</div>  