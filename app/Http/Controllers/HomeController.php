<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Doctor;
use App\Models\CategoryService;
use App\Models\User;
use Carbon\Carbon;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $booking = Booking::whereDate('tanggal', Carbon::today())->where('user_id', \Auth::user()->id)->get();
        $category_service = CategoryService::all();
        $doctors_count = Doctor::all()->count();
        $bookings_count = Booking::where('status', 'success')->where('user_id', \Auth::user()->id)->count();
        $welcomeUser = User::where('id', \Auth::user()->id)->get();
        return view('landing.homeLanding', compact('booking', 'category_service', 'bookings_count', 'doctors_count', 'welcomeUser'));
    }

    // public function welcomeUser()
    // {
    //     $welcomeUser = User::where('id', \Auth::user()->id)->get();
    //     return view('welcome', compact('welcomeUser'));

    // }

    

    public function adminHome()
    {
        $bookings = Booking::whereDate('tanggal', Carbon::today())->get();
        $bookings_count = Booking::all()->count();
        $bookings_count_favorit_1 = Booking::all()->where('id_category', 1)->count();
        $bookings_count_favorit_2 = Booking::all()->where('id_category', 2)->count();
        $bookings_count_favorit_3 = Booking::all()->where('id_category', 3)->count();
        $data = compact('bookings_count_favorit_1', 'bookings_count_favorit_2', 'bookings_count_favorit_3');
        // max($data);
        // dd($data);
        $doctors_count = Doctor::all()->count();
        // dd($bookings_count);
        // $bookings = Booking::where('user_id', \Auth::user()->id)->whereDate('created_at', Carbon::today())->get();
        return view('adminHome', compact('bookings', 'bookings_count', 'doctors_count', 'data'));
    }

    
    public function operatorHome()
    {
        $bookings = Booking::whereDate('tanggal', Carbon::today())->get();
        $bookings_count = Booking::all()->count();
        $bookings_count_favorit_1 = Booking::all()->where('id_category', 1)->count();
        $bookings_count_favorit_2 = Booking::all()->where('id_category', 2)->count();
        $bookings_count_favorit_3 = Booking::all()->where('id_category', 3)->count();
        $data = compact('bookings_count_favorit_1', 'bookings_count_favorit_2', 'bookings_count_favorit_3');
        // max($data);
        // dd($data);
        $doctors_count = Doctor::all()->count();
        return view('operatorHome', compact('bookings', 'bookings_count', 'doctors_count', 'data'));
    }

    public function doctorHome()
    {
        $bookings = Booking::whereDate('tanggal', Carbon::today())->get();
        $bookings_count = Booking::all()->count();
        $bookings_count_favorit_1 = Booking::all()->where('id_category', 1)->count();
        $bookings_count_favorit_2 = Booking::all()->where('id_category', 2)->count();
        $bookings_count_favorit_3 = Booking::all()->where('id_category', 3)->count();
        $data = compact('bookings_count_favorit_1', 'bookings_count_favorit_2', 'bookings_count_favorit_3');
        // max($data);
        // dd($data);
        $doctors_count = Doctor::all()->count();
        return view('doctorHome', compact('bookings', 'bookings_count', 'doctors_count', 'data'));
    }
}
