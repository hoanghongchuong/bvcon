<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BangGia;
use File;
class BangGiaController extends Controller
{
    public function index()
    {
    	$data = BangGia::orderBy('id','desc')->get();
    	return view('admin.banggia.index', compact('data'));
    }
    public function getCreate()
    {
    	return view('admin.banggia.create');
    }
    public function postCreate(Request $req)
    {
    	$document = $req->file('fImages');
        $path_document='upload/document';
        $document_name='';
        if(!empty($document)){
            $document_name=time().'_'.$document->getClientOriginalName();
            $document->move($path_document,$document_name);
        }
        $data = new BangGia;
        $data->name_vi = $req->name_vi;
    	$data->name_en = $req->name_en;    	
        $data->document = $document_name;
        $data->save();
    	return redirect()->route('admin.banggia.index')->with('status','Thêm thành công');
    }
    public function getEdit($id)
    {
    	$data = BangGia::find($id);    	
    	return view('admin.banggia.edit', compact('data'));
    }

    public function postEdit(Request $req, $id)
    {
    	$data = BangGia::where('id',$id)->first();
    	$document = $req->file('fImages');
        $document_current = 'upload/document/'.$req->document_current;
        if(!empty($document)){
            $path_document='upload/document';
            $document_name=time().'_'.$document->getClientOriginalName();
            $document->move($path_document,$document_name);
            $data->document = $document_name;
            if (File::exists($document_current)) {
                File::delete($document_current);
            }
        }
    	$data->name_vi = $req->name_vi;
    	$data->name_en = $req->name_en;
    	$data->save();
    	return back()->with('status','Thành công');
    }
}
