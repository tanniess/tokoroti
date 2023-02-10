@extends('landing')

@section('disini')
<div class="tomboladd" style="position:absolute; top: 15%; left: 19%">
    <a href = "/tambah" style="color: white">
    <div style="padding-top: 13px; padding-left: 28px">
        Tambah Member
    </div>
    </a>
</div>


<div style="padding-top:20px; position:absolute; top: 22%; left:19%">
    <table style="width:1400px; background-color:white;border-collapse:collapse; text-align:left;">

        <thead>
        <tr style="background-color:#f7f7f7;font-family:Poppins;">
           <th style="text-align: center;">
            #
           </th>
           <th style="padding:10px;">
            Nama Awal
           </th>
           <th>
            Nama Akhir
           </th>
           <th style="text-align:left;">
            Alamat
           </th>
           <th style="text-align:left;">
            Telefon
           </th>
           <th>
            Hapus
           </th>
           <th>
            Edit
           </th>
        </tr>
    </thead>
    
    
    @foreach ($member -> skip(0) as $member)
    
        <tr style="font-family:Poppins;">
            <td style="padding:10px;text-align:center">
                1
            </td>
            <td>
                {{$member -> namaAwal}}
            </td>
            <td>
                {{$member -> namaAkhir}}
            </td>
            <td>
                 {{$member -> alamat}}
            </td>
            <td>
                 {{$member -> telefon}}
            </td>
            <td>
                <form action="/member/{{$member->id}}" method="POST">
                    @method('delete')
                    @csrf
                    <div style="padding-top: 18px">
                    <button onclick="return confirm('Apakah ingin dihapus ?')"> Hapus </button>
                    </div>
                </form>
                </td>
                <td>
                    <a href="/member/{{$member -> id}}/edit"> Edit </a>
                </td>
        </tr>


      
        @endforeach
    
    </table>
    
@endsection