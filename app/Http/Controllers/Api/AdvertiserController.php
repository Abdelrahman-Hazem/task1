<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Resources\AdsResource;
use App\Models\Ad;
use App\Models\AdTag;
use Illuminate\Http\Request;
use App\Models\Advertiser;
use App\Models\Tag;
use DateInterval;
use DateTime;
use Carbon\CarbonImmutable;
use App\Mail\NotifyEmail;
use Illuminate\Support\Facades\Mail;

class AdvertiserController extends Controller
{

  public function advertiserAds(Request $request)
  {
    if ($request->advertiser_id) {

      $ads_query = Ad::where('advertiser_id', $request->advertiser_id);

      if ($request->category) {
        $ads_query->whereHas('category', function ($query) use ($request) {
          $query->where('name', $request->category);
        });
      }

      if ($request->tag) {
        $ads_query->whereHas('tags', function ($query) use ($request) {
          $query->where('name', $request->tag);
        });
      }
      $ads = $ads_query->get();
      $data = AdsResource::collection($ads);
      return response()->json([
        'status' => true,
        'msg' => 'data fetshed ',
        'data' =>$data
      ]);
    } else {
      return response()->json([
        'status' => false,
        'msg' => 'something went wrong',
        'data' => ''
      ]);
    }
  }
}
