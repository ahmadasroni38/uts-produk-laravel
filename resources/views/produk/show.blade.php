<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Produk</title>
</head>
<body>
    <h1>Detail Produk</h1>

    <p>ID: {{ $produk->id }}</p>
    <p>Nama: {{ $produk->nama }}</p>
    <p>Harga: {{ $produk->harga }}</p>
    <p>Stok: {{ $produk->stok }}</p>

    <p><a href="/produk">Kembali ke Daftar Produk</a></p>
</body>
</html>
