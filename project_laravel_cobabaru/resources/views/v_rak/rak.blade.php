@extends('folder_admin/master1')
@section('konten')
    <a href="/rak/tambah" class="btn btn-primary">Tambah</a>
    <table class="table table-hover table-striped datatable" style="margin-top: 10px">
      {{ csrf_field() }}
        <tr>
            <td>ID Rak</td>
            <td>Nama Rak</td>
            <td>Lokasi Rak</td>
            <td>ID Buku</td>
            <td>Aksi</td>
        </tr>
        @foreach($rak as $r)
        <tr>
          <td>{{ $r->id_rak }}</td>
          <td>{{ $r->nama_rak }}</td>
          <td>{{ $r->lokasi_rak }}</td>
          <td>{{ $r->buku->judul_buku }}</td>
          
          <td>
            <a href="/rak/edit/{{ $r->id_rak }}" class="btn btn-warning">Edit</a>
            <a href="/rak/hapus/{{ $r->id_rak }}" class="btn btn-danger" onclick="return confirm('apakah anda yakin untuk menghapus?')">Hapus</a>
          </td>
        </tr>
        @endforeach
    </table>
<!--   <div class="jumbotron">
    
  </div> -->
</main>
@endsection
