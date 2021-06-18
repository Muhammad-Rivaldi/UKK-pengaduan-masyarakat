@extends('layouts.admin')

@section('content')
<div class="col-xl-12">
  <div class="card">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Tanggapan Table</h3>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <!-- Projects table -->
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">id Pengaduan</th>
            <th scope="col">id Petugas</th>
            <th scope="col">tanggal Tanggapan</th>
            <th scope="col">isi Tanggapan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tanggapans as $key => $tanggapan)
          <tr>
            <td>{{$key +1}}</td>
            <td>{{$tanggapan->id_pengaduan}}</td>
            <td>{{$tanggapan->id_petugas}}</td>
            <td>{{$tanggapan->tgl_tanggapan}}</td>
            <td>{{$tanggapan->isi_tanggapan}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection