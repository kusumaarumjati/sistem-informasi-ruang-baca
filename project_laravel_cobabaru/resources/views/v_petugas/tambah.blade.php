@extends('folder_admin/master1')
@section('konten')
    <form action="/petugas/simpan" method="get">
      {{ csrf_field() }}
        <!-- ID Petugas <input type="text" name="id_petugas" required="required"> <br/> -->
        <div>
        <label>Nama Petugas</label><br>
        <input type="text" name="nama_petugas" required="required" class="form-control"> <br/>
        </div>
        <div>
            <label>Jabatan</label><br>
            <input type="text" name="jabatan" required="required" class="form-control"> <br/>
        </div>
        <div>
            <label>No Telepon</label><br> 
            <input type="number" name="no_telp_petugas" required="required" class="form-control"> <br/>
        </div>
        <div>
            <label>Alamat</label><br> 
            <input type="longtext" name="alamat_petugas" required="required" class="form-control"> <br/>
        </div>
        <input type="submit" name="Simpan" class="btn btn-primary" style="margin-top: 10px; margin-right: 20px"> 
        <a href="/petugas" class="btn btn-dark" style="margin-top: 10px">Kembali</a>
    </form>
@endsection