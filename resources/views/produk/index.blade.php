<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>

    <p><a href="/produk/create">+ Tambah Produk</a></p>

    <table border="1" cellpadding="6">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        {{-- Soal 6 (praktik): lengkapi perulangan di bawah ini
             agar setiap baris $produk ditampilkan menjadi 1 baris tabel.
             Tampilkan: id, nama, harga, stok, dan link detail/edit. --}}

        {{-- @foreach ($produk as $item)
            <tr>
                ...
            </tr>
        @endforeach --}}

    </table>
</body>
</html>
