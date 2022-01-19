@extends('folder_admin/dash_anggota')
@section('konten')
<main role="main" class="container">
<form class="navbar-form navbar-left" action="/tampilbuku" method="get" style="margin-left: 760px;">
          <div class="input-group">
            <input type="text" value="{{ old('cari') }}" class="form-control" placeholder="Search..." name="cari">
            <span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
          </div>
        </form>

    <table class="table table-hover table-striped datatable" style="margin-top: 10px">
      {{ csrf_field() }}
        <tr>
            <td>ID Buku</td>
            <td>Judul Buku</td>
            <td>Penulis Buku</td>
            <td>Penerbit</td>
            <td>Tahun Terbit</td>
        </tr>
        @foreach($buku as $b)
        <tr>
          <td>{{ $b->id_buku }}</td>
          <td>{{ $b->judul_buku }}</td>
          <td>{{ $b->penulis_buku }}</td>
          <td>{{ $b->penerbit}}</td>
          <td>{{ $b->tahun_terbit }}</td>
        </tr>
        @endforeach
    </table>
<!--   <div class="jumbotron">
    
  </div> -->
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
@endsection
