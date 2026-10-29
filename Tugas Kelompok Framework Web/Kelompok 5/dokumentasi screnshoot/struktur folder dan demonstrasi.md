# Dokumentasi Struktur Folder CodeIgniter 4

## 1. Struktur Utama Proyek

Proyek eksplorasi menggunakan CodeIgniter 4 versi 4.6.5 dengan nama `eksplorasi-ci4-kelompok5`.

Beberapa folder utama yang terdapat dalam proyek adalah sebagai berikut.

| Folder/File | Fungsi |
|---|---|
| `app/` | Menyimpan kode utama aplikasi, seperti controller, model, view, dan konfigurasi. |
| `public/` | Direktori publik yang menjadi titik masuk aplikasi web. |
| `tests/` | Menyimpan berkas pengujian aplikasi. |
| `vendor/` | Menyimpan dependensi yang dipasang melalui Composer. |
| `writable/` | Menyimpan berkas yang perlu ditulis aplikasi, seperti cache dan log. |
| `composer.json` | Berisi informasi proyek dan dependensi Composer. |
| `spark` | Skrip untuk menjalankan perintah CLI CodeIgniter. |

## 2. Struktur Folder app

Folder `app` merupakan tempat utama pengembangan aplikasi.

| Folder | Fungsi |
|---|---|
| `Config/` | Menyimpan konfigurasi aplikasi, termasuk pengaturan routing melalui `Routes.php`. |
| `Controllers/` | Menangani permintaan dan mengatur alur aplikasi. |
| `Models/` | Menangani pengelolaan data dan interaksi dengan sumber data. |
| `Views/` | Menyimpan tampilan yang akan ditampilkan kepada pengguna. |
| `Database/` | Menyimpan berkas terkait database, seperti migrasi dan seeder. |
| `Filters/` | Menyediakan filter untuk permintaan atau respons aplikasi. |
| `Helpers/` | Menyimpan fungsi bantuan yang dapat digunakan kembali. |
| `Libraries/` | Menyimpan kelas atau pustaka tambahan untuk kebutuhan aplikasi. |

## 3. Penerapan dalam Demonstrasi

Dalam praktik ini, folder `Config`, `Controllers`, dan `Views` digunakan untuk membuat halaman demonstrasi.

- `app/Config/Routes.php` digunakan untuk mengatur URL `/eksplorasi`.
- `app/Controllers/Eksplorasi.php` digunakan untuk menangani permintaan dan memanggil view.
- `app/Views/eksplorasi.php` berisi HTML untuk membentuk tampilan halaman.

Demonstrasi ini menunjukkan hubungan routing, controller, dan view dalam pengembangan aplikasi menggunakan CodeIgniter 4.
