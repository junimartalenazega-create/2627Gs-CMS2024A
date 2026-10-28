# Tema Saya

## 1. Nama Tema

**Tema Saya** adalah tema WordPress sederhana, responsif, dan ringan yang dirancang untuk digunakan pada blog atau situs pribadi.

Informasi tema:
- **Nama:** Tema Saya
- **Versi:** 1.0.0
- **Text Domain:** tema-saya
- **Lisensi:** GNU General Public License v2 or later
- **Minimum WordPress:** 6.0
- **Minimum PHP:** 7.4

## 2. Deskripsi

Tema Saya merupakan tema WordPress dengan tampilan bersih dan minimalis. Tema menggunakan warna dasar putih dan abu-abu dengan aksen biru sehingga cocok untuk blog, situs pribadi, maupun kebutuhan pembelajaran atau proyek sederhana.

Tema ini dibuat agar dapat menampilkan konten WordPress dengan struktur yang rapi, mendukung gambar unggulan, menu navigasi, sidebar, komentar, pencarian, arsip, dan tampilan yang menyesuaikan ukuran layar.

## 3. Fitur

- **Desain responsif** untuk desktop dan perangkat mobile.
- **Header sticky** sehingga bagian navigasi tetap terlihat saat halaman digulir.
- **Menu navigasi utama dan footer** yang dapat diatur melalui WordPress.
- **Menu mobile** dengan tombol untuk membuka dan menutup navigasi.
- **Custom Logo** melalui fitur bawaan WordPress.
- **Featured Image / gambar unggulan** pada artikel.
- **Sidebar dan widget** untuk menampilkan widget WordPress.
- **Dukungan komentar** termasuk komentar bertingkat.
- **Pencarian WordPress** untuk mencari konten.
- **Pagination** untuk navigasi antarhalaman artikel.
- **Metadata artikel** berupa tanggal, penulis, dan kategori.
- **Tag artikel** pada halaman posting.
- **Dukungan HTML5** untuk beberapa komponen WordPress.
- **Dukungan Gutenberg / Block Editor** melalui block styles, align-wide, responsive embeds, dan editor styles.
- **Dukungan terjemahan** menggunakan text domain `tema-saya`.
- **Skip link dan elemen aksesibilitas** untuk membantu navigasi keyboard dan screen reader.
- **Tampilan ringan** tanpa ketergantungan pada framework CSS eksternal.

Fitur-fitur tersebut didukung oleh pengaturan tema pada `functions.php`, seperti custom logo, post thumbnails, menu, widget, HTML5, dan dukungan editor blok.

## 4. Teknologi yang Digunakan

Tema ini menggunakan teknologi berikut:

- **WordPress** sebagai Content Management System (CMS).
- **PHP** untuk membuat template dan fungsi tema.
- **CSS3** untuk mengatur tampilan, layout, responsivitas, dan komponen antarmuka.
- **JavaScript** untuk interaksi menu mobile.
- **HTML5** untuk struktur halaman.
- **WordPress Theme API** untuk mengaktifkan fitur tema, menu, widget, dan aset.

File utama yang digunakan:

```text
tema-saya/
├── style.css
├── functions.php
└── index.php
```

### `style.css`

Berisi informasi identitas tema dan seluruh aturan tampilan, termasuk layout, header, navigasi, artikel, sidebar, formulir, komentar, pagination, dan footer.

### `functions.php`

Berisi fungsi dan konfigurasi tema, seperti:
- Pengaturan dasar tema.
- Dukungan title tag.
- Featured image.
- Custom logo.
- Menu navigasi.
- Widget sidebar.
- Enqueue stylesheet.
- JavaScript menu mobile.
- Dukungan komentar bertingkat.
- Pengaturan panjang excerpt.

### `index.php`

Merupakan template utama/fallback tema yang menangani:
- Header dan branding situs.
- Navigasi utama.
- Daftar artikel.
- Halaman artikel tunggal.
- Featured image.
- Excerpt dan tombol "Baca selengkapnya".
- Metadata artikel.
- Sidebar.
- Pagination.
- Komentar.
- Footer.

## 5. Petunjuk Instalasi

### A. Instalasi melalui folder tema

1. Pastikan WordPress sudah terpasang dan dapat dijalankan.
2. Masuk ke folder instalasi WordPress.
3. Buka folder:

```text
wp-content/themes/
```

4. Buat folder baru dengan nama:

```text
tema-saya
```

5. Masukkan file tema ke dalam folder tersebut:

```text
tema-saya/
├── style.css
├── functions.php
└── index.php
```

6. Buka halaman **Dashboard WordPress**.
7. Pilih **Appearance / Tampilan → Themes / Tema**.
8. Cari tema **Tema Saya**.
9. Klik **Activate / Aktifkan**.

### B. Instalasi menggunakan file ZIP

Jika tema sudah dikemas menjadi ZIP:

1. Buka **Dashboard WordPress**.
2. Pilih **Tampilan → Tema**.
3. Klik **Tambah Tema Baru**.
4. Pilih **Unggah Tema**.
5. Pilih file `.zip` tema.
6. Klik **Instal Sekarang**.
7. Setelah proses instalasi selesai, klik **Aktifkan**.

## 6. Konfigurasi Setelah Instalasi

Setelah tema aktif, beberapa pengaturan dapat dilakukan melalui dashboard WordPress.

### Logo

Untuk memasang logo:
1. Buka **Tampilan → Sesuaikan** jika Customizer tersedia pada instalasi WordPress.
2. Cari pengaturan **Identitas Situs**.
3. Tambahkan logo menggunakan fitur **Custom Logo**.

### Menu Utama

Tema menyediakan lokasi menu:
- **Menu Utama**
- **Menu Footer**

Menu dapat diatur melalui bagian pengaturan menu WordPress yang tersedia pada versi WordPress yang digunakan.

### Sidebar

Tema menyediakan satu area widget bernama **Sidebar Utama**. Widget yang ditambahkan ke area tersebut akan ditampilkan pada bagian sidebar ketika sidebar aktif.

## 7. Struktur Tampilan

Secara umum, halaman tema memiliki struktur:

```text
Header
├── Logo / Nama Situs
├── Deskripsi Situs
└── Menu Navigasi

Konten Utama
├── Artikel / Halaman
├── Featured Image
├── Judul
├── Metadata
├── Isi / Excerpt
└── Pagination

Sidebar
└── Widget

Footer
├── Menu Footer
└── Copyright
```

Pada layar dengan lebar yang lebih besar, area konten menggunakan layout utama dan sidebar. Pada perangkat dengan layar kecil, layout menyesuaikan agar tetap nyaman digunakan.

## 8. Catatan

Tema menggunakan `Tema Saya` sebagai nama tema dan `tema-saya` sebagai text domain. Jika tema akan digunakan sebagai proyek final dengan nama lain, identitas tema pada `style.css` dan fungsi PHP yang menggunakan prefix `tema_saya` sebaiknya disesuaikan secara konsisten.

---

**Tema Saya v1.0.0**  
Tema WordPress sederhana, responsif, dan ringan.
