<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perpustakaan STMKG</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f8fb;
      margin: 0;
      padding: 0;
    }
    header {
      background: #002366;
      color: #fff;
      padding: 20px 0;
      text-align: center;
      font-size: 2em;
      font-weight: bold;
    }
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80vh;
      gap: 40px;
    }
    .menu-box {
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
      padding: 40px 60px;
      text-align: center;
      font-size: 1.5em;
      cursor: pointer;
      transition: box-shadow 0.2s;
    }
    .menu-box:hover {
      box-shadow: 0 4px 16px rgba(0,0,0,0.15);
    }
  </style>
</head>
<body>
  <header>
    Perpustakaan STMKG
  </header>
  <div class="container">
    <div class="menu-box" onclick="window.location.href='/profil-pengguna'">
      Profil Pengguna
    </div>
    <div class="menu-box" onclick="window.location.href='/katalog-buku'">
      Katalog Buku
    </div>
  </div>
</body>
</html>