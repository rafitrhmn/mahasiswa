<!DOCTYPE html>
<html>
<head>
  <title>Mahasiswa Universitas Bina Insan</title>
  <style>
    /* CSS untuk styling halaman */
    body {
      font-family: sans-serif;
      background-color: #fafafa;
    }
    .nav {
      display: left;
      justify-content: space-between;
      align-items: flex;
      background-color: #008000;
      color: #fff;
      padding: 3px;
    }
    .nav a {
      color: #fff;
      text-decoration: none;
      font-size: 18px;
      margin-left: 20px;
    }
    .nav img {
      height: 50px;
      margin-right: 20px;
    }
      .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      text-align: center;
    }
    h1 {
      font-size: 36px;
      margin-bottom: 20px;
    }
    p {
      font-size: 18px;
      line-height: 1.5;
      margin-bottom: 40px;
    }
    .btn {
      display: inline-block;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      background-color: #333;
      color: #fff;
      font-size: 18px;
      text-decoration: none;
    }
  </style>
</head>
<body>
    <nav class="nav">
        <img src="logokampus.png" alt="Logo"></img>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </nav>
  <div class="container">
    <h1>Selamat Datang di Landing Page</h1>
    <p>Ini adalah contoh landing page sederhana dengan HTML, CSS, dan JavaScript.</p>
    <a href="#" class="btn">Klik disini</a>
  </div>
  <script>
    // JavaScript untuk menambahkan event pada tombol
    var btn = document.querySelector('.btn');
    btn.addEventListener('click', function() {
      alert('Tombol diklik!');
    });
  </script>
</body>
</html>


