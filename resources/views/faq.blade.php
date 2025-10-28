<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>FAQ</title>
  <style>
    body { font-family: Poppins, sans-serif; background: #f5f7fa; margin: 0; }
    header, footer { background: #1e3a8a; color: white; text-align: center; padding: 20px; }
    nav { background: #2563eb; display: flex; justify-content: center; gap: 25px; padding: 10px; }
    nav a { color: white; text-decoration: none; }
    nav a:hover { color: #a5b4fc; }
    main { padding: 60px; width: 70%; margin: auto; }
    .faq-item { background: white; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 20px; margin-bottom: 20px; }
    .faq-item h3 { color: #2563eb; margin-bottom: 10px; }
  </style>
</head>
<body>
  <header><h1>Pertanyaan yang Sering Diajukan</h1></header>

  <nav>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('produk') }}">Produk</a>
    <a href="{{ route('tentang') }}">Tentang</a>
    <a href="{{ route('kontak') }}">Kontak</a>
    <a href="{{ route('faq') }}">FAQ</a>
  </nav>

  <main>
    <div class="faq-item">
      <h3>Bagaimana cara menggunakan aplikasi?</h3>
      <p>Anda cukup mendaftar dan mulai menggunakan fitur-fiturnya.</p>
    </div>
    <div class="faq-item">
      <h3>Apakah gratis?</h3>
      <p>Ya, layanan dasar tersedia secara gratis untuk semua pengguna.</p>
    </div>
  </main>

  <footer>© 2025 Projek Laravel</footer>
</body>
</html>
