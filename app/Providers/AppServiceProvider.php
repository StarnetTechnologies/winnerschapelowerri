<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use View;
use Schema;
use DateTime;
use App\User;
use App\Event;
use App\Post;
use App\Service;
use App\Stream;
use App\Theme;
use App\Pastor;
use App\Gallery;
use App\Contact;
use App\Preference;
use App\Testimony;
use App\Unit;

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
            'now' => new DateTime(),
            'THEME' => Theme::where('month',$now->format('F'))->where('year',$now->format('Y'))->first(),
            'PASTORS' => Pastor::all(),
            'EVENTS'=> [
                'all' => $allEvents,
                'past' => $past,
                'upcoming' => $upcoming,
                'happening' => $happening
            ],
            'SERVICES' => Service::all(),
            'STREAMS' => Stream::OrderBy('created_at','desc')->take(5)->get(),
            'GALLERY' => Gallery::where('role','gallery')->get(),
            'SLIDERS' => Gallery::where('role','slider')->get(),
            'CONTACTS' => Contact::first(),
            'PREF' => Preference::first(),
            'POSTS' => Post::OrderBy('created_at','desc')->take(3)->get(),
            'TESTIMONIES' => Testimony::OrderBy('created_at','desc')->get(),
            '_TESTIMONIES' => Testimony::class,
            'UNITS' => Unit::OrderBy('created_at','desc')->get()
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
