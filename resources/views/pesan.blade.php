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
        <br><br><br>
            <div class="container">
                <div class="row">
                @foreach($dataMobil as $aM)
                    <div class="column-content-left col-md-5" style="border: 1px solid #white; border-radius: 0px; margin-left:16%;">
                        <table border="0">
                                <tr>
                                    <td><img src="/foto/{{ $aM->fotoMobil }}" class="img-fluid" alt="Responsive image"></td>
                                </tr>
                        </table> 
                    </div>
                    
                    <div class="column-content-right col-md-3" style="border: 1px solid #white; border-radius: 0px;">
                        <table class="table" border="0" style="margin-top:25%">
                            <tr>
                                <td>Merk</td>
                                <td>:</td>
                                <td>{{ $aM->merkMobil }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ $aM->namaMobil }}</td>
                            </tr>
                            <tr>
                                <td>Plat Nomor</td>
                                <td>:</td>
                                <td>{{ $aM->platNomor }}</td>
                            </tr>
                            <tr>
                                <td>Harga Sewa per 6 jam</td>
                                <td>:</td>
                                <td>{{ $aM->harga_6_jam }}</td>
                            </tr>
                            <tr>
                                <td colspan="3"><center><a class="btn btn-warning btn-lg font-weight-bold" href="/pesan/{{ $aM->idMobil }}" role="button" style="width:100%">PESAN SEKARANG</a></center></td>
                            </tr>
                        </table>
                    </div>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                    @endforeach
                </div>
                <br>
            </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    </body>
</html>