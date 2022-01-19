@extends('folder_admin/master1')
@section('konten')
    <a href="/pengembalian/tambah" class="btn btn-primary">Tambah</a>
    <table class="table table-hover table-striped datatable" style="margin-top: 10px">
      {{ csrf_field() }}
        <tr>
            <td>ID pengembalian</td>
            <td>Tanggal pengembalian</td>
            <td>ID Anggota</td>
            <td>ID Petugas</td>
            <td>ID Buku</td>
            <!-- <td>Aksi</td> -->
        </tr>
        @foreach($pengembalian as $kembali)
        <tr>
          <td>{{ $kembali->id_pengembalian }}</td>
          <td>{{ $kembali->tanggal_pengembalian }}</td>
          <td>{{ $kembali->anggota->nama_anggota }}</td>
          <td>{{ $kembali->petugas->nama_petugas }}</td>
          <td>{{ $kembali->buku->judul_buku }}</td>
          <td>
            <!-- <a href="/pengembalian/edit/{{ $kembali->id_pengembalian }}" class="btn btn-warning">Edit</a>
            <a href="/pengembalian/hapus/{{ $kembali->id_pengembalian }}" class="btn btn-danger" onclick="return confirm('apakah anda yakin untuk menghapus?')">Hapus</a> -->
          </td>
        </tr>
        @endforeach
    </table>
<!--   <div class="jumbotron">
    
  </div> -->
</main>
@endsection
