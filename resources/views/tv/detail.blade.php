@extends('layouts.main')

@section('container')
    <h1>Detail Tv</h1>
    <div style="display: flex; align-items: center; justify-content: center;">
        <table class="table table-bordered" style="text-align: center; width: 600px;">
            <tr>
                <th>No Seri</th>
                <td>{{ $tv->no_seri }}</td>
            </tr>
            <tr>
                <th>Merek</th>
                <td>{{ $tv->merek }}</td>
            </tr>
            <tr>
                <th>Tanggal Diterbitkan</th>
                <td>{{ $tv->tanggal_diterbitkan }}</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>{{ $tv->model }}</td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>{{ $tv->harga }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $tv->deskripsi }}</td>
            </tr>
            <tr>

                <th>Ukuran Layar</th>
                <td>{{ $tv->layar }}</td>
            </tr>
        </table>
    </div>
@endsection
