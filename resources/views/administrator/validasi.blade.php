@extends('layoutadminvalidasi')

@section('isi_hal')
    <div class="masku">

        <table>
            <thead>
                <tr>
                <th scope="col">Status Validasi Pengaduan</th>
            </tr>
        </thead>
        <tbody>
    </table>
    <table class="table">
        
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIK</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Jenis Laporan</th>
            <th scope="col">Aksi</th>
          </tr>
          
        </thead>
        <tbody>
            @foreach ($ui as $item)
                <tr>
                  <td>{{$item->id_pengaduan}}</td>
                  <td>{{$item->tanggal_pengaduan}}</td>
                  <td>{{$item->nik}}</td>
                  <td>{{$item->isi_laporan}}</td>
                  <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection