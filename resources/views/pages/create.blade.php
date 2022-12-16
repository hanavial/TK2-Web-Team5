@extends('layouts.web')

@section('content')
<div class="container py-5">
    <div class="card">
       <h4 class="card-header">Tambah Data Nilai</h4>
       <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="row">
                <div class="col pr-0">
                    <div class="form-group">
                        <label>NIM</label>
                        <input type="text" name="nim" class="form-control"/>
                        @if($errors->has('nim'))
                           {{ $errors->first('nim') }}
                        @endif
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control"/>
                        @if($errors->has('nama'))
                           {{ $errors->first('nama') }}
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Quiz</label>
                <input type="text" name="quiz" class="form-control"/>
                @if($errors->has('quiz'))
                    {{ $errors->first('quiz') }}
                @endif
            </div>
            <div class="form-group">
                <label>Tugas</label>
                <input type="text" name="tugas" class="form-control"/>
                @if($errors->has('tugas'))
                    {{ $errors->first('tugas') }}
                @endif
            </div>
            <div class="form-group">
                <label>Absensi</label>
                <input type="text" name="absensi" class="form-control"/>
                @if($errors->has('absensi'))
                    {{ $errors->first('absensi') }}
                @endif
            </div>
            <div class="form-group">
                <label>Praktek</label>
                <input type="text" name="praktek" class="form-control"/>
                @if($errors->has('praktek'))
                    {{ $errors->first('praktek') }}
                @endif
            </div>
            <div class="form-group">
                <label>UAS</label>
                <input type="text" name="uas" class="form-control"/>
                @if($errors->has('uas'))
                    {{ $errors->first('uas') }}
                @endif
            </div>
          </div>
          <div class="card-footer">
             <div class="form-group mb-0">
                <div class="row px-3 align-items-center justify-content-end">
                   <a href="{{ route('index') }}" class="btn btn-secondary mr-2">Kembali</a>
                   <button type="submit" class="btn btn-success">Simpan</button>
                </div>
             </div>
          </div>
       </form>
    </div>
 </div>
@endsection
