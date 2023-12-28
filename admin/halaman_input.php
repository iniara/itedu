<?php include("inc_header.php") ?>

<?php
$teacher = "";
$namayoutube = "";
$materi = "";
$error = "";
$sukses = "";

// Mendapatkan ID jika disertakan dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = "";
}

// Jika ID tidak kosong, ambil data dari database untuk diedit
if ($id != "") {
    $sql1   = "SELECT * FROM courses WHERE id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    if ($r1) {
        $teacher = $r1['teacher'];
        $namayoutube = $r1['namayoutube'];
        $materi = $r1['materi'];
    } else {
        $error = "Data tidak ditemukan";
    }
}

if (isset($_POST['simpan'])) {
    $teacher = $_POST['teacher'];
    $namayoutube = $_POST['namayoutube'];
    $materi = $_POST['materi'];

    if ($teacher == '' || $namayoutube == '') {
        $error = "Silakan masukkan semua data yakni data isi dan judul.";
    }

    if (empty($error)) {
        if ($id != "") {
            // Hapus bagian 'tgl_isi = now()' dari kueri UPDATE
            $sql1 = "UPDATE courses SET teacher = '$teacher', namayoutube = '$namayoutube', materi = '$materi' WHERE id = '$id'";
        } else {
            $sql1 = "INSERT INTO courses(teacher, namayoutube, materi) VALUES ('$teacher', '$namayoutube', '$materi')";
        }

        $q1 = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses = "Sukses memasukkan data";
            // Reset variabel setelah insert berhasil
            $teacher = "";
            $namayoutube = "";
            $materi = "";
        } else {
            $error = "Gagal memasukkan data: " . mysqli_error($koneksi);
        }
    }
}


?>

<h1>Halaman Admin Input Data</h1>
<div class="mb-3 row">
    <a href="halaman.php">
        < Kembali ke halaman admin</a>
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


<form action="" method="post">
    <div class="mb-3 row">
        <label for="teacher" class="col-sm-2 col-form-label">Teacher</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="teacher" value="<?php echo $teacher ?>" name="teacher">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="namayoutube" class="col-sm-2 col-form-label">Nama Youtube</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="namayoutube" value="<?php echo $namayoutube ?>" name="namayoutube">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="materi" class="col-sm-2 col-form-label">Materi</label>
        <div class="col-sm-10">
            <textarea name="materi" class="form-control" id="summernote"><?php echo $materi ?></textarea>
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