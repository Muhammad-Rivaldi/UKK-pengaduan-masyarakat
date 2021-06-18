@extends('layouts.app')

@section('content')
<div class="content">
  <main id="main">

    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">tanggapan</h2>
        </div>

        <form action="{{ route('submittanggapan') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="info-box" data-aos="fade-up">
            <!-- field judul -->
            <div class="form-group">
              <label for="exampleFormControlInput1">kepada pemilik nik :</label>
              @foreach ($nik as $key=>$niks)
              <input type="hidden" name="id_pengaduan" value=" {{$niks->id}}">
              <input type="text" name="nik" value="{{$niks->nik}}" class="form-control" id="exampleFormControlInput1" disabled>
              @endforeach
            </div>

            <!-- field isi -->
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Isi Tanggapan</label>
              <textarea class="form-control" name="isi_tanggapan" id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>

            <!-- field tanggal -->
            <div class="form-group">
              <label for="exampleFormControlInput1">Tanggal Tanggapan</label>
              <input type="date" name="tgl_tanggapan" class="form-control" id="exampleFormControlInput1">
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