# Soal UTS — Pemrograman Web Framework (Laravel)

> **Bentuk ujian:** Lisan + praktik langsung di komputer.
> **Materi:** Instalasi project → Routing → Controller → View (Blade) →
> Menampilkan data dari database → Form tambah & edit.
> **Repo:** project ini (`uts-produk`), dikerjakan dalam kondisi asli
> (belum dimodifikasi sebelumnya).

---

## Petunjuk

- Soal dikerjakan satu per satu, sesuai urutan yang diminta penguji.
- Setiap soal memiliki praktik singkat (± 1 menit) yang dikerjakan langsung
  di komputer, selain menjawab secara lisan.
- Baca `README.md` terlebih dahulu untuk menjalankan project ini sebelum
  ujian dimulai (install, konfigurasi `.env`, migrate, seed, serve).
- Beberapa bagian kode pada project ini sengaja belum lengkap (ditandai
  komentar `TODO`). Bagian itu akan menjadi bahan praktik pada soal-soal
  berikut.

---

## Soal 1 — Instalasi & Environment

Jelaskan apa fungsi `composer install`, apa fungsi file `.env`, dan mengapa
file `.env` tidak boleh di-commit ke Git.

**Praktik:** Tunjukkan hasil `php artisan --version` dan isi `.env` bagian
`DB_*` pada project ini.

---

## Soal 2 — Menjalankan Project Laravel

Jelaskan langkah-langkah menjalankan project Laravel ini dari awal (clone
sampai bisa diakses browser). Apa fungsi `php artisan migrate --seed`?

**Praktik:** Jalankan `php artisan serve`, lalu buka project tersebut di
browser.

---

## Soal 3 — Routing Dasar

Jelaskan apa fungsi routing pada Laravel, dan di file mana route
didefinisikan.

**Praktik:** Tambahkan satu route baru sederhana di `routes/web.php` (sesuai
instruksi/komentar yang ada pada file tersebut), lalu buktikan route
tersebut berjalan di browser.

---

## Soal 4 — Melihat Daftar Route

Jelaskan apa fungsi perintah `php artisan route:list` dan informasi apa yang
ditampilkan.

**Praktik:** Jalankan `php artisan route:list` dan tunjukkan baris route
`/produk`.

---

## Soal 5 — Controller: Menampilkan Semua Data

Jelaskan apa fungsi Controller, dan mengapa logic sebaiknya tidak ditulis
langsung di `routes/web.php`.

**Praktik:** Lengkapi method `index()` pada `ProdukController` agar halaman
`/produk` menampilkan seluruh data produk dari database.

---

## Soal 6 — Menampilkan Data di Blade

Jelaskan apa fungsi `@foreach` pada Blade, dan apa perbedaannya dengan
`foreach` PHP biasa.

**Praktik:** Lengkapi perulangan pada `resources/views/produk/index.blade.php`
agar setiap data produk ditampilkan sebagai satu baris tabel.

---

## Soal 7 — Controller & Route Parameter: Menampilkan Satu Data

Jelaskan apa fungsi route parameter seperti `{id}`, dan bagaimana Laravel
mengetahui nilai `id` yang diakses dari URL.

**Praktik:** Lengkapi method `show($id)` pada `ProdukController` agar
halaman `/produk/{id}` menampilkan detail satu produk sesuai id yang
diakses.

---

## Soal 8 — Form HTML: Atribut `name`

Jelaskan mengapa setiap `<input>` pada form HTML membutuhkan atribut `name`,
dan apa yang terjadi jika atribut tersebut tidak ada.

**Praktik:** Perbaiki form pada `resources/views/produk/create.blade.php`
agar seluruh input (termasuk Harga) memiliki atribut `name` yang benar.

---

## Soal 9 — Controller: Menyimpan Data Baru

Jelaskan apa fungsi `Request $request` pada method Controller, dan
bagaimana cara membaca data yang dikirim dari form.

**Praktik:** Lengkapi method `store()` pada `ProdukController` agar data
dari form tambah produk benar-benar tersimpan ke database.

---

## Soal 10 — Controller: Memperbarui Data

Jelaskan perbedaan antara method `PUT`/`PATCH` dengan `POST`, dan mengapa
form HTML pada `edit.blade.php` tetap menggunakan `method="POST"` meskipun
disertai `@method('PUT')`.

**Praktik:** Lengkapi method `update()` pada `ProdukController` agar data
produk yang diedit benar-benar diperbarui di database.

---

## Catatan

Soal-soal di atas saling independen. Kerjakan sesuai instruksi penguji dan
pastikan setiap perubahan kode diuji langsung melalui browser sebelum
melanjutkan ke soal berikutnya.
