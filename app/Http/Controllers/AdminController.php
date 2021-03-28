<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pengaduan;
use App\Tanggapan;

class AdminController extends Controller
{
    public function user()
    {
        $users = User::all();
        $countdata = pengaduan::count();
        $countrespon= tanggapan::count();
        $countuser= user::count();
        return view('admin.user',compact('users', 'countdata','countrespon', 'countuser'));
    }
    public function pengaduan()
    {
        $pengaduans = Pengaduan::all();
        $countdata = pengaduan::count();
        $countrespon= tanggapan::count();
        $countuser= user::count();
        return view('admin.pengaduan',compact('pengaduans','countdata','countrespon', 'countuser'));
    }
    // public function users()
    // {
    //     $users = User::all();
    //     return view('admin.user',compact('users'));
    // }
}
