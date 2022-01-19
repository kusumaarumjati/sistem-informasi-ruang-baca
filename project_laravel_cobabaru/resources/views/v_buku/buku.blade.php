@extends('folder_admin/master1')
@section('konten')
    <a href="/buku/tambah" class="btn btn-primary">Tambah</a>
    <table class="table table-hover table-striped datatable" style="margin-top: 10px">
      {{ csrf_field() }}
        <tr>
            <td>ID Buku</td>
            <td>Judul Buku</td>
            <td>Penulis Buku</td>
            <td>Penerbit</td>
            <td>Tahun Terbit</td>
            <td>Stok</td>
            <td>Aksi</td>
        </tr>
        @foreach($buku as $b)
        <tr>
          <td>{{ $b->id_buku }}</td>
          <td>{{ $b->judul_buku }}</td>
          <td>{{ $b->penulis_buku }}</td>
          <td>{{ $b->penerbit}}</td>
          <td>{{ $b->tahun_terbit }}</td>
          <td>{{ $b->stok }}</td>
          <td>
            <a href="/buku/edit/{{ $b->id_buku }}" class="btn btn-warning">Edit</a>
            <a href="/buku/hapus/{{ $b->id_buku }}" class="btn btn-danger" onclick="return confirm('apakah anda yakin untuk menghapus?')">Hapus</a>
          </td>
        </tr>
        @endforeach
    </table>
<!--   <div class="jumbotron">
    
  </div> -->
</main>
@endsection
