<?php

namespace App\Http\Controllers\Api;
use App\Http\Resources\AdsResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad ;
class AdController extends Controller
{
    public function store(Request $request)
    {
       $data = request()->validate([
        'type' => 'required',
        'title' => 'required' ,
        'description' => 'required' ,
        'start_date' => 'required|date' ,
        'category_id' => 'required' ,
        'advertiser_id' => 'required' 
       ]);

       $ad = new Ad();
       $ad->type = $request->type;
       $ad->title = $request->title ;
       $ad->description = $request->description ;
       $ad->start_date = $request->start_date ;
       $ad->category_id = $request->category_id ;
       $ad->advertiser_id = $request->advertiser_id ;
       $ad->save();

       if($ad){
        return" Data has been saved "; 
       }else{
         "something went wrong" ;
       }
    }

    public function show(Request $request)
    {
        $ad_query = Ad::where('id',$request->id)->first();
        $ad = new AdsResource($ad_query);
        if($ad){
            return response()->json($ad);
        }else{
            return "Something went wrong";
        }
    }   
    
    public function update(Request $request )
    {
        $data = request()->validate([
            'type' => 'required',
            'title' => 'required' ,
            'description' => 'required' ,
            'start_date' => 'required|date' ,
            'category_id' => 'required' ,
            'advertiser_id' => 'required' 
           ]);
           
     $ad =  Ad::where('id',$request->id)->update([
       'type' => $request->type ,
       'title' => $request->title ,
       'description'=>  $request->description ,
       'start_date' => $request->start_date ,
       'category_id' => $request->category_id ,
       'advertiser_id' => $request->advertiser_id ,
        ]);

        if($ad){
            return "Data has been updated";
        }else{
            return "Something went wrong";
        }

    }

    public function destroy(Request $request)
    {
        $ad = Ad::where('id' ,$request->id)->delete();
        if($ad){
            return"Data has been deleted" ;
        }else{
            return "Something went wrong";
        }
    }
}
