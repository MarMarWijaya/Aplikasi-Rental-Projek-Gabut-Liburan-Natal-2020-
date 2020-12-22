
@foreach($detailMobil as $dM)
<form action="/prosesData" method="POST">
@csrf
    <input type='hidden' name='idMobil' value="{{ $dM->idMobil }}">
    <img src="/foto/{{ $dM->fotoMobil }}" width="200px"><br>
    Merk : {{ $dM->merkMobil }} <br>
    Nama : {{ $dM->namaMobil }} <br>
    Plat Nomor : {{ $dM->platNomor }} <br>
    Harga : {{ $dM->harga_6_jam }} <br>
@endforeach
    <table>
    <thead>
        <tr>
            <td>Sudah dipesan oleh</td>
            <td>pada</td>
            <td>hingga</td>
        </tr>
    </thead>
    <tbody>
    @foreach($dipesanOleh as $dO)
    <tr>
        <td>{{ $dO->namaPemesan }} </td>
        <td>{{ $dO->tanggalPemesanan }}</td>
        <td>{{ $dO->tanggalSelesai }} </td>
   </tr>
    @endforeach
    </tbody>
    </table>
    <br>
    
        Nama Pemesan: <input type="text" name="namaPemesan"><br>
        Hp Pemesan: <input type="text" name="hpPemesan"><br>
        Email Pemesan: <input type="text" name="emailPemesan"><br>
        Tanggal Pemesanan: <input type="datetime-local" id="waktuPemesanan" name="waktuPemesanan">Jika datepicker tidak ada, coba ganti browser Google Chrome<br>
        Durasi Rental: 
        <select id="durasi" name="durasi">
            <option value='6'>6 Jam</option>
            <option value='12'>12 Jam</option>
            <option value='24'>24 Jam</option>
            <option value='48'>2 Hari</option>
            <option value='72'>3 Hari</option>
        </select><br>
        <input type='submit'>
     </form>


        
