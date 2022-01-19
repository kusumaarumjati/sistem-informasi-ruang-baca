@extends('folder_admin/master1')
@section('konten')
    <form action="/anggota/simpan" method="get">
      {{ csrf_field() }}
        <div>
            <label for="nama_anggota">Nama Anggota </label><br>
            <input type="text" name="nama_anggota" required="required" class="form-control">

        </div>
        <div>
            <label for="jenis_kelamin" >Jenis Kelamin  </label><br>
            <select name="jenis_kelamin" class="form-control">
            <option value="L"> L</option>
            <option value="P"> P</option>
            </select>
        </div>
        <div>
            <label for="no_telp_anggota">No Telepon Anggota </label><br>
            <input type="number" name="no_telp_anggota" required="required" class="form-control">
        </div>
        <div>
            <label for="alamat">Alamat </label><br>
            <input type="text" name="alamat" required="required" class="form-control">
        </div>
        <div>
            <label for="username">Username </label><br>
            <input type="text" name="username" required="required" class="form-control">
        </div>
        <div>
            <label for="password">Password </label><br>
            <input type="text" name="password" required="required" class="form-control">
        </div>
        <input type="submit" name="Simpan" class="btn btn-primary" style="margin-top: 10px; margin-right: 20px">
        <a href="/anggota" class="btn btn-dark" style="margin-top: 10px; margin-right: 20px">Kembali</a>
    </form>
@endsection