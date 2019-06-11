<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use File;
class VideoController extends Controller
{
    public function index(){
    	$data = Video::all();
    	return view('admin.video.index', compact('data'));
    }
    public function getCreate(){
    	return view('admin.video.create');
    }
    public function postCreate(Request $request){
        $img = $request->file('fImages');
        $path_img='upload/hinhanh';
        $img_name='';
        if(!empty($img)){
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
        }
        $data = new Video;
        $data->link = $request->link;
        $data->photo = $img_name;
        $data->name_vi = $request->name_vi;
        $data->name_en = $request->name_en;
        $data->save();
    	return redirect(route('admin.video.index'));
    }
    public function getEdit($id){
    	$data = Video::find($id);
    	// dd($data);
    	return view('admin.video.edit', compact('data'));
    }
    public function postEdit(Request $request, $id){
    	$data = Video::where('id',$id)->first();
        $img = $request->file('fImages');
        $img_current = 'upload/hinhanh/'.$request->img_current;
        if(!empty($img)){
            $path_img='upload/hinhanh';
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
            $data->photo = $img_name;
            if (File::exists($img_current)) {
                File::delete($img_current);
            }
        }
        $data->name_vi = $request->name_vi;
    	$data->name_en = $request->name_en;
    	$data->link = $request->link;
    	$data->save();
    	return redirect(route('admin.video.index'));
    }
    public function delete($id){
    	$data = Video::where('id',$id)->first();
    	$data->delete();
    	return redirect()->back();
    }
}
