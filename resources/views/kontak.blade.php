<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kontak</title>
  <style>
    body { font-family: Poppins, sans-serif; background: #f5f7fa; margin: 0; }
    header, footer { background: #1e3a8a; color: white; text-align: center; padding: 20px; }
    nav { background: #2563eb; display: flex; justify-content: center; gap: 25px; padding: 10px; }
    nav a { color: white; text-decoration: none; }
    nav a:hover { color: #a5b4fc; }
    main { display: flex; justify-content: center; padding: 60px; }
    form { background: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); width: 400px; }
    input, textarea { width: 100%; padding: 10px; margin-top: 10px; border-radius: 6px; border: 1px solid #ccc; }
    button { background: #2563eb; color: white; border: none; padding: 10px 20px; margin-top: 10px; border-radius: 8px; cursor: pointer; }
    button:hover { background: #1d4ed8; }
  </style>
</head>
<body>
  <header><h1>Kontak Kami</h1></header>

  <nav>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('produk') }}">Produk</a>
    <a href="{{ route('tentang') }}">Tentang</a>
    <a href="{{ route('kontak') }}">Kontak</a>
    <a href="{{ route('faq') }}">FAQ</a>
  </nav>

  <main>
    <form>
      <label>Nama</label>
      <input type="text" placeholder="Masukkan nama Anda">
      <label>Pesan</label>
      <textarea rows="4" placeholder="Tulis pesan di sini..."></textarea>
      <button>Kirim</button>
    </form>
  </main>

  <footer>© 2025 Projek Laravel</footer>
</body>
</html>
