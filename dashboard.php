<?php require 'function.php'; ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIM Pendataan Anggota</title>
    <link rel="icon" href="logoUKMK.png" sizes="16x16" type="image/png">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('bg.png') no-repeat center center fixed;
            background-size: cover;
            color: white;
            text-align: center;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.5);
            height: 100dvh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1,
        h2 {
            margin: 0;
            font-size: 20px;
            font-family: 'telegraph', sans-serif;
        }

        .subtitle {
            font-size: 15px;
            font-weight: normal;
            margin-bottom: 40px;
        }

        .category-box {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 30px 60px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            gap: 60px;
        }

        .category {
            text-align: center;
            cursor: pointer;
            color: white;
        }

        .category img {
            width: 80px;
            height: 80px;
        }

        .category span {
            display: block;
            margin-top: 10px;
            font-size: 18px;
        }

        .logout-btn {
            margin-top: 30px;
            padding: 10px 30px;
            background-color: rgba(255, 255, 255, 0.3);
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .logo-container {
            position: absolute;
            top: 60px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 0 40px;
        }

        .logo-container img {
            height: 80px;
        }
    </style>
</head>

<body>
    <div class="overlay">
        <div class="logo-container" style="justify-content: center; gap: 60px;">
            <img src="logounmer.png" alt="unmer Logo">
            <img src="logoUKMK.png" alt="UKMK Logo">
        </div>
        <h1>SELAMAT DATANG DI</h1>
        <h2>SIM PENDATAAN ANGGOTA</h2>
        <div class="subtitle">
            UKMK St. Ignatius Loyola<br>
            Universitas Merdeka Malang
        </div>

        <div class="category-box">
            <a class="category" href="form.php" style="text-decoration: none;">
                <img src="https://img.icons8.com/ios-filled/100/ffffff/user.png" alt="Pendaftaran">
                <span>Pendaftaran Anggota</span>
            </a>
            <a class="category" href="Update.php" style="text-decoration: none;">
                <img src="https://img.icons8.com/ios-filled/100/ffffff/edit-file.png" alt="Update Anggota">
                <span>Update Data Anggota</span>
            </a>
            <a class="category" href="data.php" style="text-decoration: none;">
                <img src="https://img.icons8.com/ios-filled/100/ffffff/search--v1.png" alt="Data Anggota">
                <span>Cek Data Anggota</span>
            </a>
            <a class="category" href="index.php" style="text-decoration: none;">
                <img src="https://img.icons8.com/ios-filled/100/ffffff/logout-rounded.png" alt="Logout">
                <span>logout</span>
            </a>
        </div>
</body>

</html>