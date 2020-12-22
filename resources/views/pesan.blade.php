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