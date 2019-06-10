@extends('admin.master')
@section('content')
@section('controller','Feedback')
@section('action','Edit')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    @yield('controller')
    <small>@yield('action')</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="backend"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="javascript:">@yield('controller')</a></li>
    <li class="active">@yield('action')</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  
    <div class="box">
      @include('admin.messages_error')
        <div class="box-body">          
            <form name="frmAdd" method="post" action="backend/support/edit/{{$slogan->id}}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Tiếng việt</a></li>
                        <li><a href="#tab_2" data-toggle="tab" aria-expanded="true">Tiếng anh</a></li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group @if ($errors->first('fImages')!='') has-error @endif">
                                        <div class="form-group">
                                            <img src="{{ asset('upload/hinhanh/'.$slogan->photo) }}" onerror="this.src='{{asset('public/admin_assets/images/no-image.jpg')}}'" width="200"  alt="NO PHOTO" />
                                            <input type="hidden" name="img_current" value="{!! @$slogan->photo !!}">
                                        </div>
                                        <label for="file">Chọn File ảnh</label>
                                        <input type="file" id="file" name="fImages" >
                                        <p class="help-block">Width:225px - Height: 162px</p>
                                        @if ($errors->first('fImages')!='')
                                        <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('fImages'); !!}</label>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="ten">Tên</label>
                                        <input type="text" id="txtName" name="name_vi" value="{{ $slogan->name_vi }}"  class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="ten">Số điện thoại</label>
                                        <input type="text" id="" name="phone" value="{{$slogan->phone}}"  class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Mô tả</label>
                                        <input type="text" name="mota_vi" value="{{$slogan->mota_vi}}" class="form-control" placeholder="">
                                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="tab_2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ten">Tên</label>
                                        <input type="text" id="" name="name_en" value="{{ $slogan->name_en }}"  class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Mô tả</label>
                                        <input type="text" name="mota_en" value="{{$slogan->mota_en}}" class="form-control" placeholder="">
                                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Lưu</button>
                            <button type="button" onclick="javascript:window.location='backend/feedback'" class="btn btn-danger">Thoát</button>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    
</section><!-- /.content -->

@endsection()
