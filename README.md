# Dashboard SIPUS - CodeIgniter 4

Dashboard SIPUS (Sistem Informasi Perpustakaan Sekolah) merupakan bagian dari aplikasi manajemen perpustakaan berbasis web yang dibangun menggunakan **CodeIgniter 4.7.5**, **PHP**, **MySQL**, dan **Bootstrap 5**.

Proyek ini dikembangkan sebagai media pembelajaran pemrograman web untuk siswa SMA dan pemula yang sudah memahami dasar PHP.

Dashboard berfungsi sebagai halaman utama aplikasi untuk menampilkan ringkasan data perpustakaan, seperti jumlah buku, kategori, anggota, dan transaksi peminjaman.

## 📌 Daftar Isi

- [Tentang Proyek](#tentang-proyek)
- [Fitur Dashboard](#fitur-dashboard)
- [Teknologi yang Digunakan](#teknologi-yang-digunakan)
- [Persyaratan Sistem](#persyaratan-sistem)
- [Struktur Folder](#struktur-folder)
- [Instalasi](#instalasi)
- [Konfigurasi Database](#konfigurasi-database)
- [Menjalankan Aplikasi](#menjalankan-aplikasi)
- [Routes Dashboard](#routes-dashboard)
- [Pengembangan Selanjutnya](#pengembangan-selanjutnya)
- [Tujuan Pembelajaran](#tujuan-pembelajaran)
- [Lisensi](#lisensi)

## 📖 Tentang Proyek

SIPUS adalah aplikasi Sistem Informasi Perpustakaan Sekolah yang dikembangkan secara bertahap menggunakan CodeIgniter 4.

Pada tahap Dashboard, aplikasi menampilkan informasi ringkas dari beberapa tabel database. Pengguna dapat melihat jumlah data sekaligus mengakses modul lain melalui menu yang tersedia.

Dashboard ini menggunakan konsep MVC (Model-View-Controller) yang disediakan oleh CodeIgniter 4.

## ✨ Fitur Dashboard

| No. | Fitur | Keterangan |
|---|---|---|
| 1 | Total Buku | Menampilkan jumlah seluruh data buku |
| 2 | Total Kategori | Menampilkan jumlah kategori buku |
| 3 | Total Anggota | Menampilkan jumlah anggota perpustakaan |
| 4 | Total Peminjaman | Menampilkan jumlah seluruh transaksi peminjaman |
| 5 | Akses Cepat | Navigasi menuju modul Buku, Kategori, Anggota, dan Peminjaman |

## 🛠️ Teknologi yang Digunakan

| Teknologi | Versi / Keterangan |
|---|---|
| PHP | 8.1 atau lebih baru |
| CodeIgniter | 4.7.5 |
| MySQL / MariaDB | Database |
| Bootstrap | 5 |
| HTML5 | Struktur halaman |
| CSS3 | Tampilan halaman |
| JavaScript | Pendukung interaksi antarmuka |

## 💻 Persyaratan Sistem

Sebelum menjalankan proyek, pastikan perangkat sudah memiliki:

- PHP 8.1 atau lebih baru.
- Composer.
- MySQL atau MariaDB.
- Web browser.
- Code editor, seperti Visual Studio Code.
- Ekstensi PHP yang dibutuhkan CodeIgniter 4.

## 📁 Struktur Folder

Berikut struktur folder yang digunakan untuk modul Dashboard:

```text
app/
├── Config/
│   └── Routes.php
│
├── Controllers/
│   └── Dashboard.php
│
└── Views/
    ├── dashboard/
    │   └── index.php
    │
    └── layouts/
        ├── main.php
        ├── navbar.php
        └── sidebar.php