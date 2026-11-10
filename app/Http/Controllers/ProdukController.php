<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Soal UTS no. 5: lengkapi method ini agar menampilkan
     * SEMUA data produk ke view 'produk.index'.
     */
    public function index()
    {
        // TODO (Soal 5): ambil semua data produk dari database,
        // lalu kirim ke view 'produk.index' dengan nama variabel $produk.
    }

    /**
     * Soal UTS no. 7: lengkapi method ini agar menampilkan
     * SATU produk berdasarkan $id ke view 'produk.show'.
     */
    public function show($id)
    {
        // TODO (Soal 7): cari 1 data produk berdasarkan $id,
        // lalu kirim ke view 'produk.show' dengan nama variabel $produk.
    }

    /**
     * Menampilkan form tambah produk.
     * Sudah berfungsi menampilkan form (lihat Soal 8 untuk perbaikan view-nya).
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Soal UTS no. 9: lengkapi method ini agar data dari form
     * benar-benar tersimpan ke database.
     */
    public function store(Request $request)
    {
        // TODO (Soal 9): simpan data baru (nama, harga, stok)
        // dari $request ke tabel produks.

        return redirect('/produk');
    }

    /**
     * Menampilkan form edit produk berdasarkan $id.
     * Sudah berfungsi menampilkan form.
     */
    public function edit($id)
    {
        $produk = Produk::find($id);

        return view('produk.edit', ['produk' => $produk]);
    }

    /**
     * Soal UTS no. 10: lengkapi method ini agar data produk
     * dengan $id tersebut benar-benar diperbarui di database.
     */
    public function update(Request $request, $id)
    {
        // TODO (Soal 10): ambil data produk berdasarkan $id,
        // lalu perbarui nama, harga, dan stok sesuai input form.

        return redirect('/produk');
    }

    /**
     * Bonus (tidak wajib UTS): hapus data produk.
     */
    public function destroy($id)
    {
        // TODO (Bonus): hapus data produk berdasarkan $id.

        return redirect('/produk');
    }
}
