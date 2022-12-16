@extends('layouts.web')

@section('content')
<div class="container py-5">
    <div class="card">
       <h4 class="card-header">Edit Data Nilai</h4>
       <form action="{{ route('update',$data->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            <div class="row">
                <div class="col pr-0">
                    <div class="form-group">
                        <label>NIM</label>
                        <input type="text" name="nim" class="form-control" value="{{ $data->nim }}"/>
                        @if($errors->has('nim'))
                           {{ $errors->first('nim') }}
                        @endif
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $data->nama }}"/>
                        @if($errors->has('nama'))
                           {{ $errors->first('nama') }}
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Quiz</label>
                <input type="text" name="quiz" class="form-control" value="{{ $data->quiz }}"/>
                @if($errors->has('quiz'))
                    {{ $errors->first('quiz') }}
                @endif
            </div>
            <div class="form-group">
                <label>Tugas</label>
                <input type="text" name="tugas" class="form-control" value="{{ $data->tugas }}"/>
                @if($errors->has('tugas'))
                    {{ $errors->first('tugas') }}
                @endif
            </div>
            <div class="form-group">
                <label>Absensi</label>
                <input type="text" name="absensi" class="form-control" value="{{ $data->absensi }}"/>
                @if($errors->has('absensi'))
                    {{ $errors->first('absensi') }}
                @endif
            </div>
            <div class="form-group">
                <label>Praktek</label>
                <input type="text" name="praktek" class="form-control" value="{{ $data->praktek }}"/>
                @if($errors->has('praktek'))
                    {{ $errors->first('praktek') }}
                @endif
            </div>
            <div class="form-group">
                <label>UAS</label>
                <input type="text" name="uas" class="form-control" value="{{ $data->uas }}"/>
                @if($errors->has('uas'))
                    {{ $errors->first('uas') }}
                @endif
            </div>
          </div>
          <div class="card-footer">
             <div class="form-group mb-0">
                <div class="row px-3 align-items-center justify-content-end">
                   <a href="{{ route('table') }}" class="btn btn-secondary mr-2">Kembali</a>
                   <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                </div>
             </div>
          </div>
       </form>
    </div>
 </div>
@endsection
