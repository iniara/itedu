<?php include_once("inc_header.php") ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $playlist = "REACT"; // Ganti dengan nama playlist yang sesuai

    // Masukkan data komentar beserta nilai playlist ke dalam database
    $sql = "INSERT INTO comments (name, email, comment, playlist) VALUES ('$name', '$email', '$comment', '$playlist')";

    if (mysqli_query($koneksi, $sql)) {
        // Redirect atau refresh halaman untuk menampilkan komentar yang baru ditambahkan
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!--video-->
<section class="video-tutorials">
    <h1 class="heading">Video Tutorials</h1>

    <div class="accordion">
        <div class="tutorial">
            <div class="judul">1. Instalasi</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/AYb7l6XDlPo?si=_wjZfc-jtU1CZlgE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">2. Mengenal Component</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/TK451YJLaZg?si=3mRavUmk-WocdsUu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">3. Mengenal Variabel</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/xTRb7OYU4JE?si=w1ktnkXCXoo5-N0v" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">4. State dan Props</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/BgapZ6Cqy3s?si=sNPi6v3pQCHQjjim" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">5. Map, Filter, dan Reduce</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/jgcyqcF6n9U?si=bRcWDsBVBIcflxSr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">6. Lifecycle Component</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/kRT1RiDklqc?si=9kwX3VSmHSArNjlL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">7. CRUD Desain Tampilan</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/0-PRC6m_0F4?si=Dlqiqmws8QofDHj5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">8. CRUD Creare dan Read Data</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zm_Si-2WZhk?si=dkAU9rBTECWPPmMe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">9. CRUD Update Data</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/hd3GFU0ZcoU?si=8oDI8QbPXFFKfej0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">10. CRUD Delete Data</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zpy_5HxomRw?si=TFI2WupFMiiUlB57" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!--comment-->
<section>
    <h1 class="heading">Leave a Comment</h1>
    <div class="comment-box">
        <form class="comment-form" method="post" action="proses_komentar.php">
            <input type="text" placeholder="Name" name="name" />
            <input type="email" placeholder="Email" name="email" />
            <textarea rows="10" placeholder="Add Comment" name="comment"></textarea>
            <input type="submit" value="add comment" class="inline-btn" name="Submit" />
        </form>
    </div>
</section>


<section>
    <h1 class="heading">Comments</h1>
    <div class="comment-section">

        <?php
        // Kode PHP untuk menampilkan komentar berdasarkan jenis konten (playlist) HTML dari database
        $playlist_name = "REACT"; // Ganti dengan nama playlist yang sesuai
        $sql = "SELECT * FROM comments WHERE playlist = '$playlist_name' ORDER BY id DESC";
        $result = mysqli_query($koneksi, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='single-comment'>";
                echo "<p><strong>" . $row['name'] . "</strong></p>";
                echo "<p>" . $row['email'] . "</p>";
                echo "<p>" . $row['comment'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "No comments for this playlist yet.";
        }
        ?>

    </div>
</section>
<script src="js/script.js"></script>
</body>

</html>