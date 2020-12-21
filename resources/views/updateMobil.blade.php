<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <style>
            .box{
                border: none;
                border-bottom: 1px solid #ababab;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @if(isset($mobil))
                @foreach($mobil as $m)
                <table cellpadding="10%">
                <form action='/updateMobil' method="POST">
                @csrf
                    <input type="hidden" name="id" value="{{ $m->idMobil }}">
                    <tr>
                        <td>Merk Mobil</td>
                        <td>:</td>
                        <td><input type="text" class="box" name="merk" value="{{ $m->merkMobil }}"></td>
                    </tr>
                    <tr>
                        <td>Nama Mobil</td>
                        <td>:</td>
                        <td><input type="text" class="box" name="nama" value="{{ $m->namaMobil }}"></td>
                    </tr>
                    <tr>
                        <td>Plat Nomor</td>
                        <td>:</td>
                        <td><input type="text" class="box" name="plat" value="{{ $m->platNomor }}"></td>
                    </tr>
                    <tr>
                        <td>Harga per 6 jam</td>
                        <td>:</td>
                        <td><input type="number" class="box" name="harga" value="{{ $m->harga_6_jam }}"></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: center"><input type="submit" class="btn btn-primary" value="Edit"></td>
                    </tr>
                    </form>
                    </table>
                @endforeach
            @endif
        </div>
    </body>
<html>