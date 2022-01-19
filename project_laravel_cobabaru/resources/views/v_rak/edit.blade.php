@extends('folder_admin/master1')
@section('konten')
    <form method="POST" action="/rak/update/{{ $rak->id }}" >
        {{ csrf_field() }}
        <input type="hidden" name="id_rak" required="required" value="{{ $rak->id_rak }}" > <br/>

        <div>
            <label>Nama Rak</label><br>
             <input type="text" name="nama_rak" required="required" value="{{ $rak->nama_rak }}" class="form-control"> <br/>
         </div>
        <div>
            <label>Lokasi Rak</label><br> 
            <input type="text" name="lokasi_rak" required="required" value="{{ $rak->lokasi_rak }}" class="form-control"> <br/>
        </div>
        <div>
            <label for="id_buku">Judul Buku </label><br>
            <select name="id_buku" id="id_buku" class="form-control" value="{{ $rak->buku->judul_buku }}">
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
<!--   <div class="jumbotron">
    
  </div> -->
</main>
@endsection
