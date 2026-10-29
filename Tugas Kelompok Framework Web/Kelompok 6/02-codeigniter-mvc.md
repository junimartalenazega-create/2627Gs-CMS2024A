# CodeIgniter 4 dan Konsep MVC

## 1. Pengenalan CodeIgniter 4

CodeIgniter 4 adalah framework PHP yang digunakan untuk membangun aplikasi web secara terstruktur, sederhana, dan efisien. Framework ini menyediakan berbagai fitur yang membantu pengembang dalam membuat aplikasi web, seperti pengelolaan URL, koneksi database, validasi formulir, dan pengolahan permintaan pengguna. CodeIgniter 4 menggunakan pola arsitektur Model-View-Controller (MVC) untuk memisahkan logika aplikasi, pengolahan data, dan tampilan antarmuka. Dengan pemisahan tersebut, kode program menjadi lebih rapi, mudah dipahami, serta lebih mudah dikembangkan dan dipelihara. 
Tujuan penggunaan CodeIgniter 4:
1. Mempermudah proses pengembangan aplikasi web.
2. Membuat struktur kode program lebih terorganisasi.
3. Memisahkan tampilan, logika, dan pengolahan data.
4. Mempermudah pengelolaan database.
5. Mempercepat pembuatan aplikasi web berbasis PHP.
   
## 2. Konsep Model-View-Controller (MVC)
Model-View-Controller (MVC) merupakan pola arsitektur perangkat lunak yang membagi aplikasi menjadi tiga komponen utama, yaitu Model, View, dan Controller. Ketiga komponen tersebut memiliki tugas yang berbeda, tetapi saling berhubungan dalam menjalankan aplikasi.
A. Model
   Model bertugas mengelola data dan berhubungan dengan database. Komponen ini digunakan untuk melakukan operasi seperti mengambil,          menambahkan, mengubah, dan menghapus data.
   Contoh: Model mahasiswa digunakan untuk mengambil dan menyimpan data mahasiswa ke dalam database.
B. View
   View bertugas menampilkan informasi kepada pengguna melalui antarmuka aplikasi. View biasanya berisi kode HTML, CSS, dan sedikit kode     PHP untuk menampilkan data yang dikirimkan oleh Controller.
   Contoh: Halaman yang menampilkan daftar mahasiswa, formulir pendaftaran, atau halaman login.
C. Controller
   Controller bertugas menerima permintaan pengguna, memproses permintaan tersebut, memanggil Model jika diperlukan, dan menentukan View     yang akan ditampilkan.
   Contoh: Controller mahasiswa menerima permintaan untuk melihat daftar mahasiswa, mengambil data melalui Model, kemudian mengirimkan       data tersebut ke View.

## 3. Routing dan Alur Permintaan
Routing adalah mekanisme dalam CodeIgniter 4 yang digunakan untuk memetakan URL ke Controller dan metode tertentu. Routing diatur dalam file app/Config/Routes.php. Ketika pengguna mengakses URL melalui browser, sistem akan mencocokkan URL tersebut dengan rute yang telah ditentukan, kemudian menjalankan Controller yang sesuai.

Contoh konfigurasi routing:
PHP
$routes->get('/', 'Home::index');
$routes->get('/mahasiswa', 'Mahasiswa::index');

Penjelasan:
- URL / akan diarahkan ke metode index() pada Controller Home.
- URL /mahasiswa akan diarahkan ke metode index() pada Controller Mahasiswa.
  
Alur permintaan:
1. Pengguna memasukkan URL pada browser.
2. CodeIgniter 4 menerima permintaan dan memeriksa konfigurasi routing.
3. Routing menentukan Controller dan metode yang sesuai.
4. Controller memproses permintaan dan memanggil Model jika diperlukan.
5. Controller mengirimkan hasil ke View untuk ditampilkan.
6. Browser menampilkan halaman kepada pengguna.
routing berfungsi sebagai penghubung antara URL yang diakses pengguna dan proses yang dijalankan oleh Controller.

## 4. Struktur Dasar Aplikasi

