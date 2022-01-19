@extends('folder_admin/master1')
@section('konten')
 <a href="/petugas/tambah" class="btn btn-primary">Tambah Data Petugas</a>
    <table class="table table-hover table-striped datatable" style="margin-top: 10px">
      {{ csrf_field() }}
        <tr>
            <td>ID Petugas</td>
            <td>Nama Petugas</td>
            <td>Jabatan</td>
            <td>No Telpon</td>
            <td>Alamat</td>
            <td>Aksi</td>
        </tr>
        @foreach($petugas as $p)
        <tr>
          <td>{{ $p->id_petugas }}</td>
          <td>{{ $p->nama_petugas }}</td>
          <td>{{ $p->jabatan }}</td>
          <td>{{ $p->no_telp_petugas }}</td>
          <td>{{ $p->alamat_petugas }}</td>
          <td>
            <a href="/petugas/edit/{{ $p->id_petugas }}" class="btn btn-warning">Edit</a>
            @if(session('edit petugas berhasi'))
            <div class="alert alert-warning">
              {{ session('edit petugas berhasil') }}
            </div>
             @endif
            <a href="/petugas/hapus/{{ $p->id_petugas }}" class="btn btn-danger" onclick="return confirm('apakah anda yakin untuk menghapus?')">Hapus</a>
          </td>
        </tr>
        @endforeach
    </table>
@endsection