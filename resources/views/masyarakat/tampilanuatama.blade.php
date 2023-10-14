@extends('layoututama')

@section('isi_halaman')
<style>
  .din{
            margin-top: 100px;
            /* margin-bottom: 100px; */
            margin-left: 45%;
            

        }
</style>
<div class="puwa">
  <h1>Layanan Pengaduan Masyarakat</h1>
  <h3>Anda Melapor Anda Hebat</h3>
</div>
<div class="din" style="height: 100px;">
  <a href="{{url('pengaduan')}}" class="btn btn-outline-dark">Tulis Laporan Anda</a>
  
</div>
@endsection 