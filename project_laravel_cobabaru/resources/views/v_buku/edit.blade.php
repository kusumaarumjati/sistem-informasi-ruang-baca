@extends('folder_admin/master1')
@section('konten')
    <form method="POST" action="/buku/update/{{ $buku->id }}" >
        {{ csrf_field() }}
        <input type="hidden" name="id_buku" required="required" value="{{ $buku->id_buku }}" > <br/>

        <div>
            <label for="judul_buku">Judul Buku</label> <br>
            <input type="text" name="judul_buku" required="required" value="{{ $buku->judul_buku }}" class="form-control"> <br/>
        </div>
        <div>
            <label for="penulis_buku">Penulis Buku </label> <br>
            <input type="text" name="penulis_buku" required="required" value="{{ $buku->penulis_buku }}" class="form-control"> <br/>
        </div>
        <div>
        <label>Penerbit </label><br>
        <input type="text" name="penerbit" required="required" value="{{ $buku->penerbit }}" class="form-control"> <br/>
        </div>
        <div>
            <label>Tahun Terbit</label> <br> 
            <input type="text" name="tahun_terbit" required="required" value="{{ $buku->tahun_terbit }}" class="form-control"> <br/>
        </div>
        <div>
            <label>Stok</label><br>
            <input type="text" name="stok" required="required"value="{{ $buku->stok }}" class="form-control"> <br/>
        </div>
        <input type="submit" name="Simpan" class="btn btn-primary" style="margin-top: 10px; margin-right: 20px"> 
        <a href="/buku" class="btn btn-dark" style="margin-top: 10px">Kembali</a>
    </form>
<!--   <div class="jumbotron">
    
  </div> -->
</main>
@endsection
