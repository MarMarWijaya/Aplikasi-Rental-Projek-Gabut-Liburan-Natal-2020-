<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .imageInput {
            background: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSw6QedTNi-tUchlqiuTsPuDL5QDN-40nVbxg&usqp=CAU");
            border: 0;
            display: block;
            width: 20px;
        }
    </style>
</head>
<body>
<a href="/dashboard">Home</a>
<a href="/listmobil">Data Mobil</a>
<a href="/listpemesanan">Data Pemesanan</a>
<a href="/logout">Logout</a>
<center><h1>Manajemen Data Pemesanan</h1></center>
<br>
<div class="container">
    @if(isset($allPemesanan))
    <table class="table">
        <thead class="table-dark">
            <tr>
                <td>ID Pemesanan</td>
                <td>ID Mobil</td>
                <td>Nama Pemesanan</td>
                <td>Tanggal Pemesanan</td>
                <td>Tanggal Selesai</td>
                <td>Harga</td>
                <td>Status</td>
                <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
        @foreach($allPemesanan as $aP)
            <tr>
                <td>{{ $aP->idPemesanan }}</td>
                <td>{{ $aP->idMobil }}</td>
                <td>{{ $aP->namaPemesan }}</td>
                <td>{{ $aP->tanggalPemesanan }}</td>
                <td>{{ $aP->tanggalSelesai }}</td>
                <td>{{ $aP->harga }}</td>
                <td>{{ $aP->status }}</td>
                <td><a href="/listpemesanan/{{ $aP->idPemesanan }}"><img src="https://png.pngitem.com/pimgs/s/138-1384587_vision-png-transparent-images-eye-icon-font-awesome.png" width="20px"></a></td>
                <td><a href="/listpemesanan/{{ $aP->idPemesanan }}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSw6QedTNi-tUchlqiuTsPuDL5QDN-40nVbxg&usqp=CAU" width="20px"></a></td>
            </tr>
        @endforeach
        <tbody>
    </table>
    @endif
    
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>