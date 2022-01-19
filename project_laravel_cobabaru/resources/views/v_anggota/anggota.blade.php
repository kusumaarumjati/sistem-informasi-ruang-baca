@extends('folder_admin/master1')
@section('konten')
 <a href="/anggota/tambah" class="btn btn-primary">Tambah</a>
    <table class="table table-hover table-striped datatable" style="margin-top: 10px">
      {{ csrf_field() }}
        <tr>
            <td>ID Anggota</td>
            <td>Nama Anggota</td>
            <td>Jenis Kelamin</td>
            <td>No Telpon</td>
            <td>Alamat</td>
            <td>Username</td>
            <td>Password</td>
            <td>Aksi</td>
        </tr>
        @foreach($anggota as $a)
        <tr>
          <td>{{ $a->id_anggota }}</td>
          <td>{{ $a->nama_anggota }}</td>
          <td>{{ $a->jenis_kelamin }}</td>
          <td>{{ $a->no_telp_anggota }}</td>
          <td>{{ $a->alamat }}</td>
          <td>{{ $a->username }}</td>
          <td>{{ $a->password }}</td>
          <td>
            <a href="/anggota/edit/{{ $a->id_anggota }}" class="btn btn-warning">Edit</a> <br>
            <a href="/anggota/hapus/{{ $a->id_anggota }}" class="btn btn-danger" onclick="return confirm('apakah anda yakin untuk menghapus?')">Hapus</a>
          </td>
        </tr>
        @endforeach
    </table>
@endsection