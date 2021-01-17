<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function viewAllMobil(){
        $allMobil = DB::table('mobil')->get();
        return view('pesan', ['dataMobil' => $allMobil]);
    }

    public function tentang(){
        return view('tentang');
    }

    public function viewMobilByID($idMobil){
        $detailMobil = DB::table('mobil')
        ->select('idMobil', 'fotoMobil', 'merkMobil', 'namaMobil','platNomor', 'harga_6_jam')
        ->where('idMobil', $idMobil)
        ->get();

        $dipesanOleh = DB::table('pemesanan')
        ->select('namaPemesan', 'tanggalPemesanan', 'tanggalSelesai')
        ->where('idMobil', $idMobil)
        ->get();
        return view('viewDetailMobil', ['detailMobil' => $detailMobil, 'dipesanOleh' => $dipesanOleh]);
    }

    public function prosesData(Request $req){

        $detailMobil = DB::table('mobil')
        ->select('idMobil', 'fotoMobil', 'merkMobil', 'namaMobil','platNomor', 'harga_6_jam')
        ->where('idMobil', $req->idMobil)
        ->get();

        $tanggalPemesanan = strtotime($req->waktuPemesanan);
        $durasi = $req->durasi;

        $jumlahDurasi = 3600*$durasi;
        $tanggalSelesai = $tanggalPemesanan + $jumlahDurasi;

        $harga = DB::table('mobil')
        ->select('harga_6_jam')
        ->where('idMobil', $req->idMobil)
        ->get();

        $hargaMobil = 0;
        foreach ($harga as $k) {
            $hargaMobil += $k->harga_6_jam;
        }

        if($durasi == 6){
            $hargaMobil = $hargaMobil*1;
        }else if($durasi == 12){
            $hargaMobil = $hargaMobil*2;
        }else if($durasi == 24){
            $hargaMobil = $hargaMobil*4;
        }else if($durasi == 48){
            $hargaMobil = $hargaMobil*8;
        }else if($durasi == 72){
            $hargaMobil = $hargaMobil*12;
        }

        return view('konfirmasi', 
        [
            'detailMobil' => $detailMobil, 
            'namaPemesan' => $req->namaPemesan,
            'hpPemesan' => $req->hpPemesan,
            'emailPemesan' => $req->emailPemesan,
            'tanggalPemesanan' => $tanggalPemesanan, 
            'tanggalSelesai' => $tanggalSelesai, 
            'harga' => $hargaMobil
        ]);
    }

    public function checkout(Request $req){
        //DB Insert
        DB::table('pemesanan')
        ->insert([
            'idMobil' => $req->idMobil,
            'namaPemesan' => $req->namaPemesan,
            'hpPemesan' => $req->hpPemesan,
            'emailPemesan' => $req->emailPemesan,
            'tanggalPemesanan' => $req->tanggalPemesanan,
            'tanggalSelesai' => $req->tanggalSelesai,
            'harga' => $req->harga,
            'status' => $req->status
        ]);

        //Email
        $data = array(
            'merkMobil' => $req->merkMobil,
            'namaMobil' => $req->namaMobil,
            'platNomor' => $req->platNomor,
            'namaPemesan' => $req->namaPemesan,
            'hpPemesan' => $req->hpPemesan,
            'emailPemesan' => $req->emailPemesan,
            'tanggalPemesanan' => $req->tanggalPemesanan,
            'tanggalSelesai' => $req->tanggalSelesai,
            'harga' => $req->harga,
            'status' => $req->status
        );
        $email = $req->emailPemesan;
        // Kirim Email
        Mail::send('email_template', $data, function($mail) use($email) {
            $mail->to($email, 'no-reply')
                    ->subject("Bukti Pemesanan Mobil");
            $mail->from('mariowijaya31@gmail.com', 'Rental Mobil Asek Asek Jos');
        });

        // Cek kegagalan
        if (Mail::failures()) {
            return "Gagal mengirim Email";
        }
        return view('home', ['msg' => "Terimakasih sudah menggunakan layanan kami, cek email Anda untuk melihat bukti pemesanan"]);
        
    }
}
