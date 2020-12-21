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
        DB::table('mobil')->insert(
            [
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
        DB::table('mobil')
        ->where('idMobil',$req->id)
        ->update(
            [
                'merkMobil' => $req->merk,
                'namaMobil' => $req->nama,
                'platNomor' => $req->plat,
                'harga_6_jam' => $req->harga
            ]
        );
        return redirect('/listmobil');
    }
}
