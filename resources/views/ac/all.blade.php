@extends('layouts.main')

@section('container')
    <h1>Ini adalah halaman ac</h1>
<div style="display: flex; align-item: center; justify-content:center;">
    <table class="table table-bordered" style="text-align: center; width: 1000px; ">
      <thead>
           <th>no</th>
          <th>nama</th>
          <th>model</th>
          <th>ukuran</th>
          <th>harga</th>
          <th>action</th>
      </thead>
      <tbody>
            @php
                $no = 1
            @endphp
          @foreach ($Acs as $ac)
              <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <th>{{ $ac->nama }}</th>
                  <td>{{ $ac->model}}</td>
                  <td>{{ $ac->ukuran}}</td>
                  <td>{{ $ac->harga }}</td>

                  <td>

                      <a class="btn btn-primary" href="/ac/detail/{{ $ac->id }}">detail</a>
                  </td>
                  <td>
                </td>
              </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection
