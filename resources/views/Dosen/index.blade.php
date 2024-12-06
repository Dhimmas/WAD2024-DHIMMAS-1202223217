@extends('layouts.app')

@section('title', 'Daftar Dosen')

@section('content')
    <style>
        .table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
        }

        .table th, .table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #f4f4f4;
        }

        .table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table tr:hover {
            background-color: #e9e9e9;
        }

        .btn-primary, .btn-warning, .btn-danger {
            padding: 8px 16px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            font-size: 14px;
        }

        .btn-primary { background-color: #007bff; }
        .btn-warning { background-color: #ffc107; color: black; }
        .btn-danger { background-color: #dc3545; }

        .btn-primary:hover { background-color: #0056b3; }
        .btn-warning:hover { background-color: #e0a800; }
        .btn-danger:hover { background-color: #c82333; }
    </style>

    <h2>Daftar Dosen</h2>
    <a href="{{ route('dosen.create') }}" class="btn-primary">Tambah Dosen</a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Dosen</th>
                <th>Nama Dosen</th>
                <th>NIP</th>
                <th>Email</th>
                <th>No. Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dosens as $dosen)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $dosen->kode_dosen }}</td>
                    <td>{{ $dosen->nama_dosen }}</td>
                    <td>{{ $dosen->nip }}</td>
                    <td>{{ $dosen->email }}</td>
                    <td>{{ $dosen->no_telepon }}</td>
                    <td>
                        <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn-warning">Edit</a>
                        <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
