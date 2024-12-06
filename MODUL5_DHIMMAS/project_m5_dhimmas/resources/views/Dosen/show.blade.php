@extends('layouts.app')

@section('title', 'Detail Dosen')

@section('content')
    <style>
        .detail-container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
            padding: 8px 16px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>

    <div class="detail-container">
        <h2>Detail Dosen</h2>
        <table>
            <tr>
                <th>Kode Dosen</th>
                <td>{{ $dosen->kode_dosen }}</td>
            </tr>
            <tr>
                <th>Nama Dosen</th>
                <td>{{ $dosen->nama_dosen }}</td>
            </tr>
            <tr>
                <th>NIP</th>
                <td>{{ $dosen->nip }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $dosen->email }}</td>
            </tr>
            <tr>
                <th>No. Telepon</th>
                <td>{{ $dosen->no_telepon }}</td>
            </tr>
        </table>
        <a href="{{ route('dosen.index') }}" class="btn-secondary">Kembali</a>
    </div>
@endsection
