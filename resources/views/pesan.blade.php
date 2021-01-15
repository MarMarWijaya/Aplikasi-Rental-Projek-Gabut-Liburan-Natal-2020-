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
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link js-scroll-trigger" href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href=""><span class="sr-only">(current)</span>Pesan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="tentang">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br><br><br>
        <table class="table">
                <thead class="table-dark">
                    <tr>
                        <td>ID</td>
                        <td>Foto</td>
                        <td>Merk</td>
                        <td>Nama</td>
                        <td>Plat Nomor</td>
                        <td>Harga Sewa per 6 jam</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($dataMobil as $aM)
                    <tr>
                        <td>{{ $aM->idMobil }}</td>
                        <td><img src="/foto/{{ $aM->fotoMobil }}" width="100px"></td>
                        <td>{{ $aM->merkMobil }}</td>
                        <td>{{ $aM->namaMobil }}</td>
                        <td>{{ $aM->platNomor }}</td>
                        <td>{{ $aM->harga_6_jam }}</td>
                        <td><a href="/pesan/{{ $aM->idMobil }}">Lihat Detail</a></td>
                    </tr>
                @endforeach
                <tbody>
            </table>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    </body>
</html>