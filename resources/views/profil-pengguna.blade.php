<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Pengguna - Perpustakaan STMKG</title>
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

    .page-header {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 20px;
      padding: 2rem;
      margin-bottom: 2rem;
      text-align: center;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .page-header h1 {
      color: #333;
      margin-bottom: 1rem;
      font-size: 2.5rem;
    }

    .page-header p {
      color: #666;
      font-size: 1.1rem;
    }

    .back-btn {
      display: inline-block;
      background: #002366;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      margin-bottom: 20px;
      transition: background 0.3s ease;
    }

    .back-btn:hover {
      background: #001a4d;
    }

    .profile-section {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 20px;
      padding: 2rem;
      margin-bottom: 2rem;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .profile-section h2 {
      color: #333;
      margin-bottom: 1.5rem;
      font-size: 1.8rem;
      border-bottom: 2px solid #667eea;
      padding-bottom: 0.5rem;
    }

    .user-info {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .info-card {
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
      padding: 1.5rem;
      border-radius: 15px;
      border-left: 4px solid #667eea;
    }

    .info-label {
      font-weight: 600;
      color: #667eea;
      margin-bottom: 0.5rem;
      font-size: 0.9rem;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .info-value {
      font-size: 1.1rem;
      color: #333;
      font-weight: 500;
    }

    .books-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 1rem;
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .books-table th {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      padding: 1rem;
      text-align: left;
      font-weight: 600;
    }

    .books-table td {
      padding: 1rem;
      border-bottom: 1px solid #eee;
      color: #333;
    }

    .books-table tr:hover {
      background: #f8f9fa;
    }

    .books-table tr:last-child td {
      border-bottom: none;
    }

    .status-badge {
      padding: 0.25rem 0.75rem;
      border-radius: 15px;
      font-size: 0.8rem;
      font-weight: 500;
      text-align: center;
      display: inline-block;
    }

    .status-active {
      background: #d4edda;
      color: #155724;
    }

    .status-completed {
      background: #d1ecf1;
      color: #0c5460;
    }

    .days-remaining {
      font-weight: 600;
      color: #dc3545;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .stat-card {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      padding: 1.5rem;
      border-radius: 15px;
      text-align: center;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .stat-number {
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 0.5rem;
    }

    .stat-label {
      font-size: 0.9rem;
      opacity: 0.9;
    }

    .empty-state {
      text-align: center;
      padding: 3rem;
      color: #666;
    }

    .empty-state-icon {
      font-size: 4rem;
      margin-bottom: 1rem;
      opacity: 0.5;
    }

    @media (max-width: 768px) {
      .nav-links {
        display: none;
      }
      
      .user-info {
        grid-template-columns: 1fr;
      }
      
      .stats-grid {
        grid-template-columns: repeat(2, 1fr);
      }
      
      .books-table {
        font-size: 0.9rem;
      }
      
      .books-table th,
      .books-table td {
        padding: 0.75rem 0.5rem;
      }
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <div class="nav-content">
      <div class="logo">📚 Perpustakaan STMKG</div>
      <ul class="nav-links">
        <li><a href="/">Dashboard</a></li>
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
    <a href="/" class="back-btn">← Kembali ke Dashboard</a>
    
    <div class="page-header">
      <h1>Profil Pengguna</h1>
      <p>Kelola informasi pribadi dan pantau aktivitas peminjaman literatur STMKG Anda</p>
    </div>

    <div class="profile-section">
      <h2>Informasi Pengguna</h2>
      <div class="user-info">
        <div class="info-card">
          <div class="info-label">Nama Lengkap</div>
          <div class="info-value" id="nama"></div>
        </div>
        <div class="info-card">
          <div class="info-label">Email</div>
          <div class="info-value" id="email"></div>
        </div>
        <div class="info-card">
          <div class="info-label">ID Anggota</div>
          <div class="info-value" id="id"></div>
        </div>
      </div>
    </div>

    <div class="stats-grid">
      <div class="stat-card">
        <div class="stat-number" id="totalDipinjam">2</div>
        <div class="stat-label">Buku Sedang Dipinjam</div>
      </div>
      <div class="stat-card">
        <div class="stat-number" id="totalRiwayat">2</div>
        <div class="stat-label">Total Riwayat Peminjaman</div>
      </div>
      <div class="stat-card">
        <div class="stat-number" id="sisaHari">5</div>
        <div class="stat-label">Hari Tersisa</div>
      </div>
      <div class="stat-card">
        <div class="stat-number" id="denda">0</div>
        <div class="stat-label">Denda Terlambat</div>
      </div>
    </div>

    <div class="profile-section">
      <h2>Buku yang Sedang Dipinjam</h2>
      <table class="books-table" id="tabel-sedang">
        <thead>
          <tr>
            <th>Judul Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Sisa Hari</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>

    <div class="profile-section">
      <h2>Riwayat Buku yang Pernah Dipinjam</h2>
      <table class="books-table" id="tabel-riwayat">
        <thead>
          <tr>
            <th>Judul Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>

  <script>
    // Data dummy pengguna
    const user = {
      nama: "Budi Santoso",
      email: "budi@email.com",
      id: "USR123456"
    };

    // Data dummy buku
    const sedangDipinjam = [
      {
        judul: "Meteorologi Dasar",
        tglPinjam: "2024-06-01",
        tglKembali: "2024-06-10"
      },
      {
        judul: "Klimatologi Tropis",
        tglPinjam: "2024-06-03",
        tglKembali: "2024-06-13"
      }
    ];

    const riwayatPinjam = [
      {
        judul: "Geofisika Terapan",
        tglPinjam: "2024-05-10",
        tglKembali: "2024-05-20"
      },
      {
        judul: "Pemodelan Cuaca",
        tglPinjam: "2024-04-15",
        tglKembali: "2024-04-25"
      }
    ];

    // Tampilkan data pengguna
    document.getElementById('nama').textContent = user.nama;
    document.getElementById('email').textContent = user.email;
    document.getElementById('id').textContent = user.id;

    // Update statistik
    document.getElementById('totalDipinjam').textContent = sedangDipinjam.length;
    document.getElementById('totalRiwayat').textContent = riwayatPinjam.length;

    // Hitung sisa hari dan denda
    let minSisaHari = Infinity;
    let totalDenda = 0;

    sedangDipinjam.forEach(buku => {
      const sisaHari = Math.ceil((new Date(buku.tglKembali) - new Date()) / (1000 * 60 * 60 * 24));
      if (sisaHari < minSisaHari) {
        minSisaHari = sisaHari;
      }
      if (sisaHari < 0) {
        totalDenda += Math.abs(sisaHari) * 1000;
      }
    });

    document.getElementById('sisaHari').textContent = minSisaHari < 0 ? 0 : minSisaHari;
    document.getElementById('denda').textContent = totalDenda;

    // Tampilkan buku sedang dipinjam
    const tabelSedang = document.getElementById('tabel-sedang').getElementsByTagName('tbody')[0];
    sedangDipinjam.forEach(buku => {
      const tr = document.createElement('tr');
      const sisaHari = Math.ceil((new Date(buku.tglKembali) - new Date()) / (1000 * 60 * 60 * 24));
      const isTerlambat = sisaHari < 0;
      
      tr.innerHTML = `
        <td><strong>${buku.judul}</strong></td>
        <td>${buku.tglPinjam}</td>
        <td>${buku.tglKembali}</td>
        <td class="${isTerlambat ? 'days-remaining' : ''}">${isTerlambat ? Math.abs(sisaHari) + ' hari terlambat' : sisaHari + ' hari'}</td>
        <td><span class="status-badge status-active">${isTerlambat ? 'Terlambat' : 'Aktif'}</span></td>
      `;
      tabelSedang.appendChild(tr);
    });

    // Tampilkan riwayat buku
    const tabelRiwayat = document.getElementById('tabel-riwayat').getElementsByTagName('tbody')[0];
    riwayatPinjam.forEach(buku => {
      const tr = document.createElement('tr');
      tr.innerHTML = `
        <td><strong>${buku.judul}</strong></td>
        <td>${buku.tglPinjam}</td>
        <td>${buku.tglKembali}</td>
        <td><span class="status-badge status-completed">Selesai</span></td>
      `;
      tabelRiwayat.appendChild(tr);
    });
  </script>
</body>
</html> 