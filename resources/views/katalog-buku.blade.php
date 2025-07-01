<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Katalog Buku - Perpustakaan STMKG</title>
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

    .search-section {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 20px;
      padding: 2rem;
      margin-bottom: 2rem;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .search-form {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .search-input {
      flex: 1;
      min-width: 300px;
      padding: 1rem;
      border: 2px solid #e0e0e0;
      border-radius: 10px;
      font-size: 1rem;
      transition: border-color 0.3s ease;
    }

    .search-input:focus {
      outline: none;
      border-color: #667eea;
    }

    .search-btn {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border: none;
      padding: 1rem 2rem;
      border-radius: 10px;
      cursor: pointer;
      font-size: 1rem;
      font-weight: 500;
      transition: transform 0.3s ease;
    }

    .search-btn:hover {
      transform: translateY(-2px);
    }

    .filters {
      display: flex;
      gap: 1rem;
      margin-top: 1rem;
      flex-wrap: wrap;
    }

    .filter-select {
      padding: 0.5rem 1rem;
      border: 1px solid #e0e0e0;
      border-radius: 5px;
      background: white;
    }

    .books-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 2rem;
    }

    .book-card {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 15px;
      padding: 1.5rem;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .book-card:hover {
      transform: translateY(-5px);
    }

    .book-cover {
      width: 100%;
      height: 200px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 3rem;
      margin-bottom: 1rem;
    }

    .book-title {
      font-size: 1.2rem;
      font-weight: bold;
      color: #333;
      margin-bottom: 0.5rem;
    }

    .book-author {
      color: #666;
      margin-bottom: 0.5rem;
    }

    .book-category {
      background: #667eea;
      color: white;
      padding: 0.25rem 0.75rem;
      border-radius: 15px;
      font-size: 0.8rem;
      display: inline-block;
      margin-bottom: 1rem;
    }

    .book-status {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1rem;
    }

    .status-available {
      color: #28a745;
      font-weight: 500;
    }

    .status-borrowed {
      color: #dc3545;
      font-weight: 500;
    }

    .borrow-btn {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border: none;
      padding: 0.75rem 1.5rem;
      border-radius: 8px;
      cursor: pointer;
      font-weight: 500;
      transition: transform 0.3s ease;
      width: 100%;
    }

    .borrow-btn:hover {
      transform: translateY(-2px);
    }

    .borrow-btn:disabled {
      background: #ccc;
      cursor: not-allowed;
      transform: none;
    }

    .back-btn {
      display: inline-block;
      background: #002366;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    .back-btn:hover {
      background: #001a4d;
    }

    @media (max-width: 768px) {
      .nav-links {
        display: none;
      }
      
      .search-form {
        flex-direction: column;
      }
      
      .search-input {
        min-width: auto;
      }
      
      .books-grid {
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
      <h1>Katalog Buku</h1>
      <p>Temukan koleksi literatur meteorologi, klimatologi, dan geofisika yang tersedia di perpustakaan STMKG</p>
    </div>

    <div class="search-section">
      <form class="search-form">
        <input type="text" class="search-input" placeholder="Cari judul buku, penulis, atau kategori..." id="searchInput">
        <button type="submit" class="search-btn">🔍 Cari</button>
      </form>
      <div class="filters">
        <select class="filter-select" id="categoryFilter">
          <option value="">Semua Kategori</option>
          <option value="Meteorologi">Meteorologi</option>
          <option value="Klimatologi">Klimatologi</option>
          <option value="Geofisika">Geofisika</option>
        </select>
        <select class="filter-select" id="statusFilter">
          <option value="">Semua Status</option>
          <option value="available">Tersedia</option>
          <option value="borrowed">Dipinjam</option>
        </select>
      </div>
    </div>

    <div class="books-grid" id="booksGrid">
      <!-- Buku akan ditampilkan di sini -->
    </div>
  </div>

  <script>
    // Data dummy buku
    const books = [
      {
        id: 1,
        title: "Meteorologi Dasar",
        author: "Dr. Ahmad Hidayat",
        category: "Meteorologi",
        status: "borrowed",
        cover: "🌤️"
      },
      {
        id: 2,
        title: "Klimatologi Tropis",
        author: "Prof. Budi Santoso",
        category: "Klimatologi",
        status: "borrowed",
        cover: "🌡️"
      },
      {
        id: 3,
        title: "Geofisika Terapan",
        author: "Dr. Siti Nurhaliza",
        category: "Geofisika",
        status: "available",
        cover: "🌍"
      },
      {
        id: 4,
        title: "Pemodelan Cuaca",
        author: "Prof. Rini Kartika",
        category: "Meteorologi",
        status: "available",
        cover: "🌦️"
      },
      {
        id: 5,
        title: "Perubahan Iklim",
        author: "Dr. Bambang Setiawan",
        category: "Klimatologi",
        status: "available",
        cover: "🌊"
      },
      {
        id: 6,
        title: "Seismologi Dasar",
        author: "Prof. Hendra Gunawan",
        category: "Geofisika",
        status: "available",
        cover: "🌋"
      },
      {
        id: 7,
        title: "Analisis Data Meteorologi",
        author: "Dr. Ratna Sari",
        category: "Meteorologi",
        status: "available",
        cover: "📊"
      },
      {
        id: 8,
        title: "Sistem Informasi Geografis",
        author: "Prof. Agus Supriyanto",
        category: "Geofisika",
        status: "available",
        cover: "🗺️"
      }
    ];

    // Fungsi untuk menampilkan buku
    function displayBooks(booksToShow = books) {
      const booksGrid = document.getElementById('booksGrid');
      booksGrid.innerHTML = '';

      booksToShow.forEach(book => {
        const bookCard = document.createElement('div');
        bookCard.className = 'book-card';
        
        bookCard.innerHTML = `
          <div class="book-cover">${book.cover}</div>
          <div class="book-title">${book.title}</div>
          <div class="book-author">Oleh: ${book.author}</div>
          <div class="book-category">${book.category}</div>
          <div class="book-status">
            <span class="${book.status === 'available' ? 'status-available' : 'status-borrowed'}">
              ${book.status === 'available' ? '✅ Tersedia' : '❌ Dipinjam'}
            </span>
          </div>
          <button class="borrow-btn" ${book.status === 'borrowed' ? 'disabled' : ''} onclick="borrowBook(${book.id})">
            ${book.status === 'available' ? 'Pinjam Buku' : 'Tidak Tersedia'}
          </button>
        `;
        
        booksGrid.appendChild(bookCard);
      });
    }

    // Fungsi untuk meminjam buku
    function borrowBook(bookId) {
      const book = books.find(b => b.id === bookId);
      if (book && book.status === 'available') {
        book.status = 'borrowed';
        displayBooks();
        alert(`Buku "${book.title}" berhasil dipinjam!`);
      }
    }

    // Fungsi pencarian dan filter
    function filterBooks() {
      const searchTerm = document.getElementById('searchInput').value.toLowerCase();
      const categoryFilter = document.getElementById('categoryFilter').value;
      const statusFilter = document.getElementById('statusFilter').value;

      const filteredBooks = books.filter(book => {
        const matchesSearch = book.title.toLowerCase().includes(searchTerm) ||
                            book.author.toLowerCase().includes(searchTerm) ||
                            book.category.toLowerCase().includes(searchTerm);
        const matchesCategory = !categoryFilter || book.category === categoryFilter;
        const matchesStatus = !statusFilter || book.status === statusFilter;

        return matchesSearch && matchesCategory && matchesStatus;
      });

      displayBooks(filteredBooks);
    }

    // Event listeners
    document.getElementById('searchInput').addEventListener('input', filterBooks);
    document.getElementById('categoryFilter').addEventListener('change', filterBooks);
    document.getElementById('statusFilter').addEventListener('change', filterBooks);

    // Tampilkan buku saat halaman dimuat
    document.addEventListener('DOMContentLoaded', () => {
      displayBooks();
    });
  </script>
</body>
</html> 