@extends('layouts.web')

@section('content')
<div class="container py-5">
    <div class="card">
        <div class="card-body">
            <div class="row px-3 mb-3 justify-content-between">
                <div>
                    <h2 class="card-title">{{ $data->nama }}</h2>
                    <p class="card-text">{{ $data->nim }}</p>
                </div>
                <div class="pt-3 text-right">
                    <h5 class="" style="font-weight:400">Nilai Total <span style="font-weight:600">{{ $data->total }}</span></h5>
                    <h5 class="" style="font-weight:400">Grade <span style="font-weight:600">{{ $data->grade }}</span></h5>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped table-inverse table-hover mb-0">
                        <thead class="thead-inverse">
                            <tr>
                                <th style="border-top: none">Quiz</th>
                                <th style="border-top: none">Tugas</th>
                                <th style="border-top: none">Absensi</th>
                                <th style="border-top: none">Praktek</th>
                                <th style="border-top: none">UAS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">{{ $data->quiz }}</td>
                                <td>{{ $data->tugas }}</td>
                                <td>{{ $data->absensi }}</td>
                                <td>{{ $data->praktek }}</td>
                                <td>{{ $data->uas }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row px-3 align-items-center justify-content-between">
                <a href="{{ route('table') }}" class="btn btn-secondary mr-2">Kembali</a>
                <div class="row px-3">
                    <a href="{{ route('edit', $data->id) }}" class="btn btn-info mr-2">Edit Data</a>
                    <form action="{{ route('destroy', $data->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus data nilai ini?')">Hapus</button>
                    </form>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection
