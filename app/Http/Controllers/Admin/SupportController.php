<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Support;
use File;
class SupportController extends Controller
{
    public function index(){
    	$data = Support::all();
    	// dd($province);
    	return view('admin.support.index',compact('data'));
    }
    public function getCreate(){

    	return view('admin.support.create');
    }
    public function postCreate(Request $request){
        $img = $request->file('fImages');
        $path_img='upload/hinhanh';
        $img_name='';
        if(!empty($img)){
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
        }
    	$slogan = new Support;
        $slogan->name_vi = $request->name_vi;
    	$slogan->name_en = $request->name_en;
    	$slogan->phone = $request->phone;
        $slogan->photo = $img_name; 
        $slogan->mota_vi = $request->mota_vi;
    	$slogan->mota_en = $request->mota_en;
    	$slogan->save();
    	return redirect(route('admin.support.index'))->with('mess','Thêm thành công');
    }

    public function getEdit($id){
    	$slogan = Support::where('id',$id)->first();    	
    	return view('admin.support.edit', compact('slogan'));
    }
    public function postEdit(Request $request, $id){
    	$slogan = Support::where('id',$id)->first();
        $img = $request->file('fImages');
        $img_current = 'upload/hinhanh/'.$request->img_current;
        if(!empty($img)){
            $path_img='upload/hinhanh';
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
            $slogan->photo = $img_name;
            if (File::exists($img_current)) {
                File::delete($img_current);
            }
        }
    	$slogan->name_vi = $request->name_vi;
    	$slogan->name_en = $request->name_en;
        $slogan->phone = $request->phone;
        $slogan->mota_vi = $request->mota_vi;
    	$slogan->mota_en = $request->mota_en;
    	$slogan->save();
    	return redirect(route('admin.support.index'));
    }

    public function delete($id){
    	$data = Support::find($id);
    	$data->delete();
    	return redirect(route('admin.support.index'))->with('mess','Xóa thành công');
    }
}
