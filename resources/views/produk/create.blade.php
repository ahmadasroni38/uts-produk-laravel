<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>

    <form action="/produk" method="POST">
        @csrf

        <p>
            Nama:<br>
            <input type="text" name="nama">
        </p>

        <p>
            Harga:<br>
            {{-- Soal 8 (praktik): input di bawah ini belum memiliki
                 atribut name, sehingga data harga tidak akan terkirim.
                 Tambahkan atribut name="harga" pada input ini. --}}
            <input type="number">
        </p>

        <p>
            Stok:<br>
            <input type="number" name="stok">
        </p>

        <button type="submit">Simpan</button>
    </form>

    <p><a href="/produk">Kembali ke Daftar Produk</a></p>
</body>
</html>
