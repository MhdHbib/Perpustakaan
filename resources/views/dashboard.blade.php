<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Perpustakaan</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
    }

    .navbar {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      padding: 1rem 2rem;
      box-shadow: 0 2px 20px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .nav-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: bold;
      color: #333;
    }

    .nav-links {
      display: flex;
      gap: 2rem;
      list-style: none;
    }

    .nav-links a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .nav-links a:hover {
      color: #667eea;
    }

    .user-profile {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .user-avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: #667eea;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
    }

    .main-container {
      max-width: 1200px;
      margin: 2rem auto;
      padding: 0 2rem;
    }

    .welcome-section {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 20px;
      padding: 2rem;
      margin-bottom: 2rem;
      text-align: center;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .welcome-section h1 {
      color: #333;
      margin-bottom: 1rem;
      font-size: 2.5rem;
    }

    .welcome-section p {
      color: #666;
      font-size: 1.1rem;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      margin-bottom: 2rem;
    }

    .stat-card {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 15px;
      padding: 2rem;
      text-align: center;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .stat-card:hover {
      transform: translateY(-5px);
    }

    .stat-number {
      font-size: 3rem;
      font-weight: bold;
      color: #667eea;
      margin-bottom: 0.5rem;
    }

    .stat-label {
      color: #666;
      font-size: 1.1rem;
    }

    .quick-actions {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 20px;
      padding: 2rem;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .quick-actions h2 {
      color: #333;
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .actions-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1.5rem;
    }

    .action-btn {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border: none;
      padding: 1.5rem;
      border-radius: 15px;
      cursor: pointer;
      font-size: 1rem;
      font-weight: 500;
      transition: all 0.3s ease;
      text-decoration: none;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.5rem;
    }

    .action-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
    }

    .action-icon {
      font-size: 2rem;
    }

    .recent-activity {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 20px;
      padding: 2rem;
      margin-top: 2rem;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .recent-activity h2 {
      color: #333;
      margin-bottom: 1.5rem;
    }

    .activity-item {
      display: flex;
      align-items: center;
      gap: 1rem;
      padding: 1rem 0;
      border-bottom: 1px solid #eee;
    }

    .activity-item:last-child {
      border-bottom: none;
    }

    .activity-icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: #667eea;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
    }

    .activity-content h4 {
      color: #333;
      margin-bottom: 0.25rem;
    }

    .activity-content p {
      color: #666;
      font-size: 0.9rem;
    }

    @media (max-width: 768px) {
      .nav-links {
        display: none;
      }
      
      .stats-grid {
        grid-template-columns: 1fr;
      }
      
      .actions-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <div class="nav-content">
      <div class="logo">📚 Perpustakaan STMKG</div>
      <ul class="nav-links">
        <li><a href="#dashboard">Dashboard</a></li>
        <li><a href="/katalog-buku">Katalog Buku</a></li>
        <li><a href="#peminjaman">Peminjaman</a></li>
        <li><a href="#pengembalian">Pengembalian</a></li>
        <li><a href="#laporan">Laporan</a></li>
      </ul>
      <div class="user-profile">
        <div class="user-avatar">B</div>
        <a href="/profil-pengguna" style="text-decoration: none; color: #333; font-weight: 500;">Budi Santoso</a>
      </div>
    </div>
  </nav>

  <div class="main-container">
    <div class="welcome-section">
      <h1>Selamat Datang di Perpustakaan STMKG</h1>
      <p>Kelola peminjaman buku dan akses koleksi literatur meteorologi, klimatologi, dan geofisika</p>
    </div>

    <div class="stats-grid">
      <div class="stat-card">
        <div class="stat-number">2</div>
        <div class="stat-label">Buku Sedang Dipinjam</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">15</div>
        <div class="stat-label">Total Buku Dipinjam</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">0</div>
        <div class="stat-label">Denda Terlambat</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">5</div>
        <div class="stat-label">Hari Tersisa</div>
      </div>
    </div>

    <div class="quick-actions">
      <h2>Aksi Cepat</h2>
      <div class="actions-grid">
        <a href="/katalog-buku" class="action-btn">
          <div class="action-icon">🔍</div>
          <span>Cari Buku</span>
        </a>
        <a href="#pinjam" class="action-btn">
          <div class="action-icon">📖</div>
          <span>Pinjam Buku</span>
        </a>
        <a href="#kembalikan" class="action-btn">
          <div class="action-icon">📚</div>
          <span>Kembalikan</span>
        </a>
        <a href="/profil-pengguna" class="action-btn">
          <div class="action-icon">👤</div>
          <span>Profil Saya</span>
        </a>
      </div>
    </div>

    <div class="recent-activity">
      <h2>Aktivitas Terbaru</h2>
      <div class="activity-item">
        <div class="activity-icon">📖</div>
        <div class="activity-content">
          <h4>Meminjam "Klimatologi Tropis"</h4>
          <p>3 Juni 2024 - Akan dikembalikan pada 13 Juni 2024</p>
        </div>
      </div>
      <div class="activity-item">
        <div class="activity-icon">📖</div>
        <div class="activity-content">
          <h4>Meminjam "Meteorologi Dasar"</h4>
          <p>1 Juni 2024 - Akan dikembalikan pada 10 Juni 2024</p>
        </div>
      </div>
      <div class="activity-item">
        <div class="activity-icon">✅</div>
        <div class="activity-content">
          <h4>Mengembalikan "Geofisika Terapan"</h4>
          <p>20 Mei 2024 - Telah dikembalikan tepat waktu</p>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Update statistik berdasarkan data dari profil
    function updateStats() {
      const sedangDipinjam = 2; // Dari data profil
      const totalDipinjam = 4; // sedangDipinjam + riwayat
      const denda = 0;
      const sisaHari = 5; // Hari tersisa untuk buku yang paling cepat harus dikembalikan

      document.querySelector('.stat-card:nth-child(1) .stat-number').textContent = sedangDipinjam;
      document.querySelector('.stat-card:nth-child(2) .stat-number').textContent = totalDipinjam;
      document.querySelector('.stat-card:nth-child(3) .stat-number').textContent = denda;
      document.querySelector('.stat-card:nth-child(4) .stat-number').textContent = sisaHari;
    }

    // Jalankan saat halaman dimuat
    document.addEventListener('DOMContentLoaded', updateStats);
  </script>
</body>
</html> 