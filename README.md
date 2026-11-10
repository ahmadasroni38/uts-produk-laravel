# Project UTS - Produk

Project Laravel sederhana untuk Ujian Tengah Semester (UTS) mata kuliah
Pemrograman Web Framework.

Project ini **belum selesai**. Beberapa bagian sengaja dikosongkan (ditandai
komentar `TODO`). Soal UTS akan menguji kemampuan melengkapi bagian-bagian
tersebut secara langsung (lisan + praktik singkat).

---

## 1. Persiapan

Pastikan sudah terpasang:

```text
PHP (minimal 8.2)
Composer
MySQL (misalnya melalui Laragon/XAMPP)
```

---

## 2. Instalasi

Clone/download repo ini, lalu jalankan dari dalam foldernya:

```bash
composer install
```

Salin file environment:

```bash
cp .env.example .env
```

(Windows PowerShell: `copy .env.example .env`)

Generate application key:

```bash
php artisan key:generate
```

---

## 3. Konfigurasi Database

Buat database baru bernama:

```text
uts_produk
```

Secara default, `.env` sudah diatur untuk:

```text
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=uts_produk
DB_USERNAME=root
DB_PASSWORD=
```

Sesuaikan `DB_USERNAME` dan `DB_PASSWORD` jika konfigurasi MySQL di komputer
Anda berbeda.

---

## 4. Migration dan Seeder

Jalankan:

```bash
php artisan migrate --seed
```

Perintah ini akan membuat tabel `produks` dan mengisi 5 data produk contoh.

---

## 5. Menjalankan Project

```bash
php artisan serve
```

Buka browser ke:

```text
http://localhost:8000
```

---

## 6. Halaman yang Tersedia

| Route               | Keterangan                                   |
| ------------------- | --------------------------------------------- |
| `/`                 | Halaman utama                                 |
| `/produk`           | Daftar produk (**belum lengkap**)             |
| `/produk/{id}`      | Detail produk (**belum lengkap**)             |
| `/produk/create`    | Form tambah produk (tampil, belum tersimpan)  |
| `/produk/{id}/edit` | Form edit produk (tampil, belum tersimpan)    |

---

## 7. Catatan Penting

Beberapa bagian kode sengaja dikosongkan dengan komentar `TODO`, misalnya di:

```text
app/Http/Controllers/ProdukController.php
resources/views/produk/index.blade.php
resources/views/produk/create.blade.php
```

Form tambah dan form edit **tampil di browser**, tetapi tombol Simpan dan
Update **belum benar-benar menyimpan atau mengubah data** di database. Ini
disengaja sebagai bahan praktik.

Gunakan:

```bash
php artisan route:list
```

untuk melihat seluruh route yang tersedia pada project ini.
