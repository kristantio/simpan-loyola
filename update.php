<?php require 'function.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LOYOLA</title>

    <link rel="stylesheet" href="form.css" />
    <link rel="icon" href="logoUKMK.png" sizes="16x16" type="image/png" />
</head>

<body>
    <div class="container">
        <form class="form-box" action="" method="POST" style="background: rgba(255, 255, 255, 0.10);">
            <div style="display: flex; align-items: center; gap: 18px; margin-bottom: 25px;">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <img src="logounmer.png" alt="Logo Universitas Merdeka" style="height:48px;">
                    <img src="logoUKMK.png" alt="UKMK Logo" style="height:48px;">
                </div>
                <div class="logo-text" style="color: #fff; font-size: 16px; line-height: 1.4;">
                    <strong>SIM PENDATAAN ANGGOTA</strong><br />
                    UKMK St. Ignatius Loyola<br />
                    Universitas Merdeka Malang
                </div>
            </div>
            <h2 style="display: flex; align-items: center; gap: 10px;">
                <img src="https://img.icons8.com/ios-filled/100/ffffff/user.png" alt="User" style="width:28px; height:28px; vertical-align:middle;">
                Update Anggota
            </h2>

            <div class="form-group" style="display: flex; align-items: center; gap: 10px;">
                <label style="min-width: 120px;">NIM :</label>
                <input type="text" name="nim" required style="background-color: rgba(255,255,255,0.2); flex: 1;" />
            </div>

            <div class="form-group" style="display: flex; align-items: center; gap: 10px;">
                <label style="min-width: 120px;">Nama :</label>
                <input type="text" name="nama" required style="background-color: rgba(255,255,255,0.2); flex: 1;" />
            </div>

            <div class="form-group" style="display: flex; align-items: center; gap: 10px;">
                <label style="min-width: 120px;">Fakultas :</label>
                <input type="text" name="fakultas" required style="background-color: rgba(255,255,255,0.2); flex: 1;" />
            </div>

            <div class="form-group" style="display: flex; align-items: center; gap: 10px;">
                <label style="min-width: 120px;">Tempat Lahir :</label>
                <input type="text" name="tempat_lahir" required style="background-color: rgba(255,255,255,0.2); flex: 1;" />
            </div>

            <div class="form-group" style="display: flex; align-items: center; gap: 10px;">
                <label style="min-width: 120px;">Tanggal Lahir :</label>
                <input type="date" name="tanggal_lahir" required style="background-color: rgba(255,255,255,0.2); flex: 1;" />
            </div>

            <div class="form-group" style="display: flex; align-items: flex-start; gap: 10px;">
                <label style="min-width: 120px; margin-top: 4px;">Alamat Tinggal :</label>
                <textarea name="alamat" rows="2" required style="background-color: rgba(255,255,255,0.2); flex: 1;"></textarea>
            </div>

            <div class="form-group" style="display: flex; align-items: center; gap: 10px;">
                <label style="min-width: 120px;">No HP / WA :</label>
                <input type="text" name="no_hp" required style="background-color: rgba(255,255,255,0.2); flex: 1;" />
            </div>

            <div class="form-group" style="display: flex; align-items: center; gap: 10px;">
                <label style="min-width: 120px;">Jenis Kelamin :</label>
                <select name="jenis_kelamin" required style="background-color: rgba(0, 0, 0, 0.2); flex: 1;">
                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <button type="submit" id="submitBtn">Update</button>

        </form>