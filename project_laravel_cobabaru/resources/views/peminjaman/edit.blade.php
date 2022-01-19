@extends('folder_admin/master1')
@section('konten')
<main role="main" class="container" style="margin-bottom: 30px">
    <form action="/peminjaman/update/{{ $peminjaman->id }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id_peminjaman" required="required" value="{{ $peminjaman->id_peminjaman }}" class="form-control"> <br/>
        <div>
          <label>Tanggal Pinjam</label><br> 
          <input type="date" name="tanggal_pinjam" required="required" value="{{ $peminjaman->tanggal_pinjam }}" class="form-row"> <br/>
        </div>
        <div>
          <label>Tanggal Kembali</label><br> 
          <input type="date" name="tanggal_kembali" required="required" value="{{ $peminjaman->tanggal_kembali }}" class="form-row"> <br/>
        </div>
        <div>
          <label for="id_anggota">Nama Anggota</label><br>
          <select name="id_anggota" id="id_anggota" class="form-row" value="{{ $peminjaman->id_anggota }}">
                <option> Nama Anggota </option>
                @foreach ($anggota as $a)
                <option value="{{ $a->id_anggota }}">{{ $a->nama_anggota }}
                </option>
                @endforeach
            </select>
            <br>
        </div>
        <div>
            <label for="id_buku">Judul Buku </label><br>
            <!-- <input type="text" name="id_buku" required="required" class="form-control"> <br/> -->
            <select name="id_buku" id="id_buku" class="form-row" value="{{ $peminjaman->id_buku }}">
                <option> Judul Buku </option>
                @foreach ($buku as $b)
                <option value="{{ $b->id_buku }}">{{ $b->judul_buku }}
                </option>
                @endforeach
            </select>
            <br>
    </div>
        <div>
          <label for="id_petugas">ID Petugas</label><br>
          <select name="id_petugas" id="id_petugas" class="form-row" value="{{ $peminjaman->id_petugas }}">
                <option> Nama Petugas </option>
                @foreach ($petugas as $p)
                <option value="{{ $p->id_petugas }}">{{ $p->nama_petugas }}
                </option>
                @endforeach
            </select>
            <br> 
        </div>
        <input type="submit" name="Simpan" class="btn btn-primary" style="margin-top: 10px; margin-right: 20px">
        <a href="/peminjaman" class="btn btn-dark" style="margin-top: 10px; margin-right: 20px">Kembali</a>
    </form>
<!--   <div class="jumbotron">
    
  </div> -->
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
@endsection
