<html>
<head></head>
<body>
<h3>Anda telah memesan dengan data sebagai berikut : </h3>
<form action="/" method="POST">
@csrf
    @foreach($detailMobil as $dM)
        <input type="hidden" name="idMobil" value="{{ $dM->idMobil }}">
        <img src="/foto/{{ $dM->fotoMobil }}" width="200px"><br>
        Merk Mobil: {{ $dM->merkMobil }}<br>
        <input type="hidden" name="merkMobil" value="{{ $dM->merkMobil }}">
        Nama Mobil: {{ $dM->namaMobil }}<br>
        <input type="hidden" name="namaMobil" value="{{ $dM->namaMobil }}">
        Plat Nomor: {{ $dM->platNomor }}<br>
        <input type="hidden" name="platNomor" value="{{ $dM->platNomor }}">
    @endforeach
        
    <?php   
            echo "Tanggal Pemesanan: ".date("Y-m-d h:i:s",$tanggalPemesanan)."<br>"; 
            echo "Tanggal Selesai: ".date("Y-m-d h:i:s",$tanggalSelesai)."<br>";
            echo "Harga: ".$harga."<br>";

            echo "<input type='hidden' name='tanggalPemesanan' value='".date("Y-m-d h:i:s",$tanggalPemesanan)."'>";
            echo "<input type='hidden' name='tanggalSelesai' value='".date("Y-m-d h:i:s",$tanggalSelesai)."'>";
            echo "<input type='hidden' name='harga' value='".$harga."'>";
    ?>
        Nama Pemesan: {{ $namaPemesan }}<br>
        <input type="hidden" name="namaPemesan" value="{{ $namaPemesan }}">
        HP Pemesan: {{ $hpPemesan }}<br>
        <input type="hidden" name="hpPemesan" value="{{ $hpPemesan }}">
        Email Pemesan: {{ $emailPemesan }}<br>
        <input type="hidden" name="emailPemesan" value="{{ $emailPemesan }}">

    <input type="hidden" name="status" value="PENDING">
    <br>
    <input type="submit">
    </form>
</body>
</html>