<?php require 'function.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOYOLA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logoUKMK.png" sizes="16x16" type="image/png">

</head>

<body>
    <div class="container fluid">
        <div class="left-panel">
            <div class="logo-row">
                <img src="logounmer.png" alt="Logo Universitas Merdeka">
                <img src="logoUKMK.png" alt="Logo Unit Kegiatan">
            </div>
            <h1>SIMPAN LOYOLA</h1>
            <p>Sistem Informasi Manajemen Pendaftaran Anggota <br>kegiatan Mahasiswa Katolik St. Ignatius Loyola<br>Universitas Merdeka Malang</p>

            <form>
                <form class="login-container" action="proses_login.php" method="POST">
                    <input type="text" placeholder="Username" required style="background: transparent; border: none; border-bottom: 2px solid white; color: white; font-size: 16px; margin-bottom: 20px; padding: 10px;">
                    <div class="password-container">
                        <input type="password" placeholder="Password" required>
                        <span class="toggle-visibility">👁</span>
                    </div>
                    <div class="options">
                        <label><input type="checkbox"> Remember</label>
                        <a href="#" style="color: white;">Forgot Password?</a>
                    </div>
                    <button type="login" formaction="dashboard.php">Log In</button>
                </form>
        </div>
        <div class="right-panel"></div>
    </div>

    <script>
        // Toggle password visibility
        const toggle = document.querySelector('.toggle-visibility');
        const password = document.querySelector('input[type="password"]');

        toggle.addEventListener('click', () => {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
        });
    </script>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>
</head>

<body></body>

</html>