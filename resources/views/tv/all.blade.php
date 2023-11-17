@extends('layouts.main')

@section('container')
    <h1>Ini adalah halaman tv</h1>
<div style="display: flex; align-item: center; justify-content:center;">
    <table class="table table-bordered" style="text-align: center; width: 1000px; ">
      <thead>
          <th>NO</th>
          <th>No Seri</th>
          <th>Merek</th>
          <th>Tanggal Diterbitkan</th>
          <th>Model</th>
          <th>Harga</th>
          <th>Action</th>
      </thead>
      <tbody>
            @php
                $no = 1
            @endphp
          @foreach ($tv as $tv)
              <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <th>{{ $tv->no_seri }}</th>
                  <td>{{ $tv->merek }}</td>
                  <td>{{ $tv->tanggal_diterbitkan }}</td>
                  <td>{{ $tv->model }}</td>
                  <td>{{ $tv->harga }}</td>
                  <td>
                    <a class="btn btn-primary" href="/tv/detail/{{ $tv->id }}">Detail</a>
                </td>
              </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection