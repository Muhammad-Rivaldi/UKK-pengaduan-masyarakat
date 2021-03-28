@extends('layouts.app')

@section('content')
<div class="content">
  <main id="main">

    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">list pengaduan anda</h2>
          <!-- condition count data -->
          @if($countpengaduan < 1)
          <p data-aos="fade-in">Anda belum pernah melakukan pengaduan</p>
          @else
          <p data-aos="fade-in">di dalam halaman ini berisi pengaduan yang pernah anda lakukan</p>
          @endif
          
        </div>
        @foreach ($pengaduans as $key=>$pengaduan)
        <div class="card" data-aos="fade-up">
          <div class="card-header">
            {{$pengaduan->judul_pengaduan}}
          </div>
          <div class="card-body">
            <p>{{$pengaduan->isi_pengaduan}}</p>
            <p>Kota kejadian : {{$pengaduan->kota}}</p>
            <img src="/pengaduan/{{$pengaduan->foto}}" alt="" height="150">
            <footer class="blockquote-footer">{{$pengaduan->tgl_pengaduan}} <cite class="float-right">{{$pengaduan->status}}</cite></footer>
          </div>
        </div>
        @endforeach
      </div>
    </section><!-- End Frequently Asked Questions Section -->
  </main><!-- End #main -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</div>
@endsection