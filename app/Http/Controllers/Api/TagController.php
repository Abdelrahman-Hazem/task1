<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required' ,
        ]);

       $tag = new Tag();
       $tag->name = $request->name ;
       $tag->save();

       if($tag){
         return response()->json([
            'status'=>true,
            'msg'=>"data has been saved",
            'data'=>''
         ]);
       }else{
        return response()->json([
            'status'=>false,
            'msg'=>"something went wrong",
            'error-code'=>6003
         ]);
       }
    }

    public function show(Request $request)
    {
        $tag = Tag::where('id',$request->id)->get();
        if($tag){
        return response()->json($tag);
        }else{
            return response()->json([
                'status'=>false,
                'msg'=>"something went wrong",
                'error-code'=>6004
             ]);
        }
    }

    public function update(Request $request)
    {
        $data = request()->validate([
            'name' => 'required' ,
        ]);
        $tag = Tag::where('id',$request->id)->update([
         'name'=>$request->name
        ]);
        if($tag){
            return response()->json([
                'status'=>true,
                'msg'=>"data has been updated",
                'data'=>''
            ]);
            }else{
                return response()->json([
                    'status'=>false,
                    'msg'=>"something went wrong",
                    'error-code'=>6004
                 ]);
            }
    }

    public function destroy(Request $request)
    {
        $tag = Tag::where('id',$request->id)->delete();
        if($tag){
            return response()->json([
                'status'=>true,
                'msg'=>"data has been deleted",
                'data'=>''
            ]);
            }else{
                return response()->json([
                    'status'=>false,
                    'msg'=>"something went wrong",
                    'error-code'=>6005
                 ]);
            }
    }
}
