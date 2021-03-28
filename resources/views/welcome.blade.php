@extends('layouts.app')

@section('content')
<div class="content">
  <section id="hero">

    <div class="container">
      <div class="row d-flex align-items-center">
        <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
          <h1>melakukan pelaporan pengaduan masyarakat di Siap<span class="text-danger">Lapor!</span></h1>
          <a href="{{route('dashboardmasyarakat')}}" class="btn-get-started scrollto">Mulai</a>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
          <img src="{{asset('img/hero1.png')}}" class="img-fluid image" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= About Section ======= -->
  </main><!-- End #main -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</div>
@endsection