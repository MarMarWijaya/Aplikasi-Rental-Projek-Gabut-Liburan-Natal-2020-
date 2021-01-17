<html> 
    <head>
        <title>OK.Rental</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="{{ url('/css/styles.css') }}" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" >
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
        </script>
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
        <div class="container">
            <center>
            <div class="table-responsive">
                <input id="myInput" type="text" placeholder=" Search...                 &#128269;" style="margin-left: 67%; width: 13%">
                <br><br>
                <table class="table table-striped" style="font-family: arial, sans-serif; border-collapse: collapse; width: 80%">
                    <thead class="thead-dark" style="background-color: #2e2e2e; color: #ffffff;">
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <th scope="col">Telah Dipesan Oleh</th>
                            <th scope="col">Berangkat</th>
                            <th scope="col">Kembali</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                    @foreach($dipesanOleh as $dO)
                        <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                            <td>{{ $dO->namaPemesan }} </td>
                            <td>{{ $dO->tanggalPemesanan }}</td>
                            <td>{{ $dO->tanggalSelesai }} </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <br>
            <marquee style="color: red" width="900"><h3>Mohon diperhatikan jadwal mobil yang sudah dipesan di atas, agar tidak terjadi bentrok jadwal pada saat memesan rental mobil, Terimakasih &#128522;</h3></marquee>
            <!-- <h3 style="color: red">Mohon diperhatikan jadwal mobil yang sudah dipesan di atas agar tidak terjadi bentrok jadwal</h3> -->
            </center>
        </div>
        @foreach($detailMobil as $dM)
        <form action="/prosesData" method="POST">
            @csrf
            <div class="container">
            <!-- <hr class="my-4"> -->
                <div class="row">
                    <div class="column-content-left col-md-5" style="border: 1px solid #; border-radius: 0px; margin-top:0%; margin-left:12.5%;">
                        <input type='hidden' name='idMobil' value="{{ $dM->idMobil }}">
                        <img src="/foto/{{ $dM->fotoMobil }}" class="img-fluid" alt="Responsive image">
                            <table class="table table-striped" style="width:99%;">
                                <tr style="background-color: #2e2e2e; color: #ffffff;">
                                    <td>&ensp;&ensp;&ensp;&ensp;&ensp;Nama</td>
                                    <td>&ensp;&ensp;&ensp;&ensp;Plat Nomor</td>
                                    <td>Harga</td>
                                </tr>
                                <tr style="border: 1px solid #dddddd; text-align: left; padding: 8px">
                                    <td>{{ $dM->namaMobil }}</td>
                                    <td>{{ $dM->platNomor }}</td>
                                    <td>{{ $dM->harga_6_jam }}</td>
                                </tr>
                            </table>
                    </div>
                    <div class="column-content-right col-md-4" style="border: 1px solid #; border-radius: 0px; margin-top:3%">
                        <table class="table" border="0" style="margin-top:10%">
                            <tr>
                                <td>Nama Pemesan</td>
                                <td>:</td>
                                <td><input type="text" name="namaPemesan" required style="width:100%;" placeholder="Nama Lengkap"></td>
                            </tr>
                            <tr>
                                <td>Hp Pemesan</td>
                                <td>:</td>
                                <td><input type="text" name="hpPemesan" required style="width:100%" placeholder="08xxx"></td>
                            </tr>
                            <tr>
                                <td>Email Pemesan</td>
                                <td>:</td>
                                <td><input type="text" name="emailPemesan" required style="width:100%" placeholder="Contoh@gmail.com"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Pemesanan</td>
                                <td>:</td>
                                <td><input type="datetime-local" id="waktuPemesanan" name="waktuPemesanan" required style="width:100%"><br>
                                    <p style="color:red; margin-top:1%">*Jika datepicker tidak ada, coba ganti browser Google Chrome</p></td>
                            </tr>
                            <tr>
                                <td>Durasi Rental</td>
                                <td>:</td>
                                <td><select id="durasi" name="durasi" required style="width:100%">
                                    <option value='6'>6 Jam</option>
                                    <option value='12'>12 Jam</option>
                                    <option value='24'>24 Jam</option>
                                    <option value='48'>2 Hari</option>
                                    <option value='72'>3 Hari</option>
                                    </select></td>
                            </tr>
                            <tr><td></td></tr>
                            <tr>
                                <td colspan="3">
                                    <center>
                                    <input type='submit' value="Pesan" class="btn btn-warning btn-lg font-weight-bold" role="button" style="width:100%">
                                    </center></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
        </form>
        <br><br>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    </body>
</html>






        
