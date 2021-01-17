<html> 
    <head>
        <title>OK.Rental</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="{{ url('/css/styles.css') }}" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="https://www.freelogodesign.org/file/app/client/thumb/96732271-4210-460c-99e0-7c7e59b7526e_200x200.png?1610694967957" width="33px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active js-scroll-trigger" href=""><span class="sr-only">(current)</span>Pesan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="tentang">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br><br>
<h3 style="text-align:center">Anda telah memesan dengan data sebagai berikut : </h3>
<form action="/" method="POST">
    @csrf
    @foreach($detailMobil as $dM)
            <div class="container">
            <!-- <hr class="my-4"> -->
                <div class="row">
                    <center>
                        <div class="column-content-left col-md-4" style="border: 1px solid #; border-radius: 0px; margin-top:0%;">
                            <input type='hidden' name='idMobil' value="{{ $dM->idMobil }}">
                            <img src="/foto/{{ $dM->fotoMobil }}" class="img-fluid" alt="Responsive image">
                                <table class="table" border="0">
                                    <tr>
                                        <td>Merk Mobil</td>
                                        <td>:</td>
                                        <td>{{ $dM->merkMobil }}</td>
                                        <td><input type="hidden" name="merkMobil" value="{{ $dM->merkMobil }}"></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Mobil</td>
                                        <td>:</td>
                                        <td>{{ $dM->namaMobil }}</td>
                                        <td><input type="hidden" name="namaMobil" value="{{ $dM->namaMobil }}"></td>
                                    </tr>
                                    <tr>
                                        <td>Plat Nomor</td>
                                        <td>:</td>
                                        <td>{{ $dM->platNomor }}</td>
                                        <td><input type="hidden" name="platNomor" value="{{ $dM->platNomor }}"></td>
                                    </tr>  

                                    <?php
                                        echo "<tr>
                                                <td>Tanggal Pemesanan</td>
                                                <td>:</td>
                                                <td>".date("Y-m-d h:i:s",$tanggalPemesanan)."</td>
                                                <td><input type='hidden' name='tanggalPemesanan' value='".date("Y-m-d h:i:s",$tanggalPemesanan)."'></td>
                                              </tr>";
                                        echo "<tr>
                                                <td>Tanggal Selesai</td>
                                                <td>:</td>
                                                <td>".date("Y-m-d h:i:s",$tanggalSelesai)."</td>
                                                <td><input type='hidden' name='tanggalSelesai' value='".date("Y-m-d h:i:s",$tanggalSelesai)."'></td>
                                              </tr>";
                                        echo "<tr>
                                                <td>Harga</td>
                                                <td>:</td>
                                                <td>".$harga."</td>
                                                <td><input type='hidden' name='harga' value='".$harga."'></td>
                                              </tr>";   
                                    ?>

                                    <tr>
                                        <td>Nama Pemesan</td>
                                        <td>:</td>
                                        <td>{{ $namaPemesan }}</td>
                                        <td><input type="hidden" name="namaPemesan" value="{{ $namaPemesan }}"></td>
                                    </tr>
                                    <tr>
                                        <td>HP Pemesan</td>
                                        <td>:</td>
                                        <td>{{ $hpPemesan }}</td>
                                        <td><input type="hidden" name="hpPemesan" value="{{ $hpPemesan }}"></td>
                                    </tr>
                                    <tr>
                                        <td>Email Pemesan</td>
                                        <td>:</td>
                                        <td>{{ $emailPemesan }}</td>
                                        <td><input type="hidden" name="emailPemesan" value="{{ $emailPemesan }}"></td>
                                    </tr>
                                    <input type="hidden" name="status" value="PENDING">
                                    <tr>
                                        <td colspan="3"><input type='submit' value="Pesan" class="btn btn-warning btn-lg font-weight-bold" role="button" style="width:100%"></td>
                                    </tr>
                                </table>
                        </div>
                    </center>
                </div>
            </div>
    @endforeach
</form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>