@extends('folder_admin/dash_anggota')
@section('konten')
<main role="main" class="container">
  <form class="navbar-form navbar-right" action="/history" method="get" style="margin-right: 90px">
          <div class="input-group">
            <input type="text" value="{{ old('cari') }}" class="form-control" placeholder="Search..." name="cari">
            <span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
          </div>
        </form>
          <h1>History Peminjaman</h1>
    <table class="table table-hover table-striped datatable" style="margin-top: 20px">
      {{ csrf_field() }}
        <tr>
            <td>ID Peminjaman</td>
            <td>Tgl Pinjam</td>
            <td>Tgl Kembali</td>
            <td>Nama Anggota</td>
            <td>Judul Buku</td>
            <td>Nama Petugas</td>
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
        </tr>
        @endforeach
      </tbody>
    </table>

<!--   <div class="jumbotron">
    
  </div> -->
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
@endsection