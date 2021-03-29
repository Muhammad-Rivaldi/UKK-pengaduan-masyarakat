<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function tanggapan()
    {
        $tanggapans = tanggapan::all();
        $countdata = pengaduan::count();
        $countrespon= tanggapan::count();
        $countuser= user::count();
        return view('admin.tanggapan',compact('tanggapans','countdata','countrespon', 'countuser'));
    }
    public function beritanggapan($id)
    {
        $nik = pengaduan::where('id',$id)->get();
        $id = pengaduan::where('id',$id)->get();
        return view('admin.beritanggapan',compact('nik', 'id'));
    }
    public function submittanggapan(Request $req)
    {
        $req->validate([
            'tgl_tanggapan' => 'required',
            'isi_tanggapan' => 'required|min:10',
        ]);

        tanggapan::create([
            'id_pengaduan' => $req->id_pengaduan,
            'id_petugas' => Auth::user()->id,
            'tgl_tanggapan' => $req->tgl_tanggapan,
            'isi_tanggapan' => $req->isi_tanggapan
        ]);

        pengaduan::update([
            'id' => $req->id_pengaduan,
            'status' => 'selesai'
        ]);
        return redirect('/petugas');
    }
}
