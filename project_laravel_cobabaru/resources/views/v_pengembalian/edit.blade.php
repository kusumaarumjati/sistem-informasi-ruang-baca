@extends('folder_admin/master1')
@section('konten')
    <form method="POST" action="/pengembalian/update/{{ $pengembalian->id }}" >
        {{ csrf_field() }}
        <input type="hidden" name="id_pengembalian" required="required" value="{{ $pengembalian->id_pengembalian }}" class="form-control"> <br/>

        <div>
          <label>Tanggal Pengembalian</label><br> <input type="date" name="tanggal_pengembalian" required="required" value="{{ $pengembalian->tanggal_pengembalian }}" class="form-control"> <br/>
        </div>
        <div>
          <label for="id_anggota">Nama Anggota</label><br>
          <select name="id_anggota" id="id_anggota" class="form-control">
                <option> Nama Anggota </option>
                @foreach ($anggota as $a)
                <option value="{{ $a->id_anggota }}">{{ $a->nama_anggota }}
                </option>
                @endforeach
            </select>
            <br>
        </div>        <div>
          <label for="id_petugas">ID Petugas</label><br>
          <select name="id_petugas" id="id_petugas" class="form-control">
                <option> Nama Petugas </option>
                @foreach ($petugas as $p)
                <option value="{{ $p->id_petugas }}">{{ $p->nama_petugas }}
                </option>
                @endforeach
            </select>
            <br> 
        </div>
        <div>
            <label for="id_buku">Judul Buku </label><br>
            <!-- <input type="text" name="id_buku" required="required" class="form-control"> <br/> -->
            <select name="id_buku" id="id_buku" class="form-control">
                <option> Judul Buku </option>
                @foreach ($buku as $b)
                <option value="{{ $b->id_buku }}">{{ $b->judul_buku }}
                </option>
                @endforeach
            </select>
            <br>
    </div>
        <input type="submit" name="Simpan" class="btn btn-primary" style="margin-top: 10px; margin-right: 20px"> 
        <a href="/pengembalian" class="btn btn-dark" style="margin-top: 10px">Kembali</a>
    </form>
<!--   <div class="jumbotron">
    
  </div> -->
</main>
@endsection
