<?php include_once("inc_header.php") ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $playlist = "NODE"; // Ganti dengan nama playlist yang sesuai

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
            <div class="judul">1. Node JS Dasar</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/b39Xqf5iyjo?si=XGrVaMxMh9ZpyHfg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">2. Unit Test</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/UNaYui-EG_8?si=yqaQqNp-0FgyBSuU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">3. NPM</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7t7CJwQlmGc?si=NMWxmOWdbs6invoV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">4. Logging</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/PC4mVckhtoQ?si=BOSLNzUO5gFNCKfF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">5. Express JS</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/L7-u0CHm1GI?si=Wj9piIdYJC6Gf4s6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">6. Mustache</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/1HP3gEYbh4Q?si=4ruTLZA6tj2HHnqC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">7. RESTful API</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/6v8JXecArqE?si=xJJHPE-wATpi36fL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
        $playlist_name = "NODE"; // Ganti dengan nama playlist yang sesuai
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