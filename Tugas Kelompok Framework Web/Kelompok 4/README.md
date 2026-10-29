# Eksplorasi CodeIgniter 4

## Deskripsi
Proyek ini dibuat untuk memenuhi tugas eksplorasi framework CodeIgniter 4. Eksplorasi dilakukan dengan menginstal framework, mengenali struktur folder proyek, dan membuat demonstrasi halaman web sederhana menggunakan konsep Model-View-Controller (MVC).

## Teknologi yang Digunakan
- PHP 8.2.12
- CodeIgniter 4.7.5
- Composer 2.10.3
- Visual Studio Code
- XAMPP

## Fitur dan Hasil Eksplorasi
- Instalasi framework CodeIgniter 4 menggunakan Composer.
- Pengenalan struktur folder dan file utama CodeIgniter 4.
- Pembuatan Route untuk mengakses halaman demonstrasi.
- Pembuatan Controller untuk mengatur proses pemanggilan halaman.
- Pembuatan View menggunakan HTML.
- Menjalankan aplikasi menggunakan server pengembangan CodeIgniter 4.

## Demonstrasi Program

Halaman demonstrasi dapat diakses melalui alamat:

`http://localhost:8080/demo`

Halaman tersebut menampilkan tulisan:

> Halo, saya sedang belajar CodeIgniter 4!

### 1. Route

File: `app/Config/Routes.php`

```php
$routes->get('/demo', 'Demo::index');
```

Route digunakan untuk menghubungkan alamat `/demo` dengan Controller `Demo`.

### 2. Controller

File: `app/Controllers/Demo.php`

```php
<?php

namespace App\Controllers;

class Demo extends BaseController
{
    public function index()
    {
        return view('demo');
    }
}
```

Controller berfungsi memproses permintaan halaman dan memanggil View yang akan ditampilkan.

### 3. View

File: `app/Views/demo.php`

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo CodeIgniter 4</title>
</head>
<body>
    <h1>Halo, saya sedang belajar CodeIgniter 4!</h1>
    <p>Ini adalah halaman demonstrasi sederhana.</p>
    <p>Halaman ini dibuat menggunakan konsep MVC.</p>
</body>
</html>
```

View berfungsi menampilkan antarmuka halaman web kepada pengguna.

## Cara Menjalankan Proyek

1. Pastikan PHP dan Composer sudah terpasang.
2. Buka folder proyek melalui Command Prompt.
3. Jalankan perintah berikut:

   ```bash
   composer install
   ```

4. Jalankan server pengembangan:

   ```bash
   php spark serve
   ```

   Jika perintah `php` tidak dikenali pada Windows dengan XAMPP, gunakan:

   ```bash
   C:\xampp\php\php.exe spark serve
   ```

5. Buka browser dan akses `http://localhost:8080/demo`.

## Kesimpulan

Melalui eksplorasi ini, saya mempelajari proses instalasi CodeIgniter 4, struktur dasar proyek, serta penerapan konsep MVC melalui Route, Controller, dan View. Hasil eksplorasi berupa halaman web sederhana yang berhasil dijalankan secara lokal menggunakan server pengembangan CodeIgniter 4.
