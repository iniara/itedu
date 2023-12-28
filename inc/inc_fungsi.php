<?php
function url_dasar()
{
    //$_SERVER['SERVER_NAME'] : alamat website, misalkan websitemu.com
    // $_SERVER['SCRIPT_NAME'] : directory website, websitemu.com/blog/ $_SERVER['SCRIPT_NAME'] : blog
    $url_dasar  = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['SCRIPT_NAME']);
    return $url_dasar;
}

function ambil_gambar($id_tulisan)
{
    global $koneksi;
    $sql1 = "select * from courses where id = '$id_tulisan'";
    $q1   = mysqli_query($koneksi, $sql1);
    $r1   = mysqli_fetch_array($q1);
    $text = $r1['materi'];

    preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $text, $img);
    $gambar = $img[1]; // ../gambar/filename.jpg
    $gambar = str_replace("../gambar/", url_dasar() . "/gambar/", $gambar);
    return $gambar;
}

function ambil_namayoutube($id_tulisan)
{
    global $koneksi;
    $sql1   = "select * from courses where id = '$id_tulisan'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $text   = $r1['namayoutube'];
    return $text;
}

function ambil_teacher($id_tulisan)
{
    global $koneksi;
    $sql1   = "select * from courses where id = '$id_tulisan'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $text   = $r1['teacher'];
    return $text;
}
function ambil_materi($id_tulisan)
{
    global $koneksi;
    $sql1   = "select * from courses where id = '$id_tulisan'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $text   = $r1['materi'];
    return $text;
}

function bersihkan_judul($judul)
{
    $judul_baru     = strtolower($judul);
    $judul_baru     = preg_replace("/[^a-zA-Z0-9\s]/", "", $judul_baru);
    $judul_baru     = str_replace(" ", "-", $judul_baru);
    return $judul_baru;
}

function buat_link_halaman($id)
{
    global $koneksi;
    $sql1    = "select * from courses where id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $judul  = bersihkan_judul($r1['materi']);
    // http://localhost/website-company-profile/halaman.php/8/judul
    return url_dasar() . "/playlist-html.php/$id/$judul";
}

function link_halaman_css($id)
{
    global $koneksi;
    $sql1    = "select * from courses where id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $judul  = bersihkan_judul($r1['materi']);
    // http://localhost/website-company-profile/halaman.php/8/judul
    return url_dasar() . "/playlist-css.php/$id/$judul";
}

function link_halaman_js($id)
{
    global $koneksi;
    $sql1    = "select * from courses where id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $judul  = bersihkan_judul($r1['materi']);
    // http://localhost/website-company-profile/halaman.php/8/judul
    return url_dasar() . "/playlist-js.php/$id/$judul";
}

function link_halaman_react($id)
{
    global $koneksi;
    $sql1    = "select * from courses where id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $judul  = bersihkan_judul($r1['materi']);
    // http://localhost/website-company-profile/halaman.php/8/judul
    return url_dasar() . "/playlist-react.php/$id/$judul";
}

function link_halaman_node($id)
{
    global $koneksi;
    $sql1    = "select * from courses where id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $judul  = bersihkan_judul($r1['materi']);
    // http://localhost/website-company-profile/halaman.php/8/judul
    return url_dasar() . "/playlist-node.php/$id/$judul";
}

function teacher_foto($id)
{
    global $koneksi;
    $sql1   = "select * from profileteacher where id = '$id'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $foto   = $r1['foto'];

    if ($foto) {
        return $foto;
    } else {
        return 'default.jpg';
    }
}

function foto_materi($id)
{
    global $koneksi;
    $sql1 = "SELECT * FROM picture WHERE id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);
    return "../gambar/" . $r1['pictures'];
}
