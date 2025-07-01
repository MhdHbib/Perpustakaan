# 📚 Sistem Perpustakaan Fisik

Sistem perpustakaan fisik sederhana yang dibangun dengan HTML, CSS, dan JavaScript. Sistem ini memungkinkan pengguna untuk melihat profil, mencari buku fisik, dan mengelola peminjaman buku di perpustakaan.

## 🚀 Fitur Utama

### 1. Dashboard Utama (`dashboard.html`)
- **Statistik Peminjaman**: Menampilkan jumlah buku fisik yang sedang dipinjam, total peminjaman, denda, dan sisa hari
- **Aksi Cepat**: Tombol untuk mencari buku, meminjam, mengembalikan, dan melihat profil
- **Aktivitas Terbaru**: Riwayat aktivitas peminjaman terbaru
- **Navigasi Responsif**: Menu navigasi yang mudah digunakan

### 2. Profil Pengguna (`profil-pengguna.html`)
- **Informasi Pengguna**: Nama, email, dan ID anggota
- **Buku Sedang Dipinjam**: Daftar buku fisik yang sedang dipinjam dengan sisa hari
- **Riwayat Peminjaman**: Daftar buku fisik yang pernah dipinjam
- **Perhitungan Otomatis**: Sisa hari dihitung secara otomatis

### 3. Katalog Buku (`katalog-buku.html`)
- **Pencarian Buku**: Fitur pencarian berdasarkan judul, penulis, atau kategori
- **Filter**: Filter berdasarkan kategori dan status buku
- **Tampilan Kartu**: Buku ditampilkan dalam bentuk kartu yang menarik
- **Status Real-time**: Status ketersediaan buku fisik yang diperbarui secara real-time

## 📁 Struktur File

```
Perpus/
├── dashboard.html          # Halaman utama dashboard
├── profil-pengguna.html    # Halaman profil pengguna
├── katalog-buku.html       # Halaman katalog buku
├── README.md              # Dokumentasi ini
└── Untitled-1.html        # Halaman menu utama
```

## 🛠️ Cara Menggunakan

### 1. Memulai Aplikasi
1. Buka file `dashboard.html` di browser web
2. Atau buka file `profil-pengguna.html` untuk langsung melihat profil

### 2. Navigasi Antar Halaman
- **Dashboard**: Klik logo atau menu "Dashboard"
- **Katalog Buku**: Klik menu "Katalog Buku" atau tombol "Cari Buku"
- **Profil**: Klik nama pengguna di navbar atau tombol "Profil Saya"

### 3. Menggunakan Katalog Buku
1. Masuk ke halaman "Katalog Buku"
2. Gunakan kotak pencarian untuk mencari buku fisik
3. Gunakan filter untuk menyaring berdasarkan kategori atau status
4. Klik "Pinjam Buku" untuk meminjam buku yang tersedia

### 4. Melihat Profil
1. Klik nama pengguna di navbar
2. Lihat informasi pribadi dan statistik peminjaman
3. Periksa buku fisik yang sedang dipinjam dan riwayat peminjaman

## 🎨 Desain dan UI/UX

### Warna dan Tema
- **Primary Color**: Gradient biru-ungu (#667eea → #764ba2)
- **Background**: Gradient yang menarik dengan efek glassmorphism
- **Cards**: Kartu putih transparan dengan bayangan halus

### Responsivitas
- **Desktop**: Layout grid yang optimal
- **Tablet**: Penyesuaian grid dan navigasi
- **Mobile**: Layout single column dengan navigasi yang disederhanakan

### Animasi dan Interaksi
- **Hover Effects**: Efek hover pada kartu dan tombol
- **Transitions**: Transisi halus untuk semua interaksi
- **Loading States**: Feedback visual untuk aksi pengguna

## 📊 Data Dummy

Sistem menggunakan data dummy untuk demonstrasi:

### Pengguna
- **Nama**: Budi Santoso
- **Email**: budi@email.com
- **ID**: USR123456

### Buku Fisik yang Sedang Dipinjam
1. "Pemrograman Web Dasar" (1-10 Juni 2024)
2. "Algoritma dan Struktur Data" (3-13 Juni 2024)

### Riwayat Peminjaman
1. "Matematika Diskrit" (10-20 Mei 2024)
2. "Jaringan Komputer" (15-25 April 2024)

## 🔧 Teknologi yang Digunakan

- **HTML5**: Struktur halaman web
- **CSS3**: Styling dan animasi
  - Flexbox dan Grid untuk layout
  - CSS Variables untuk konsistensi warna
  - Media queries untuk responsivitas
- **JavaScript**: Interaktivitas dan logika
  - DOM manipulation
  - Event handling
  - Data filtering dan searching

## 🚀 Pengembangan Selanjutnya

### Fitur yang Bisa Ditambahkan
1. **Sistem Login/Register**: Autentikasi pengguna
2. **Database Integration**: Koneksi ke database MySQL/PostgreSQL
3. **Backend API**: REST API dengan PHP/Node.js
4. **Notifikasi**: Sistem notifikasi untuk pengingat pengembalian
5. **Admin Panel**: Panel admin untuk mengelola buku dan pengguna
6. **Barcode Scanner**: Sistem scan barcode untuk peminjaman cepat
7. **Rating & Review**: Sistem rating dan ulasan buku fisik

### Optimasi yang Bisa Dilakukan
1. **Performance**: Lazy loading untuk gambar dan data
2. **SEO**: Meta tags dan structured data
3. **Accessibility**: ARIA labels dan keyboard navigation
4. **PWA**: Progressive Web App features
5. **Offline Support**: Service workers untuk akses offline

## 📝 Catatan

- Sistem ini adalah prototype/demo dan menggunakan data dummy
- Untuk implementasi produksi, diperlukan backend dan database
- Semua data disimpan di localStorage browser (temporary)
- Responsivitas sudah dioptimalkan untuk berbagai ukuran layar
- Sistem ini dirancang untuk perpustakaan fisik dengan buku konvensional

## 🤝 Kontribusi

Silakan berkontribusi dengan:
1. Melaporkan bug atau masalah
2. Menyarankan fitur baru
3. Meningkatkan UI/UX
4. Menambahkan dokumentasi

---

**Dibuat dengan ❤️ untuk sistem perpustakaan fisik yang lebih baik** 