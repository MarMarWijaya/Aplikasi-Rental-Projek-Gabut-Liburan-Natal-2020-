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
<center><h1>Manajemen Data Mobil</h1></center>
<br>
<div class="container">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Save
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/savemobil" method='POST'>
            @csrf
                <table>
                    <tr>
                        <td>Merk</td>
                        <td>:</td>
                        <td><input type='text' name='merk'></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type='text' name='nama'></td>
                    </tr>
                    <tr>
                        <td>Plat Nomor</td>
                        <td>:</td>
                        <td><input type='text' name='plat'></td>
                    </tr>
                    <tr>
                        <td>Harga Sewa Per 6 jam</td>
                        <td>:</td>
                        <td><input type='number' name='harga'></td>
                    </tr>
                </table>
            
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Add">
        </div>
        </form>
        </div>
    </div>
    </div>
    <br>
    <br>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <td>ID</td>
                <td>Merk</td>
                <td>Nama</td>
                <td>Plat Nomor</td>
                <td>Harga Sewa per 6 jam</td>
                <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
        @foreach($allMobil as $aM)
            <tr>
                <td>{{ $aM->idMobil }}</td>
                <td>{{ $aM->merkMobil }}</td>
                <td>{{ $aM->namaMobil }}</td>
                <td>{{ $aM->platNomor }}</td>
                <td>{{ $aM->harga_6_jam }}</td>
                <td><a href="/listmobil/{{$aM->idMobil}}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSw6QedTNi-tUchlqiuTsPuDL5QDN-40nVbxg&usqp=CAU" width="20px"></a></td>
                <td><a href="/hapusMobil/{{$aM->idMobil}}"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAilBMVEX/AAD/////oKD/MzP/CQn//Pz/6en/wMD/urr/tbX/BAT/RUX/rKz/YWH/QUH/ior/8fH/pqb/qqr/9fX/3d3/1dX/eHj/Z2f/cXH/Gxv/8/P/sbH/zMz/FRX/gYH/mpr/lZX/KCj/UlL/yMj/Ojr/TU3/JCT/a2v/RET/hob/XFz/4eH/WFj/Ly/KNXz8AAAEx0lEQVR4nO3d21riMBQF4BRoFTkVSpGTgFLFEXn/1xsOMwgNO0mbNklxres9mfxaW5qEbzOvkPhxu1ZsBvOomKmxAsaIHjusjLzXwgJmV4Bw+VGK75iFvlFbGJfoO2RmW7gs17fPxrcqHJUOZKyrR9QTmgDuifaENSNAxp5tCWNDQMYGloSJMSHTeGhoCGfmgGxsRfhkUKjxS8wvXJsEspUF4diosG5B+GpUyIbGhUOzQPZoXDg3LOwZF7YNC3M/Lyoj3Ny9sAMhhBBmFja6rSz5nFRM2BtOfc/PkiioCT8luSUc5VxZ6VdF2Mw7puijoEvCdt4hPRHRIaHG6/g+gwoINdfhu84L9X6F9OqPO8KHvAP+S+i8MMg74HlGrgvzjnfO590LiVsNhGQgJANh7kCYNRCSgTB3IMwaCMncv7BZlrB1e9zcJ06IGT0u6qwhDiGU/Ct5iHElAz9Nxu3bxzVvCvtGDyEUlz9TNWFIXCcVyMdcRRjYnqZW+M1wThjKNhAcTywVbmxPUTOv6R2FtNDcabyy0pcIn21PUD9ioW97egVkLhSaPaxWTvpCoem96zIiFor2KKuS3y6k3hiqFLHQ9InDMtIWCr0X2/PTTyAWrmzPTzvvnlhIbVBWJ+kXKO6TN3lUoCLhdtn590Mz32UqK/zXwG6845s9hF9sEv401q11mupeqKMbmpsrUWGvii/6jc32FoZYTfTjWe9fFLBvo97iS2kWh8qO0jP3WEkuLf7k/zT7c+KoknwFty77P5anR2zYls68d5pE1JdWrk5jTpvSSun8tYXJz0cIX/x7rF9UipcSdsqVBoStq4Vm0ZPm+j4uqkyuxlzYFb6kLn7q3B3jTvTRlY3UB8t3q8L011fppbp0Jf0WU1OuNCHkqqkdgQn3KKb+aBtc5bdFIf+EpRZ61Cv5bTTha3nJQv7AM3WZptdp6YuPH3NrUcgfJqX2dfjT7dS8+b0V4SKuw8KA2KSEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEUElItKu6HyHVo8QtId9bhWqZvOQqqX4t6VZBnje3KPziqldEJd8fZ0lUprtsel7NopBN09WvVCXX9y2hKgPlMU0IF6liuut1uh0S3eJIvdKEMNXXlLo/HrK+rhSMeX3/CsTt80oXsviiNCSvvHRlJBz18scWUl3AjAnZ7FwpvOexy9Zrc0nbyJ97dCxrgGhAyJJZGHl++CBsj3bMrnmsXL9JK5PBqbIjrTQhPEy9Jbw+y6w0JLQYCCH8FcKdbYM4BQjlt3arKUDodq/1SQFC6i3HjfBvZdmFdANcF8K/WWcXRkqNwm1lWIDQ6T/EhGsenEfo8mXKLxTlEYp7KlvNJJLPXkUoboxtM3x35HxCr2dbQqSlMnklIdlP3HK49bv8wtDJj9+xfOLKQieJakBVoRe5dqG+bBVnriqUrK0bz1j+qM8s9IKxbdY534pXaEah521XXdu2fXaLDL6Mwn2m60HNZvoPgfL1ecpfsDef7iumWj0AAAAASUVORK5CYII=" width="20px"></a></td>
            </tr>
        @endforeach
        <tbody>
    </table>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>