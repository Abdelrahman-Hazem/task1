<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required' ,
        ]);

       $category = new Category();
       $category->name = $request->name ;
       $category->save();

       if($category){
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
        $category = Category::where('id',$request->id)->get();
        if($category){
        return response()->json($category);
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
        $category = Category::where('id',$request->id)->update([
         'name'=>$request->name
        ]);
        if($category){
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
        $category = Category::where('id',$request->id)->delete();
        if($category){
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
