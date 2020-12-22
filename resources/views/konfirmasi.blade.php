@foreach($detailMobil as $dM)
    {{ $dM->idMobil }}<br>
    <img src="/foto/{{ $dM->fotoMobil }}" width="200px"><br>
    {{ $dM->merkMobil }}<br>
    {{ $dM->namaMobil }}<br>
    {{ $dM->platNomor }}<br>
@endforeach

    {{ $namaPemesan }}<br>
    {{ $hpPemesan }}<br>
    {{ $emailPemesan }}<br>

<?php   
        echo date("Y-m-d h:i:s",$tanggalPemesanan)."<br>"; 
        echo date("Y-m-d h:i:s",$tanggalSelesai)."<br>";
        echo $harga;
?>
<input type="hidden" name="status" value="PENDING">
<br>
<button>Pesan</button>