@extends('layouts.admin')

@section('content')
<div class="col-xl-12">
  <div class="card">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Pengaduan Table</h3>
        </div>
        <div class="d-flex-right">
          <a href="{{route('pdfgenerate')}}">
            <button type="button" class="btn btn-success">print PDF</button>
          </a>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <!-- Projects table -->
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIK</th>
            <th scope="col">Judul Pengaduan</th>
            <th scope="col">Isi Pengaduan</th>
            <th scope="col">Tanggal Pengaduan</th>
            <th scope="col">Kota</th>
            <th scope="col">Foto</th>
            <th scope="col">Status</th>
            <th scope="col">Response</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pengaduans as $key=>$pengaduan)
          <tr>
            <td>{{$key +1}}</td>
            <td scope="row">{{$pengaduan->nik}}</td>
            <td>{{$pengaduan->judul_pengaduan}}</td>
            <td>{{$pengaduan->isi_pengaduan}}</td>
            <td>{{$pengaduan->tgl_pengaduan}}</td>
            <td>{{$pengaduan->kota}}</td>
            <td><img src="/pengaduan/{{$pengaduan->foto}}" alt="" height="150"></td>
            <td>{{$pengaduan->status}}</td>
            @if($pengaduan->status == "selesai")
            <td><a href="{{route('beritanggapan',$pengaduan->id)}}"><button type="button" class="btn btn-primary" disabled> Sudah Tanggapi</button></a></td>
            @else
            <td><a href="{{route('beritanggapan',$pengaduan->id)}}"><button type="button" class="btn btn-primary">Tanggapi</button></a></td>
            @endif
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection