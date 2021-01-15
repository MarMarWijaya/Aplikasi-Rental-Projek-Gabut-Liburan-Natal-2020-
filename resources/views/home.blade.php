<html> 
    <head>
        <title>OK.Rental</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="{{ url('/css/styles.css') }}" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>
    <body>
      
      @if(isset($msg))
        <script>
          alert("Terimakasih sudah menggunakan layanan kami, cek email Anda untuk melihat tiket Anda");
        </script>
      @endif

        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href=""><img src="https://www.freelogodesign.org/file/app/client/thumb/96732271-4210-460c-99e0-7c7e59b7526e_200x200.png?1610694967957" width="33px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link js-scroll-trigger" href="">Beranda<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="pesan">Pesan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="tentang">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="jumbotron">
          <div class="container">
          <h1 class="display-4"><span class="font-weight-bold"><br><br><br><br>OK.Rental</span></h1>
          <p></p>
              <p class="lead"><b>Bingung Sewa Mobil dimana ? Cari di OK.Rental aja &#128521;</b></p>
              <a class="btn btn-warning btn-lg font-weight-bold" href="/pesan" role="button">PESAN SEKARANG</a>
          </div>
        </div>

        <br>
        <h2 class="display-6" style="text-align:center;"><b>Daftar Mobil</b></h2>
        <hr class="my-4">
        <div class="container" style="">
          <div class="row" style="margin-top: 0%">
              <div class="column-content-left col-md-3">
                <img src="https://d2pa5gi5n2e1an.cloudfront.net/id/images/car_models/Porsche_911/7/exterior/exterior_2L_1.jpg" class="img-fluid" alt="Responsive image">
                  <!-- Button trigger modal -->
                  <center><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal1" style="border-radius: 8px; color: black; margin-top: 3%; font-size: 20;">
                  Porsche 911 Turbo S
                  </button></center>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Porsche 911 Turbo S</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="OK"></button>
                        </div>
                        <div class="modal-body">
                        <b>1. Dimensi & Kapasitas Porsche 911 Turbo S PDK</b><br>
                        &ensp;&ensp;-> Panjang 911 Turbo S PDK adalah 4506 mm. Lebarnya 1978 mm dan tinggi 1296 mm. Coupe 4 Kursi ini punya ground clearance 156 mm. Wheelbase-nya mencapai 2450 mm. kapasitas tangki BBM 68 L.<br><br>
                        <b>2. Konsumsi BBM Porsche 911 Turbo S PDK</b><br>
                        &ensp;&ensp;-> Konsumsi BBM 911 Turbo S PDK adalah 13 kmpl di jalan tol dan 7.6 kmpl di perkotaan.<br><br>
                        <b>3. Mesin Porsche 911 Turbo S PDK</b><br>
                        &ensp;&ensp;-> Varian 911 Turbo S PDK ditenagai oleh mesin Petrol 3800 cc dengan konfigurasi 6 silinder segaris, 4 valve, DOHC.<br><br>
                        <b>4. Transmisi Porsche 911 Turbo S PDK</b><br>
                        &ensp;&ensp;-> Porsche 911 Turbo S PDK menggunakan transmisi 7-Speed Otomatis.<br><br>
                        <b>5. Performa 911 Turbo S PDK</b><br>
                        &ensp;&ensp;-> Mesin 911 Turbo S PDK 3800 cc menyuguhkan tenaga 560 hp dengan torsi 700 Nm.<br><br>
                        <b>6. Ban 911 Turbo S PDK</b><br>
                        &ensp;&ensp;-> Roda 911 Turbo S PDK menggunakan pelek 20 Inch alloy dengan ukuran ban depan 245/35 R20 dan belakang Radial.<br><br>
                        <b>7. Kompetitor Porsche 911 Turbo S PDK</b><br>
                        &ensp;&ensp;-> Di Indonesia, 911 Turbo S PDK memiliki beberapa kompetitor. Diantaranya Maserati GranTurismo MC Stradale V8, Jaguar F Type 3.0 S Coupe, Mercedes Benz AMG GT S dan Porsche Taycan Turbo.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;

              <div class="column-content-right col-md-3">
                <img src="https://cdn.webshopapp.com/shops/113468/files/92861132/800x600x2/tamiya-51246-nissan-skyline-r34-gt-r-nismo-z-tune.jpg" class="img-fluid" alt="Responsive image">
                  <!-- Button trigger modal -->
                  <center><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal2" style="border-radius: 8px; color: black; margin-top: 3%; font-size: 20;">
                  Nissan Skyline R34
                  </button></center>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Nissan Skyline R34</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="OK"></button>
                        </div>
                        <div class="modal-body">
                        <b>1. Menggunakan mesin RB26DETT, yakni Racing Build, 2600 cc, DOHC, electronic Fuel Injection, serta twin turbo.</b><br><br>
                        <b>2. Konfigurasi 6 sillinder segaris yang dapat dilayani oleh 24 katub bersistem buka tutup DOHC.</b><br><br>
                        <b>3. Mampu digunakan hingga 330 hp</b><br><br>
                        <b>4. Akselerasi 0-100 kpj.</b><br><br>
                        <b>5. Dilengkapi mesin penggerak roda AWD / 4WD yang membuat mobil stabil saat melewati tikungan dengan kecepatan tinggi.</b><br><br>
                        <b>6. Bore and stroke 87 mm x 77,7 mm.</b><br><br>
                        <b>7. Compression ratio 8.5 : 1.</b><br><br>
                        <b>8. Displacement 2,771 cc.</b><br><br>
                        <b>9. Max power 368 kw.</b><br><br>
                        <b>10. Max torque over 540 Nm (55 kg.m).</b><br><br>
                        <b>11. Weight 1,600 kg.</b>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;

              <div class="column-content-right col-md-3">
                <img src="https://www.nicepng.com/png/full/11-114686_2019-lamborghini-aventador-2019-lamborghini-aventador-s-black.png" class="img-fluid" alt="Responsive image">
                  <!-- Button trigger modal -->
                  <center><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal3" style="border-radius: 8px; color: black; margin-top: 3%; font-size: 20;">
                  Lamborghini Aventador
                  </button></center>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Lamborghini Aventador</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="OK"></button>
                        </div>
                        <div class="modal-body">
                        <b>1. Konsumsi BBM Lamborghini Aventador Lp 700-4 Roadster</b><br>
                        &ensp;&ensp;-> Konsumsi BBM Aventador Lp 700-4 Roadster adalah 9.3 kmpl di jalan tol dan 4.1 kmpl di perkotaan.<br><br>
                        <b>2. Transmisi Lamborghini Aventador Lp 700-4 Roadster</b><br>
                        &ensp;&ensp;-> Lamborghini Aventador Lp 700-4 Roadster menggunakan transmisi 7-Speed Otomatis.<br><br>
                        <b>3. Performa Aventador Lp 700-4 Roadster</b><br>
                        &ensp;&ensp;-> Mesin Aventador Lp 700-4 Roadster 6498 cc menyuguhkan tenaga 700 hp dengan torsi 690 Nm.<br><br>
                        <b>4. Ban Aventador Lp 700-4 Roadster</b><br>
                        &ensp;&ensp;-> Roda Aventador Lp 700-4 Roadster menggunakan pelek 19 Inch alloy dengan ukuran ban depan 255/30 ZR19 dan belakang Run Flat.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
          <div class="row" style="margin-top: 2%">
              <div class="column-content-left col-md-3" >
                <img src="https://data.1freewallpapers.com/download/white-honda-civic-type-r-2020-4k-5k-cars-800x600.jpg" class="img-fluid" alt="Responsive image">
                <!-- Button trigger modal -->
                  <center><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal4" style="border-radius: 8px; color: black; margin-top: 3%; font-size: 20;">
                  Honda Civic Type-R
                  </button></center>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Honda Civic Type-R</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="OK"></button>
                        </div>
                        <div class="modal-body">
                        <b>1. Performa</b><br>
                        &ensp;&ensp;-> Tenaga : 301PS / 6.500rpm, Torsi : 400Nm / 2.500 - 4.500rpm.<br><br>
                        <b>2. Keamanan</b><br>
                        &ensp;&ensp;-> Anti theft system : Alarm System, Engine immobilizer : Yes.<br><br>
                        <b>3. Velg dan Ban</b><br>
                        &ensp;&ensp;-> Ukuran ban : 245/30, Material velg : 20 inch Alloy wheel.<br><br>
                        <b>4. Suspensi dan Rem</b><br>
                        &ensp;&ensp;-> Rem Depan : Brembo Ventilated Disc brake, Suspensi depan : Dual Axis, Rem Belakang : Solid Disc brake, Suspensi belakang : Multi-Link.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;

          </div>
          </div>
        </div>
        <br>
        
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    </body>
</html>