Struktur aplikasi CodeIgniter 4 terdiri dari beberapa folder dan file yang memiliki fungsi masing-masing untuk mendukung pengembangan aplikasi web. Struktur ini membantu pengembang mengatur kode program agar lebih rapi dan mudah dipelihara.

 Ini contoh folder dan file utama yang relevan dalam CodeIgniter 4:
nama-aplikasi/
├── app/
│   ├── Config/
│   │   └── Routes.php
│   ├── Controllers/
│   ├── Models/
│   ├── Views/
│   └── Database/
├── public/
│   └── index.php
├── writable/
├── tests/
├── vendor/
├── .env
├── composer.json
└── spark
Penjelasan folder dan file utama yang relavan
1. app/: Folder utama yang berisi kode program aplikasi, termasuk Controller, Model, View, dan konfigurasi.
2. app/Config/: Berisi file konfigurasi aplikasi, seperti pengaturan routing, database, dan konfigurasi lainnya.
3. app/Config/Routes.php: Digunakan untuk menentukan pemetaan URL ke Controller dan metode yang akan dijalankan.
4. app/Controllers/: Berisi Controller yang bertugas menerima permintaan pengguna, menjalankan logika aplikasi, dan mengatur tampilan        yang akan ditampilkan.
5. app/Models/: Berisi Model yang digunakan untuk mengelola data dan berinteraksi dengan database.
6. app/Views/: Berisi file tampilan aplikasi yang biasanya menggunakan HTML, CSS, dan PHP untuk menyajikan informasi kepada pengguna.
7. app/Database/: Digunakan untuk menyimpan file terkait pengelolaan database, seperti migration dan seeder.
8. public/: Folder yang menjadi direktori publik aplikasi. Di dalamnya terdapat index.php sebagai titik masuk utama aplikasi serta file      pendukung seperti CSS, JavaScript, dan gambar.
9. writable/: Digunakan untuk menyimpan file yang perlu ditulis oleh aplikasi, seperti log, cache, dan sesi.
10. tests/: Berisi file untuk melakukan pengujian terhadap fungsi dan bagian aplikasi.
11. vendor/: Berisi pustaka dan dependensi yang dipasang melalui Composer.
12. .env: File untuk mengatur konfigurasi lingkungan aplikasi, seperti mode pengembangan dan pengaturan koneksi database.
13. composer.json: Berisi informasi proyek serta daftar dependensi yang digunakan oleh aplikasi.
14. spark: File untuk menjalankan perintah CodeIgniter melalui Command Line Interface (CLI), misalnya menjalankan server pengembangan dan     migration.

## 5. Analisis Demonstrasi Kelompok

Demonstrasi kelompok mengenai CodeIgniter 4 dilakukan untuk memahami penerapan konsep Model-View-Controller (MVC), pengaturan routing, dan proses menampilkan halaman web. Dalam demonstrasi ini, terdapat tiga file utama yang saling berhubungan, yaitu Routes.php, FrameworkDemo.php, dan framework_demo.php.

1. Routes.php
   File Routes.php terletak di direktori app/Config/Routes.php. File ini digunakan untuk mengatur routing atau pemetaan URL ke Controller    dan metode yang akan dijalankan ketika pengguna mengakses halaman aplikasi.
2. FrameworkDemo.php
   File FrameworkDemo.php merupakan Controller yang umumnya diletakkan di direktori app/Controllers/FrameworkDemo.php. Controller
   berfungsi menangani permintaan pengguna, menjalankan logika aplikasi, dan menentukan tampilan yang akan dikirimkan ke browser.
3. framework_demo.php
   File framework_demo.php merupakan View yang umumnya disimpan di direktori app/Views/framework_demo.php. View berfungsi menampilkan        antarmuka aplikasi kepada pengguna, misalnya judul halaman, teks penjelasan, dan elemen HTML lainnya. Dalam CodeIgniter 4, View           dipanggil melalui Controller menggunakan fungsi view().

## Referensi
https://www.jagoanhosting.com/tutorial/codeigniter/konsep-mvc-model-view-controller-pada-codeigniter-4
https://www.petanikode.com/codeigniter-pemula/#google_vignette
