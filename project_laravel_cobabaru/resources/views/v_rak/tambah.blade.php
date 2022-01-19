@extends('folder_admin/master1')
@section('konten')
    <form action="/rak/simpan" method="get">
      {{ csrf_field() }}
        <!-- ID Rak <input type="text" name="id_rak" required="required"> <br/> -->
        <div>
            <label>Nama Rak</label><br>
             <input type="text" name="nama_rak" required="required" class="form-control"> <br/>
         </div>
        <div>
            <label>Lokasi Rak</label><br> 
            <input type="text" name="lokasi_rak" required="required" class="form-control"> <br/>
        </div>
        <div>
            <label for="id_buku">Judul Buku </label><br>
            <select name="id_buku" id="id_buku" class="form-control">
                <option> Judul Buku </option>
                @foreach ($buku as $b)
                <option value="{{ $b->id_buku }}">{{ $b->judul_buku }}
                </option>
                @endforeach
            </select>
    </div>
    </br>
        <input type="submit" name="Simpan" class="btn btn-primary" style="margin-top: 10px; margin-right: 20px"> 
        <a href="/rak" class="btn btn-dark" style="margin-top: 10px">Kembali</a>
    </form>
<!-- </main> -->
@endsection
