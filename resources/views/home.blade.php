<html>
<head>
</head>
<body>
<a href="">Home</a>
<a href="/pesan">Pesan</a>
<a href="">Tentang Kami</a>
@if(isset($msg))
        
        <script>
            alert("Terimakasih sudah menggunakan layanan kami, cek email Anda untuk melihat tiket Anda");
        </script>
    @endif
</body>
</html>