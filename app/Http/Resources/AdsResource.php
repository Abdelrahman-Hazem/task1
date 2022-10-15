<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    
    
    public function toArray($request)
    {
       // $ads_id ="ads."$this->id ;
       
        return [
           
            'id' => $this->id,
            'type' => $this->type==0 ?'free' :'paid' ,
            'title'=>$this->title ,
            'description'=>$this->description ,
            'start_date'=>$this->start_date ,
            'category_name' => $this->category->name,
            'advertiser_name' => $this->advertiser->name,
              
           

        ];
    }
}
