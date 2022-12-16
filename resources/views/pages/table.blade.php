@extends('layouts.web')

@section('content')
<div class="container py-5">
    <div class="row mb-4 px-3 align-items-center justify-content-between">
        <h4>Data Nilai</h4>
        <div>
            <a class="btn btn-outline-secondary" href="{{ route('index') }}">Lihat Data dalam Grafik</a>
            <a class="btn btn-primary" href="{{ route('create') }}">Tambah Data</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped table-inverse table-hover mb-0">
                <thead class="thead-inverse">
                    <tr>
                        <th style="border-top: none">NIM</th>
                        <th style="border-top: none">Nama</th>
                        <th style="border-top: none">Nilai Total</th>
                        <th style="border-top: none">Grade</th>
                        <th style="border-top: none">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td scope="row">{{ $item->nim }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->total }}</td>
                        <td>{{ $item->grade }}</td>
                        <td>
                            <div class="row justify-content-start pl-3">
                                <a href="{{ route('show', $item->id) }}" class="btn btn-info btn-sm mr-1">Detail</a>
                                <a href="{{ route('edit', $item->id) }}" class="btn btn-secondary btn-sm mr-1">Edit</a>
                                <form action="{{ route('destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin untuk menghapus data nilai ini?')">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
