<?php include_once("inc_header.php") ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $playlist = "HTML"; // Ganti dengan nama playlist yang sesuai

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

<section class="video-tutorials">
    <h1 class="heading">Video Tutorials</h1>

    <div class="accordion">
        <div class="tutorial">
            <div class="judul">1. Pendahuluan HTML</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/NBZ9Ro6UKV8?si=T84FKGn-mvH6grNa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">2. Hello World!</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/1NicaVOCXHA?si=oNAlBlOkrb3hXKxP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">3. Code Editor</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/3sLSi9L5nWE?si=_wtlqjGTIfqZQGb9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">4. Tag</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cUWBYzA6M-8?si=Y5nibhzMmA6nVt7j" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">5. Paragraf</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Dl_bIYBc9gM?si=UwESX3dt-UweFZ5A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">6. Heading</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/SMetRBdIh-8?si=RIOY0bYVWaTVshsb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">7. List</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/gLHEoeupIZs?si=yW5hjzbanubts4Er" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">8. Hyperlink</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/QIlBOI-hTuA?si=fj56RjPc_niaXmET" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">9. Image</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/yb_emYhY3Pc?si=eRf696Q4kiqcNAt9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">10. Table</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7-QNafrXigs?si=xE-KNHPYda4Xa12e" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="tutorial">
            <div class="judul">11. Table Merging</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/qs8G2XWf7Yk?si=0HAnqUQUA-aCZYfw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">12. Form</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/LQf_Jj7jbCI?si=WBqI9tebTvtTdq_b" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">13. Form (Lanjutan)</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_CNkLKU-LoE?si=bQBrlwJ5OBWuVqwX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
        $playlist_name = "HTML"; // Ganti dengan nama playlist yang sesuai
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