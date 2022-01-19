@extends('folder_admin/master1')
@section('konten')
<main role="main" class="container">
    <a href="/peminjaman/tambah" class="btn btn-primary">Tambah</a> 
    <table class="table table-hover table-striped datatable" style="margin-top: 20px">
      {{ csrf_field() }}
        <tr>
            <td>ID Peminjaman</td>
            <td>Tgl Pinjam</td>
            <td>Tgl Kembali</td>
            <td>Nama Anggota</td>
            <td>Judul Buku</td>
            <td>Nama Petugas</td>
            <td>Aksi</td>
        </tr>
      <tbody>
        @foreach($peminjaman as $a)
        <tr>
          <td>{{ $a->id_peminjaman }}</td>
          <td>{{ $a->tanggal_pinjam }}</td>
          <td>{{ $a->tanggal_kembali }}</td>
          <td>{{ $a->anggota->nama_anggota }}</td>
          <td>{{ $a->buku->judul_buku }}</td>
          <td>{{ $a->petugas->nama_petugas }}</td>
          <td>
            <!-- <a href="/peminjaman/edit/{{ $a->id_peminjaman }}" class="btn btn-primary">Edit</a>
            <a href="/peminjaman/hapus/{{ $a->id_peminjaman }}" class="btn btn-danger" onclick="return confirm('apakah anda yakin untuk menghapus')" >Hapus</a> -->
            <a href="/v_pengembalian/tambah/{{ $a->id_peminjaman }}" class="btn btn-primary">Kembalikan</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

<!--   <div class="jumbotron">
    
  </div> -->
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
@endsection