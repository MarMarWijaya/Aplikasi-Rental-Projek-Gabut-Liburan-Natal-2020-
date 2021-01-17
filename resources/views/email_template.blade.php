<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title></title>
</head>
<body>
    <div class="container">
        <center><h1><b>OK.Rental</b></h1>
        <hr>
        <h4>Hai, {{ $namaPemesan }}</h4>
        <p>Kamu baru saja memesan rental mobil dari layanan kami dengan data sebagai berikut :</p></center>
        <div class="row" style="background-color:#ebebeb;">
            <div class="col" >
                <table cellpadding="5%">
                    <tr>
                        <td>Merk Mobil</td>
                        <td>:</td>
                        <td>{{ $merkMobil }}</td>
                    </tr>
                    <tr>
                        <td>Nama Mobil</td>
                        <td>:</td>
                        <td>{{ $namaMobil }}</td>
                    </tr>
                    <tr>
                        <td>No Plat</td>
                        <td>:</td>
                        <td>{{ $platNomor }}</td>
                    </tr>
                    <tr>
                        <td>Nama Pemesan</td>
                        <td>:</td>
                        <td>{{ $namaPemesan }}</td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td>:</td>
                        <td>{{ $hpPemesan }}</td>
                    </tr>
                    <tr>
                        <td>Email Pemesan</td>
                        <td>:</td>
                        <td>{{ $emailPemesan }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Pemesanan</td>
                        <td>:</td>
                        <td>{{ $tanggalPemesanan }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Selesai</td>
                        <td>:</td>
                        <td>{{ $tanggalSelesai }}</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td>Rp.
                            <?php
                                echo number_format($harga,0,',','.');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Status Pembayaran</td>
                        <td>:</td>
                        <td>{{ $status}}</td>
                    </tr>
                </table>
            </div>
            <div class="col">
                <img src="https://www.freelogodesign.org/file/app/client/thumb/96732271-4210-460c-99e0-7c7e59b7526e_200x200.png?1610694967957" width="250px" style="margin-top: 5%; margin-left: 30%;">
            </div>
          </div>
<br>
<center>
<p>Terimakasih telah menggunakan layanan kami.</p>
<p>Semoga hari Anda menyenangkan.</p>
</center>
</div>
</body>
</html>