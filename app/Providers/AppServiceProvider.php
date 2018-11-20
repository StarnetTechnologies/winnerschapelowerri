<?php

namespace App\Providers;

use Schema;
use View;
use Illuminate\Support\ServiceProvider;
use App\User;
use App\Event;
use App\Service;
use App\Stream;
use App\Prophetic;

use DateTime;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        date_default_timezone_set('Africa/Lagos');

        $allEvents = Event::orderBy('start_at','asc')->get();
        $now = new DateTime();

        $past = array();
        $happening = array();
        $upcoming = array();
        foreach($allEvents as $e){
            $start = new DateTime($e->start_at);
            $end = new DateTime($e->end_at);
            if($start > $now){
                array_push($upcoming, $e);
            }
            else if($start < $now && $now < $end){
                array_push($happening, $e);
            }
            else{
                array_push($past, $e);
            }
        }
		View::share([
            'ADMIN'=>User::all()->first(),
            'EVENTS'=> [
                'all' => $allEvents,
                'past' => $past,
                'upcoming' => $upcoming,
                'happening' => $happening
            ],
            'SERVICES' => Service::all(),
            'STREAMS' => Stream::OrderBy('created_at','desc'),
            'PW' => Prophetic::where('month',$now->format('F'))->where('year',$now->format('Y'))->first()
            ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
