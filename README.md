# Project Lab 8 – PHP Database (CRUD Barang)

## NAMA           : Cindy Revalina Simanullang

## NIM            : 312410417

## KELAS          : TI.24 A3

## MATA KULIAH    : Pemrograman Web 1

## DOSEN PENGAMPU : 
 
## Penjelasan
Project ini adalah implementasi CRUD (Create, Read, Update, Delete) menggunakan PHP + MySQL.  
Pada project ini kamu dapat menampilkan data barang, menambah barang baru, mengedit data, menghapus data, serta menampilkan gambar dari folder `/gambar`.

---

# TUJUAN & KESIMPULAN PROJECT — Sistem Data Barang (PHP & MySQL)

---

## TUJUAN PROJECT
1. **Membuat sistem CRUD (Create, Read, Update, Delete)** yang dapat digunakan untuk mengelola data barang.
2. **Menampilkan daftar barang** dalam bentuk tabel yang rapi dan mudah dibaca.
3. **Mengelola gambar barang** agar dapat ditampilkan langsung dari folder penyimpanan.
4. **Menghubungkan PHP dengan MySQL** menggunakan koneksi database (`koneksi.php`).
5. **Membuat fitur tambah, ubah, dan hapus barang** yang berfungsi penuh.
6. **Membuat tampilan aplikasi yang konsisten** menggunakan file `style.css`.
7. **Memastikan struktur folder tertata rapi** agar aplikasi berjalan tanpa error.
8. **Meningkatkan pemahaman tentang handling image path** pada PHP + HTML.
9. **Membangun aplikasi skala kecil** yang bisa dijadikan dasar untuk aplikasi penjualan, inventaris, atau toko online.

---

## Struktur Folder Project

---

##  1. index.php
File utama untuk **menampilkan seluruh data barang** dalam bentuk tabel.  
Data yang ditampilkan:

- Gambar barang  
- Nama barang  
- Kategori  
- Harga beli  
- Harga jual  
- Stok barang  
- Tombol aksi (Ubah & Hapus)
Tabel menggunakan style warna **pink** dari `style.css`.

## Screenshot Tampilan (Masukkan Gambar Kamu)

### Halaman Index
<img width="1342" height="698" alt="image" src="https://github.com/user-attachments/assets/6a5b457c-1ae0-4b53-92dc-6965e5f0b0cc" />

---

##  2. tambah.php
Digunakan untuk **menambah data barang baru**.  
Form ini meliputi:

- Nama Barang  
- Kategori  
- Harga Beli  
- Harga Jual  
- Stok  
- Upload gambar barang  
Data akan disimpan ke tabel `data_barang`.

## Screenshot Tampilan (Masukkan Gambar Kamu)

### Halaman Tambah
<img width="1365" height="633" alt="image" src="https://github.com/user-attachments/assets/eec1ca7a-9ef4-4ab9-8f57-0c6ae5e2ce1a" />

---
---

##  3. ubah.php
Halaman untuk **mengedit data barang** berdasarkan `id_barang`.  
Fitur:

- Data lama otomatis muncul  
- Gambar dapat diganti atau tetap  
- Validasi input sederhana  

## Screenshot Tampilan (Masukkan Gambar Kamu)

### Halaman Ubah
<img width="1365" height="629" alt="image" src="https://github.com/user-attachments/assets/d8c58506-2d66-448e-936a-a5f1d0254aa1" />

---

##  4. hapus.php
Digunakan untuk **menghapus barang** dari database.  
Setelah dihapus, pengguna akan diarahkan kembali ke halaman index.

## Screenshot Tampilan (Masukkan Gambar Kamu)

### Halaman Hapus
<img width="586" height="198" alt="image" src="https://github.com/user-attachments/assets/c61c2062-b6bb-41a0-a15f-42367dda73bd" />

---

##  5. koneksi.php

File koneksi database:

```php
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "latihan1";

$conn = mysqli_connect($host, $user, $pass, $db);
?>




