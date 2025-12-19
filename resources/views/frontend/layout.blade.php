<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Usaha Catering</title>
    <style>
        /* =====================
           RESET & DASAR
           ===================== */
        * {
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            font-family: 'Poppins', Arial, sans-serif;
            background: #fafafa;
            display: flex;
            flex-direction: column;
            color: #333;
        }

        /* =====================
           HEADER (MODERN)
           ===================== */
        header {
            background: #ffffff;
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        header h2 {
            margin: 0;
            font-size: 24px;
            color: #e67e22;
            font-weight: 700;
        }

        nav a {
            margin-left: 20px;
            text-decoration: none;
            font-weight: 500;
            color: #555;
            padding: 8px 14px;
            border-radius: 20px;
            transition: 0.3s;
        }

        nav a:hover {
            background: #e67e22;
            color: #fff;
        }

        /* =====================
           KONTEN
           ===================== */
        .container {
            padding: 40px;
            max-width: 1100px;
            margin-left: 40px;   /* geser ke kiri */
            margin-right: auto;
            text-align: left;
        }

        /* =====================
           CARD (BERBEDA TOTAL)
           ===================== */
        .card {
            background: #ffffff;
            border-radius: 14px;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #eee;
            transition: 0.3s ease;
        }

        .card:hover {
            border-color: #e67e22;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            transform: translateY(-4px);
        }

        /* =====================
           FOOTER
           ===================== */
        footer {
            background: #111;
            color: #aaa;
            text-align: center;
            padding: 12px;
            margin-top: 610px;
            font-size: 13px;
        }

        footer span {
            color: #e67e22;
            font-weight: 600;
        }
    </style>
</head>
<body>

<header>
    <h2>Catering</h2>
    <nav>
        <a href="/">Home</a>
        <a href="/menu">Menu</a>
        <a href="/kontak">Kontak</a>
    </nav>
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    © {{ date('Y') }} <span>Catering</span>. All Rights Reserved
</footer>

</body>
</html>
