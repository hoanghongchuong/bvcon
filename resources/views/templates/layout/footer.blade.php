<?php
    $setting = \App\Setting::where('id', 1)->first()->toArray();
    $lang = Session::get('locale');    
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="title-footer">{{trans('label.send_contact')}}</h3>
                <p><span class="ketrang"></span></p>
                <form action="" method="get" accept-charset="utf-8" class="form-regis">
                    <input type="text" placeholder="{{trans('label.hoten')}}" class="form-control">
                    <input type="text" placeholder="{{trans('label.phone')}}" class="form-control">
                    <textarea name="content" class="form-control" placeholder="{{trans('label.hoten')}}"></textarea>
                    <button type="submit" class="btn-send-regis btn btn-primary">{{trans('label.send')}}</button>
                </form>
            </div>
            <div class="col-md-4">
                <h3 class="title-footer">{{trans('label.contact')}}</h3>
                <p><span class="ketrang"></span></p>
                <p>{{$setting['company_'.$lang]}}</p>
                <p>{{trans('label.address')}}: {{$setting['address_'.$lang]}}</p>
                <p>Email: {{$setting['email']}}</p>
                <p>{{trans('label.phone')}}: {{$setting['phone']}}</p>
                <p><a href="{{$setting['facebook']}}" title="">Fanpage</a></p>
            </div>
            <div class="col-md-4">
                <h3 class="title-footer">{{trans('map')}}</h3>
                <p><span class="ketrang"></span></p>
                <div class="box-map">
                    {!! $setting['iframemap'] !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="bottom-f">
                <p>Designed hungthinhads.vn</p>
            </div>
        </div>
    </div>
</footer>