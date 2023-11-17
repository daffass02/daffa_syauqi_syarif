@extends('layouts.main')

@section('container')
    <h1>Detail ac</h1>
    <div style="display: flex; align-items: center; justify-content: center;">
        <table class="table table-bordered" style="text-align: center; width: 600px;">
            <tr>
                <th>nomer</th>
                <td>{{ $ac->nama }}</td>
            </tr>
            <tr>
                <th>nama</th>
                <td>{{ $ac->nama }}</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>{{ $ac->model }}</td>
            </tr>
            <tr>
                <th>ukuran</th>
                <td>{{ $ac->ukuran }}</td>
            </tr>
            <tr>
                <th>harga</th>
                <td>{{ $ac->harga }}</td>
            </tr>
            <tr>
                <th>detail</th>
                <td>{{ $ac->detail }}</td>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
        </table>
    </div>
@endsection