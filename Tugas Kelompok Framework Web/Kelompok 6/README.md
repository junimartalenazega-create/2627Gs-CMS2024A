# Web Framework dan CodeIgniter 4

**Tugas:** Studi Literatur dan Presentasi Web Framework  
**Kelompok:** 6  
**Mata Kuliah:** Pemrograman CMS

## 1. Deskripsi

Proyek ini membahas konsep web framework, manfaat penggunaannya, perbedaan pengembangan web dengan dan tanpa framework, serta pengenalan CodeIgniter 4 sebagai framework PHP.

Luaran proyek meliputi ringkasan studi literatur, demonstrasi CodeIgniter 4, bukti eksplorasi, dan presentasi kelompok.

## 2. Tujuan Pembelajaran

- Memahami pengertian dan manfaat web framework.
- Mengidentifikasi contoh framework untuk pengembangan web.
- Memahami konsep Model-View-Controller (MVC).
- Mengenal routing, controller, view, dan model dalam CodeIgniter 4.
- Menjalankan dan menganalisis aplikasi sederhana menggunakan CodeIgniter 4.

## 3. Struktur Proyek

```text
Kelompok 6/
├── README.md
├── 01-konsep-web-framework.md
├── 02-codeigniter-mvc.md
├── 03-references-and-discussion.md
├── literature-review.md
├── presentation.pptx
├── codeigniter-demo/
└── evidence/
```

Materi tertulis dan presentasi akan ditambahkan setelah penyusunan selesai.

## 4. Demonstrasi CodeIgniter 4

Aplikasi demonstrasi menampilkan informasi mengenai web framework dan konsep MVC.

### Alur kerja

1. **Routing:** URL `/framework-demo` diarahkan ke controller.
2. **Controller:** `FrameworkDemo::index()` menangani permintaan dan memanggil view.
3. **View:** `app/Views/framework_demo.php` menghasilkan HTML yang ditampilkan kepada pengguna.

Demonstrasi ini tidak menggunakan model atau database karena hanya menampilkan informasi statis.

### Cara menjalankan aplikasi

Pastikan PHP dan Composer telah terpasang. Buka terminal pada folder `codeigniter-demo`, kemudian jalankan:

```bash
composer install
php spark serve
```

Buka URL berikut di browser:

http://localhost:8080/framework-demo

### File utama

- `app/Config/Routes.php`: konfigurasi routing.
- `app/Controllers/FrameworkDemo.php`: controller demonstrasi.
- `app/Views/framework_demo.php`: tampilan halaman.

## 5. Bukti Eksplorasi

Folder `evidence/` berisi tangkapan layar halaman demonstrasi, konfigurasi routing, dan kode controller.

## 6. Referensi Awal

- [Pemrograman Web Menggunakan CodeIgniter 4 dan Bootstrap](https://repository.nusamandiri.ac.id/repo/files/243420/download/Pemrograman-Web-Menggunakan-Codeigniter-4-dan-Bootstrap_compressed.pdf)
- [Repository mata kuliah](https://github.com/mafifeffindi/2627Gs-CMS2024A)

Referensi tambahan akan dicantumkan dalam dokumen studi literatur.

## 7. Kontribusi Kelompok

Setiap anggota bertanggung jawab atas bagian yang ditugaskan dan mendokumentasikan kontribusi aktualnya melalui file serta riwayat perubahan GitHub.

## 8. Status Pengerjaan

- [x] Aplikasi CodeIgniter 4 berhasil dijalankan.
- [x] Route demonstrasi didaftarkan.
- [x] Halaman demonstrasi MVC dibuat.
- [x] Bukti tangkapan layar disiapkan.
- [x] Ringkasan studi literatur diselesaikan.
- [x] Referensi dan pertanyaan diskusi diselesaikan.
- [x] Presentasi kelompok diselesaikan.