@extends('landing')

@section('disini')

<div style="font-family:Poppins;font-size:30;padding-bottom:30px; position:absolute; top: 15%; left: 19%">
Tambah Member
</div>

<div style="font-family:Poppins; position:absolute; top: 21%; left: 20%">
    <form action ="/create" method ="POST">
        @csrf
    
        <label for = "namaAwal"> <b>
            Nama Awal
        </b>
        </label>
    
        <br>
        <input type="text" id="namaAwal" name="namaAwal" placeholder="Masukkan Nama Awal">
        
        <div style="padding-top: 10px">
        <label for = "namaAkhir"> <b>
            Nama Akhir
        </b>
        </label>

        <br>
        <input type="text" id="namaAkhir" name="namaAkhir" placeholder="Masukkan Nama Akhir">
        </div>

        <div style="padding-top: 10px">
        <label for = "alamat"> <b>
            Alamat
        </b>
        </label>
    
        <br>
        <input type="text" id="alamat" name="alamat" placeholder="Masukkan Alamat">
        </div>
    
        <div style="padding-top: 10px">
        <label for = "telefon"> <b>
            Telefon
        </b>
        </label>
    
        <br>
        <input type="text" id="telefon" name="telefon" placeholder="Masukkan Telefon">
        </div>

        <div style="padding-top: 20px">
        <input type="submit" value="Submit">
        </div>
    </form>
    
</div>

@endsection