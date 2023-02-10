<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function member(){
        return view('member',[
            "member"=> Member::all()
        ]);
    }

    public function tambah(){
        return view('tambahmember');
    }

    public function store(Request $request){
        $validatedMember = $request-> validate([
            'namaAwal' => 'required',
            'namaAkhir' => 'required',
            'alamat' => 'required',
            'telefon' => 'required',

        ]);

        Member::create($validatedMember);

        return redirect('/member');
    }

    public function destroy($id)
    {
        Member::destroy($id);

        return redirect('/member')->with('terhapus', 'Data Telah Dihapus!');
    }

    public function edit($id){
        $member=Member::where('id',$id)->first();
        return view('editmember',[
            'member' => $member,
        ]);
    }

    public function update(Request $request){
        $validatedProduk = $request -> validate([
            'namaAwal' => 'required',
            'namaAkhir' => 'required',
            'alamat' => 'required',
            'telefon' => 'required',

        ]);

        Member::where('id',$request->id)-> update([
            'namaAwal' => $request-> namaAwal,
            'namaAkhir' => $request -> namaAkhir,
            'alamat' => $request -> alamat,
            'telefon' => $request -> telefon

        ]);

        return redirect('/member')->with('updated','Item telah diupdate!');
    }
}


