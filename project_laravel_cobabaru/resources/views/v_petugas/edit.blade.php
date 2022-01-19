@extends('folder_admin/master1')
@section('konten')
    <form method="POST" action="/petugas/update/{{ $petugas->id }}" >
        {{ csrf_field() }}
        <input type="hidden" name="id_petugas" required="required" value="{{ $petugas->id_petugas }}"> <br/>
        <div>
        <label>Nama Petugas</label><br>
        <input type="text" name="nama_petugas" required="required" value="{{ $petugas->nama_petugas }}" class="form-control"> <br/>
        </div>
        <div>
            <label>Jabatan</label><br>
            <input type="text" name="jabatan" required="required" value="{{ $petugas->jabatan }}" class="form-control"> <br/>
        </div>
        <div>
            <label>No Telepon</label><br> 
            <input type="text" name="no_telp_petugas" value="{{ $petugas->no_telp_petugas }}" required="required" class="form-control"> <br/>
        </div>
        <div>
            <label>Alamat</label><br> 
            <input type="text" name="alamat_petugas" value="{{ $petugas->alamat_petugas }}" required="required" class="form-control"> <br/>
        </div>
        <input type="submit" name="Simpan" class="btn btn-primary" style="margin-top: 10px; margin-right: 20px"> 
        <a href="/petugas-" class="btn btn-dark" style="margin-top: 10px">Kembali</a>
    </form>
@endsection