<?php

namespace App\Console\Commands;

use App\Mail\NotifyEmail;
use App\Models\Ad;
use App\Models\Advertiser;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;

class notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Email to Advertisers who have ads next day';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $emails = Ad::where('start_date', '=',
        Carbon::now()->addDays(1)->format('Y-m-d'))
        ->join('advertisers' , 'advertisers.id' ,'=' ,'ads.advertiser_id')
        ->select('advertisers.email')->get();
        foreach($emails as $email){
        Mail::to($email)->send(new NotifyEmail);
        }
    }
}
