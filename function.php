<?php
$koneksi = mysqli_connect("localhost", "root", "", "loyola");

if (isset($_POST["submit"])) {
    if ($_POST["submit"] == "add") {
        add();
    }
}

function add()
{
    global $koneksi;

    $nim   = $_POST['nim'];
    $nama  = $_POST['nama'];
    $fakultas = $_POST['fakultas'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $query = "INSERT INTO anggota VALUES ('$nim', '$nama', '$fakultas', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$no_hp', '$jenis_kelamin')";

    mysqli_query($koneksi, $query);

    echo
    "<script>
    alert('Pendataan  Berhasil');
    document.location.href = 'data.php';
    </script>";
}

function edit()
{
    global $koneksi;

    $id = $_GET["id"];
    $nim   = $_POST['nim'];
    $nama  = $_POST['nama'];
    $fakultas = $_POST['fakultas'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $query  = "UPDATE anggota SET nim = '$nim', nama = '$nama', fakultas = '$fakultas', tempat lahir = '$tempat_lahir', tanggal lahir = '$tanggal_lahir', alamat = '$alamat', no hp = '$no_hp', jenis kelamin = '$jenis_kelamin' WHERE id = $id";
    mysqli_query($koneksi, $query);

    echo
    "<script>
    alert('Upadate  Berhasil');
    </script>";
}
