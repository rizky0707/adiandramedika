<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Doctor;
use App\Models\CategoryService;
use App\Models\Service;
use App\Models\Setting;
use App\Models\User;
use Auth;
use DB;
use Carbon\Carbon;


class BookingController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $bookings = Booking::whereBetween('created_at',[$start_date,$end_date])->get();
        } else {
            $bookings = Booking::latest()->get();
        }
        return view('admin.booking.index', compact('bookings')); 
    }

    public function print_booking()
    {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $bookings = Booking::whereBetween('created_at',[$start_date,$end_date])->get();
        } else {
            $bookings = Booking::latest()->get();
        }
        return view('admin.laporan.booking.print', compact('bookings', 'start_date', 'end_date'));

    }

    public function laporan_booking()
    {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $bookings = Booking::whereBetween('created_at',[$start_date,$end_date])->get();
        } else {
            $bookings = Booking::latest()->get();
        }
        return view('admin.laporan.booking.index', compact('bookings'));

    }

    
     /**
     * Show the form for index a new landing.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexLanding()
    {
        $category_service = CategoryService::latest()->get();
        return view('landing.homeLanding', compact('category_service'));
    }

    public function bookingOpr()
    {
        $bookings = Booking::latest()->get();
        return view('operator.booking.bookingOpr', compact('bookings'));
    }

    public function bookingLanding()
    {
        $category_service = CategoryService::latest()->get();
        $service = Service::latest()->get();
        $user = User::latest()->get();
        return view('landing.bookingLanding', compact('category_service', 'service', 'user'));
    }

    public function bookingDefault()
    {
        $category_service = CategoryService::latest()->get();
        $service = Service::latest()->get();
        return view('landing.bookingDefault', compact('category_service', 'service'));
    }

    public function userLanding()
    {
        $booking = Booking::latest()->where('user_id', \Auth::user()->id)->get();
        $welcomeUser = User::where('id', \Auth::user()->id)->get();

        return view('landing.historyBooking', compact('booking', 'welcomeUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_service = CategoryService::latest()->get();
        $user = User::latest()->get();
        return view('admin.booking.create', compact('category_service', 'user'));
    }

    public function GetService($id){
        echo json_encode(DB::table('services')->where('id_category', $id)->get());
    }

    public function GetDoctor($id){
        echo json_encode(DB::table('doctors')->where('id_service', $id)->get());
    }

    // public function findPrice(Request $request){
	
        // 	//it will get price if its id match with product id
        // 	$p=Product::select('price')->where('id',$request->id)->first();
            
        // 	return response()->json($p);
        // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBookingLanding(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:2',
            'nohp' => 'required|min:11',
            'jam' => 'required',
            'lokasi' => 'required|min:2',
            'id_category' => 'required',
            'id_service' => 'required',
            'id_doctor' => 'required',
            'tanggal' => 'required',
            'alamat' => 'required|min:2',
        ]);
        $booking = new Booking;
        $booking->nama   = $request->nama;
        $booking->user_id   = Auth::id();
        $booking->nohp  = $request->nohp;
        $booking->jam = $request->jam;
        $booking->lokasi = $request->lokasi;
        $booking->id_category = $request->id_category;
        $booking->id_service = $request->id_service;
        $booking->id_doctor = $request->id_doctor;
        // $booking->tanggal = Carbon::createFromFormat('d/m/Y', $request->tanggal);
        $booking->tanggal = $request->tanggal;
        $booking->alamat   = $request->alamat;
        $booking->save();
        return redirect()->route('showResult')->with('success', 'Data Berhasil Di Tambahkan');

    }

    public function showResult()
    {
        $booking = Booking::latest()->limit(1)->where('user_id', \Auth::user()->id)->get();
        $settings = Setting::all();
        // dd($booking);
        return view('landing.showResult', compact('booking', 'settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:2',
            'nohp' => 'required|min:11',
            'jam' => 'required',
            'lokasi' => 'required|min:2',
            'id_category' => 'required',
            'id_service' => 'required',
            'id_doctor' => 'required',
            'tanggal' => 'required',
            'alamat' => 'required|min:2',
        ]);
        $booking = new Booking;
        $booking->nama   = $request->nama;
        $booking->user_id   = Auth::id();
        $booking->nohp  = $request->nohp;
        $booking->jam = $request->jam;
        $booking->lokasi = $request->lokasi;
        $booking->id_category = $request->id_category;
        $booking->id_service = $request->id_service;
        $booking->id_doctor = $request->id_doctor;
        // $booking->tanggal = Carbon::createFromFormat('d/m/Y', $request->tanggal);
        $booking->tanggal = $request->tanggal;
        $booking->alamat   = $request->alamat;
        $booking->save();
        return redirect()->route('booking.index')->with('success', 'Data Berhasil Di Tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_booking_admin = Booking::findorfail($id);
        return view('admin.booking.show', compact('show_booking_admin'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showBooking($id)
    {
        $show_booking = Booking::where('user_id', \Auth::user()->id)->findorfail($id);
        $welcomeUser = User::where('id', \Auth::user()->id)->get();

        return view('landing.showBooking', compact('show_booking', 'welcomeUser'));

    }

    public function showOpr($id)
    {
        $edit = Booking::findorfail($id);
        $category_service = CategoryService::latest()->get();
        $service = Service::latest()->get();
        $doctor = Doctor::latest()->get();
        $show_booking_operator = Booking::findorfail($id);
        return view('operator.booking.bookingOprShow', compact('show_booking_operator', 'category_service', 'service', 'doctor'));

    }

    public function showKomfirmasi()
    {
        $show_komfirmasi = Booking::latest()->limit(1)->where('user_id', \Auth::user()->id)->get();
        $welcomeUser = User::where('id', \Auth::user()->id)->get();
        $count_komfirmasi= Booking::latest()->limit(1)->where('user_id', \Auth::user()->id)->count();
        // dd($count_komfirmasi);
        return view('landing.antrian', compact('show_komfirmasi', 'welcomeUser', 'count_komfirmasi'));
    }

    public function editKomfirmasi($id)
    {
        $edit = Booking::findorfail($id);
        $category_service = CategoryService::all();
        $service = Service::latest()->get();
        $doctor = Doctor::latest()->get();
        $welcomeUser = User::where('id', \Auth::user()->id)->get();
        return view('landing.editKomfirmasi', compact('edit', 'doctor', 'category_service', 'service', 'welcomeUser'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Booking::findorfail($id);
        $category_service = CategoryService::all();
        $service = Service::latest()->get();
        $doctor = Doctor::latest()->get();
        return view('admin.booking.edit', compact('edit', 'doctor', 'category_service', 'service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editOpr($id)
    {
        $edit = Booking::findorfail($id);
        $category_service = CategoryService::all();
        $service = Service::latest()->get();
        $doctor = Doctor::latest()->get();
        return view('operator.booking.bookingOprEdit', compact('edit', 'doctor', 'category_service', 'service'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $booking->update($request->all());
        return redirect()->route('booking.index')->with('success', 'Data Berhasil Di Update');
    }

    public function updateOpr(Request $request, Booking $booking)
    {
        $booking->update($request->all());
        return redirect()->route('bookingOpr')->with('success', 'Data Berhasil Di Update');
    }

    public function updateKomfirmasi(Request $request, Booking $booking)
    {
        $booking->update($request->all());
        return redirect()->route('showKomfirmasi')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::findorfail($id);
        $booking->delete();
        return redirect()->route('booking.index')->with('success', 'Data Berhasil Di Delete');
    }
}
