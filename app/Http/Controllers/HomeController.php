<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Pengaduan;
use App\Tanggapan;

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
        return view('home');
    }
    public function dashboardAdmin()
    {
        $countdata = pengaduan::count();
        $countrespon= tanggapan::count();
        $countuser= user::count();
        return view('admin.dashboard',compact('countdata','countrespon', 'countuser'));
    }
    public function dashboardPetugas()
    {
        $pengaduans = Pengaduan::all();
        $countdata = pengaduan::count();
        $countrespon= tanggapan::count();
        $countuser= user::count();
        return view('admin.pengaduan',compact('pengaduans','countdata','countrespon', 'countuser'));
    }
}
