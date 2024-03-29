@extends('layouts.app')

@section('content')
<div class="content">
  <main id="main">

    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Isi Pengaduan Disini</h2>
        </div>

        <form action="{{ route('nulispengaduan') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="info-box" data-aos="fade-up">
            <!-- field judul -->
            <div class="form-group">
              <label for="exampleFormControlInput1">Judul Pengaduan</label>
              <input type="text" name="judul_pengaduan" class="form-control" id="exampleFormControlInput1">
            </div>
            <input type="hidden" name="nik" value=" {{ Auth::user()->nik }}">

            <!-- field isi -->
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Isi Laporan</label>
              <textarea class="form-control" name="isi_laporan" id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>

            <!-- field tanggal -->
            <div class="form-group">
              <label for="exampleFormControlInput1">Tanggal pengaduan</label>
              <input type="date" value="{{ date('Y-m-d') }}" name="tgl_pengaduan" class="form-control" id="exampleFormControlInput1">
            </div>

            <!-- field kota -->
            <div class="form-group">
              <label for="exampleFormControlSelect1">Kota Pengaduan</label>
              <select name="kota" class="form-control" id="exampleFormControlSelect1">
                <option value="">Pilih Kota</option>
                <option value="depok">Depok</option>
                <option value="bogor">Bogor</option>
                <option value="jakarta">Jakarta</option>
                <option value="bekasi">Bekasi</option>
              </select>
            </div>

            <!-- field foto -->
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Foto Bukti</label>
              <input type="file" name="image" class="form-control">
            </div>

            <!-- button submit -->
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>

      </div>
    </section><!-- End Frequently Asked Questions Section -->


  </main><!-- End #main -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</div>
@endsection