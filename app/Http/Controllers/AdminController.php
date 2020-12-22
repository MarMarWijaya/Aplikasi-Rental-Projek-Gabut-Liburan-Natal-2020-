<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class AdminController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect("/login");
    }

    public function viewMobil(){
        $allMobil = DB::table('mobil')->get();
        return view('listMobil', ['allMobil'=>$allMobil]);
    }

    public function addMobil(Request $req){
        $image = $req->file('foto');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('foto'), $new_name);
        DB::table('mobil')->insert(
            [
                'fotoMobil' => $new_name,
                'merkMobil' => $req->merk,
                'namaMobil' => $req->nama,
                'platNomor' => $req->plat,
                'harga_6_jam' => $req->harga
            ]
        );
        return redirect('/listmobil');
    }

    public function deleteMobil($idMobil){
        DB::table('mobil')->where('idMobil',$idMobil)->delete();
        return redirect('/listmobil');
    }

    public function getMobilByID($idMobil){
        $mobil = DB::table('mobil')->where('idMobil',$idMobil)->get();
        return view('updateMobil', ['mobil'=>$mobil]);
    }

    public function updateMobil(Request $req){
        $image = $req->file('foto');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('foto'), $new_name);

        DB::table('mobil')
        ->where('idMobil',$req->id)
        ->update(
            [
                'fotoMobil' => $new_name,
                'merkMobil' => $req->merk,
                'namaMobil' => $req->nama,
                'platNomor' => $req->plat,
                'harga_6_jam' => $req->harga
            ]
        );
        return redirect('/listmobil');
    }

    //Pemesanan
    public function viewPemesanan(){
        $allPemesanan = DB::table('pemesanan')->get();
        return view('listPemesanan', ['allPemesanan'=>$allPemesanan]);
    }

    public function getPemesananByID($idPemesanan){
        $pemesananByID = DB::table('pemesanan')->where('idPemesanan', $idPemesanan)->get();
        return view('detailPemesanan', ['data'=>$pemesananByID]);
    }

    public function updatePemesanan(Request $req){
        DB::table('pemesanan')->where('idPemesanan', $req->idPemesanan)
        ->update(
            [
                'status' => $req->status
            ]
        );
        return redirect('/listpemesanan');
    }
}
