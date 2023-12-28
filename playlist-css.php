<?php include_once("inc_header.php") ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $playlist = "CSS"; // Ganti dengan nama playlist yang sesuai

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
            <div class="judul">1. Pendahuluan</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/CleFk3BZB3g?si=rsp3Usr4lo7V1mD9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">2. Anatomi</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/8lXDi2Mxp9c?si=jIbzQonNzyXXfwT2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">3. Penetapan</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/bnnislprJro?si=3Q6BGY5dUNxfXVxJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">4. Font Styling</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/nPHed3_oPvY?si=1nVj402wUUk1c1LN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">5. Text Styling</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/xih8giA7S3Q?si=8srCeNN4NlFPqpnA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">6. Background</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zm-HPYS_ELU?si=AV8yDhm9AztWWaGO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">7. Selector</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/0KLwWyQyMQo?si=fGQ0LaI1VOmsjucU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">8. Pseudo Class</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/G0gYWdIHOug?si=YX45kXR75kqwlrPc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">9. Inheritance</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/kY2FEA3y43E?si=Gs38GH5kbKwYg9y_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">10. Specificity</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/yu74Y1ndd5w?si=oE84DCIHLJ95rcQk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
        $playlist_name = "CSS"; // Ganti dengan nama playlist yang sesuai
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