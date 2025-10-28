<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tentang Kami</title>
  <style>
    body { font-family: Poppins, sans-serif; background: #f5f7fa; margin: 0; }
    header, footer { background: #1e3a8a; color: white; text-align: center; padding: 20px; }
    nav { background: #2563eb; display: flex; justify-content: center; gap: 25px; padding: 10px; }
    nav a { color: white; text-decoration: none; }
    nav a:hover { color: #a5b4fc; }
    main { padding: 60px; text-align: center; }
    .about-card { background: white; border-radius: 10px; padding: 40px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); width: 70%; margin: auto; }
  </style>
</head>
<body>
  <header><h1>Tentang Kami</h1></header>

  <nav>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('produk') }}">Produk</a>
    <a href="{{ route('tentang') }}">Tentang</a>
    <a href="{{ route('kontak') }}">Kontak</a>
    <a href="{{ route('faq') }}">FAQ</a>
  </nav>

  <main>
    <div class="about-card">
      <h2>Siapa Kami?</h2>
      <p>Kami adalah tim pengembang Laravel yang berfokus pada kemudahan dan kualitas.</p>
    </div>
  </main>

  <footer>© 2025 Projek Laravel</footer>
</body>
</html>
