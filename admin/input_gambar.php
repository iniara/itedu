<?php include("inc_header.php") ?>
<?php
$jenis = "";
$error = "";
$sukses = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = "";
}

if ($id != "") {
    $sql1 = "SELECT * FROM picture WHERE id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $nama = $r1['jenis'];
    $foto = $r1['foto'] ?? ''; // Menggunakan null coalescing operator untuk mengatasi nilai null
}

if (isset($_POST['simpan'])) {
    $jenis = $_POST['jenis'];

    if ($_FILES['pictures']['name']) {
        $picture_name = $_FILES['pictures']['name'];
        $picture_file = $_FILES['pictures']['tmp_name'];

        $detail_file = pathinfo($picture_name);
        $foto_ekstensi = $detail_file['extension'];

        $ekstensi_yang_diperbolehkan = array("jpg", "jpeg", "png", "gif");
        if (!in_array($foto_ekstensi, $ekstensi_yang_diperbolehkan)) {
            $error = "Ekstensi yang diperbolehkan adalah jpg, jpeg, png dan gif";
        }
    }

    if (empty($error)) {
        if ($picture_name) {
            $direktori = "../gambar";

            @unlink($direktori . "/$foto"); // Menghapus data

            $picture_name = "teacher_" . time() . "_" . $picture_name;
            move_uploaded_file($picture_file, $direktori . "/" . $picture_name);

            $foto = $picture_name;
        } else {
            $picture_name = $foto; // Memasukkan data dari data yang sebelumnya ada
        }

        if ($id != "") {
            $sql1 = "UPDATE picture SET jenis = '$jenis', foto='$foto', tgl_isi=NOW() WHERE id = '$id'";
        } else {
            $sql1 = "INSERT INTO picture(jenis, pictures) VALUES ('$jenis','$foto')";
        }

        $q1 = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses = "Sukses menginput data";
        } else {
            $error = "Gagal menginput data";
        }
    }
}
?>
<h1>Halaman Admin Input Data Gambar</h1>
<div class="mb-3 row">
    <a href="gambar.php">
        << Kembali ke halaman admin gambar</a>
</div>
<?php
if ($error) {
?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
    </div>
<?php
}
?>
<?php
if ($sukses) {
?>
    <div class="alert alert-primary" role="alert">
        <?php echo $sukses ?>
    </div>
<?php
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3 row">
        <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="jenis" value="<?php echo $jenis ?>" name="jenis">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="pictures" class="col-sm-2 col-form-label">Picture</label>
        <div class="col-sm-10">
            <input type="file" name="pictures" class="form-control-file" id="pictures">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
        </div>
    </div>
</form>
<?php include("inc_footer.php") ?>