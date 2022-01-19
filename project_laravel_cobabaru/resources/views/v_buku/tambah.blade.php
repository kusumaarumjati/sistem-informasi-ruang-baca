@extends('folder_admin/master1')
@section('konten')
    <form action="/buku/simpan" method="get">
      {{ csrf_field() }}
        <div>
            <label for="judul_buku">Judul Buku</label> <br>
            <input type="text" name="judul_buku" required="required" class="form-control"> <br/>
        </div>
        <div>
            <label for="penulis_buku">Penulis Buku </label> <br>
            <input type="text" name="penulis_buku" required="required" class="form-control"> <br/>
        </div>
        <div>
        <label>Penerbit </label><br>
        <input type="text" name="penerbit" required="required" class="form-control"> <br/>
        </div>
        <div>
            <label>Tahun Terbit</label> <br> 
            <input type="text" name="tahun_terbit" required="required" class="form-control"> <br/>
        </div>
        <div>
            <label>Stok</label><br>
            <input type="text" name="stok" required="required" class="form-control"> <br/>
        </div>
        <input type="submit" name="Simpan" class="btn btn-primary" style="margin-top: 10px; margin-right: 20px"> 
        <a href="/buku" class="btn btn-dark" style="margin-top: 10px">Kembali</a>

    </form>
@endsection
