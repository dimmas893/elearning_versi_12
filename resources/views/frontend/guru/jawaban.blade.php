@extends('layouts.template_guru')
@section('contents')

<x-alert />
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    @if($nilai_tugas_siswa->nilai !== null)
                        <h1>anda sudah mengirim jawaban</h1>
                    @endif
                    @if($nilai_tugas_siswa->nilai == null)
                    <form action="{{ route('jawaban_siswa_nilai', $nilai_tugas_siswa->id) }}" method="POST">
                        @csrf
                        <input type="text" name="nilai" class="form-control" required placeholder="nilai"/>
                        <input type="text" name="komentar_guru" class="form-control" required placeholder="Komentar guru"/>
                        <input type="submit" class="btn btn-success mt-2" value="kirim jawaban" />
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection