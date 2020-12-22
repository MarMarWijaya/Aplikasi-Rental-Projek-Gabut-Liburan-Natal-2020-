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
<br>
<div class="container">
    @if(isset($data))
    @foreach($data as $d)
    <center><h1>Detail Data Pemesanan ID : {{ $d->idPemesanan }}</h1></center>
    <table class="table">
            <tr>
                <td>ID Pemesanan</td>
                <td>:</td>
                <td>{{ $d->idPemesanan }}</td>
            </tr>

            <tr>
                <td>ID Mobil</td>
                <td>:</td>
                <td>{{ $d->idMobil }}</td>
            </tr>

            <tr>
                <td>Nama Pemesan</td>
                <td>:</td>
                <td>{{ $d->namaPemesan }}</td>
            </tr>

            <tr>
                <td>HP Pemesan</td>
                <td>:</td>
                <td>{{ $d->hpPemesan }}</td>
            </tr>

            <tr>
                <td>Email Pemesan</td>
                <td>:</td>
                <td>{{ $d->emailPemesan }}</td>
            </tr>
        
            <tr>
                <td>Tanggal Pemesanan</td>
                <td>:</td>
                <td>{{ $d->tanggalPemesanan }}</td>
            </tr>

            <tr>
                <td>Tanggal Selesai</td>
                <td>:</td>
                <td>{{ $d->tanggalSelesai }}</td>
            </tr>

            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>{{ $d->harga }}</td>
            </tr>
            <form action="/updatePemesanan" method="POST">
            @csrf
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                <select id="status" name="status">
                        <?php
                            if($d->status == 'LUNAS'){
                                echo "<option value=".$d->status.">".$d->status."</option>";
                                echo "<option value='PENDING'>PENDING</option>";
                            }
                            else if($d->status == "PENDING"){
                                echo "<option value=".$d->status.">".$d->status."</option>";
                                echo "<option value='LUNAS'>LUNAS</option>";
                            }
                            else{
                                echo "<option value='LUNAS'>LUNAS</option>";
                                echo "<option value='PENDING'>PENDING</option>";
                            }
                        ?>
                </select>
                    
                </td>
            </tr>
    </table>
    <input type="hidden" name="idPemesanan" value="{{ $d->idPemesanan }}">
    <center><input type="submit" value="Edit" class="btn btn-primary">
    <a href="/listpemesanan" class="btn btn-danger">Back</a></center>
    </form>
    @endforeach

        

    @endif
    
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>