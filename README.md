# ◢ SISTEM MANAJEMEN KARYAWAN - RED GEOMETRY

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
</p>

## ◼ Deskripsi Proyek
Proyek ini adalah aplikasi manajemen data karyawan yang dibangun menggunakan **Laravel Eloquent**. Aplikasi ini mengimplementasikan relasi antar tabel (Join), fitur pencarian dinamis, dan kustomisasi antarmuka dengan tema visual **Geometris Merah-Hitam**.

Tujuan proyek ini adalah untuk memenuhi tugas mata pelajaran Pemrograman Web (PW) mengenai materi **Eloquent ORM & Blade Templating**.

---

## ◼ Fitur Utama
1. **Model Relasi (Eloquent Join):** Menghubungkan Model `Karyawan` dengan Model `Departemen` menggunakan relasi `belongsTo`.
2. **Fitur Pencarian (Search):** Mencari data karyawan berdasarkan Nama atau Posisi secara real-time.
3. **Custom UI/UX:** Tampilan menggunakan Tailwind CSS dengan efek *clip-path* geometris, *animated lines*, dan skema warna gelap (Dark Mode).
4. **CRUD System:** Manajemen data operasional karyawan (Tambah, Baca, Ubah, Hapus).

---

## ◼ Hasil Pengerjaan (Preview)
Berikut adalah tampilan antarmuka aplikasi yang telah dikustomisasi:

> **Catatan:** Pastikan Anda telah memasukkan gambar screenshot di folder `public/img/screenshot.png` atau ganti link di bawah dengan link gambar Anda.

![Dashboard Karyawan](https://via.placeholder.com/800x450/1a0000/ef4444?text=Screenshot+Web+Geometri+Merah+Hitam)

---

## ◼ Teknologi yang Digunakan
- **Framework:** Laravel 11/12
- **Database:** SQLite / MySQL
- **Styling:** Tailwind CSS (Custom Geometry Patterns)
- **Language:** PHP 8.x

---

## ◼ Analisis Teknis (Perspektif Ahli)
Berdasarkan struktur kode yang dibangun, berikut adalah analisis singkatnya:

* **Eager Loading:** Menggunakan `Karyawan::with('departemen')` untuk mencegah masalah *N+1 Query*, yang secara drastis meningkatkan kecepatan pemuatan data saat aplikasi menangani ribuan baris data.
* **Encapsulation:** Logika bisnis dipisahkan antara Model (Data), View (Presentasi), dan Controller (Logika), mengikuti standar industri **MVC (Model-View-Controller)**.
* **Pro & Kontra Desain Geometris:**
    * *Pro:* Memberikan identitas visual yang kuat dan profesional (Brutalism Style).
    * *Kontra:* Penggunaan *clip-path* yang berlebihan pada perangkat lama (legacy) terkadang memberikan beban render GPU yang sedikit lebih tinggi dibanding border standar.

---

## ◼ Cara Instalasi
1. Clone repository:
   ```bash
   git clone <link-repo-anda>
