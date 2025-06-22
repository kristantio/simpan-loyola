<?php require 'function.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>LOYOLA</title>

  <link rel="stylesheet" href="data.css" />
  <link rel="icon" href="logoUKMK.png" sizes="16x16" type="image/png" />
</head>

<body>
  <div class="container" style="max-width: 1200px;"></div>
  <form class="form-box" style="background: rgba(255, 255, 255, 0.10) ;">
    <div style="display: flex; align-items: center; justify-content: center; gap: 18px; margin-bottom: 25px;">
      <img src="logounmer.png" alt="Logo Universitas Merdeka" style="height:48px;">
      <div class="logo-text" style="color: #fff; font-size: 16px; line-height: 1.4; text-align: center; min-width: 220px;">
        <strong>SIM PENDATAAN ANGGOTA</strong><br />
        UKMK St. Ignatius Loyola<br />
        Universitas Merdeka Malang
      </div>
      <img src="logoUKMK.png" alt="UKMK Logo" style="height:48px;">
    </div>
    <div class="d-flex justify-content-center mb-3">
      <div class="input-group" style="padding:8px 14px; border:none; border-radius:4px;">
        <input
          type="text"
          id="searchInput"
          class="form-control"
          placeholder="Cari nama, NIM, atau fakultas..."
          onkeyup="searchTable()" />
        <button type="submit" style="padding:8px 14px; border:none; border-radius:4px; background:#0050b3; color:#fff; cursor:pointer;">Cari</button>
      </div>

    </div>
    <script>
      function searchTable() {
        const input = document.getElementById('searchInput').value.toLowerCase();
        const table = document.querySelector('table tbody');
        const rows = table.getElementsByTagName('tr');
        for (let i = 0; i < rows.length; i++) {
          let rowText = rows[i].textContent.toLowerCase();
          rows[i].style.display = rowText.includes(input) ? '' : 'none';
        }
      }
    </script>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">NIM</th>
          <th scope="col">Nama</th>
          <th scope="col">Fakultas</th>
          <th scope="col">Tempat Lahir</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Alamat Tinggal</th>
          <th scope="col">No hp/wa</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $loyola = mysqli_query($koneksi, "SELECT * FROM anggota");
        $i = 1;

        foreach ($loyola as $row) :
        ?>
          <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["nim"]; ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["fakultas"]; ?></td>
            <td><?php echo $row["tempat_lahir"]; ?></td>
            <td><?php echo $row["tanggal_lahir"]; ?></td>
            <td><?php echo $row["alamat_tinggal"]; ?></td>
            <td><?php echo $row["no_hp"]; ?></td>
            <td><?php echo $row["jenis_kelamin"]; ?></td>
            <td>
              <a href="update.php" id=<?php echo $row["id"]; ?>" </a>Update</a>


            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <div style="display: center; justify-content: flex-end; margin-top: 24px;">
      <a class="btn-logout" style="padding: 10px 15px; border:none; border-radius:4px; background:rgba(250, 0, 0, 0.4); color:#ffffff; cursor:pointer;" href="index.php">Logout</a>
    </div>

  </form>

</body>

</html>