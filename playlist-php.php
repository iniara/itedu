<?php include_once("inc_header.php") ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $playlist = "PHP"; // Ganti dengan nama playlist yang sesuai

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
            <div class="judul">1. Intro</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/l1W2OwV5rgY?si=0seMw1DRSRic9a-i" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">2. Sejarah dan Karakteristik PHP</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/q3NVC5JxgVI?si=1mUNx4FAvQHVYzTk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">3. Persiapan Lingkungan Pengembangan</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/o8oLQVYlpqw?si=iCyvnzvR2ry-0JC3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">4. Sintaks PHP</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/XTrU0GzMfCk?si=0I1iiL9Zd-cokpI3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">5. Struktur Kendali</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/9gpAJPWD-xI?si=AVmJKb_Y-ETflMLt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">6. Function</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/R5C70w2MOkE?si=2oZs9Dn62P-KveQ_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">7. Array</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/qp1l7A4xDIc?si=CQ9N9qgvn8VNBpoZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">8. Associative Array</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/mNgOuUUp1I0?si=mH6ai-Nap11MAdE_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">9. Get & Post</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/6vG4oO39ivY?si=f1KpkwYqm714R_82" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">10. Database & MySQL</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/fxe6qev-bno?si=g7lzCSWMZHCaD4Sl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="tutorial">
            <div class="judul">11. PHP & MySQL</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/gvkr2V-JULE?si=zNSpduu77vOEnWjd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">12. Insert & Delete</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/L-gKceeb61Q?si=0t_o6F96TqjrbZXD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">13. Update</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/wlJ-UvXucpc?si=OlZzBvkYnJHPFuHy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">14. Searching</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/K_ldbZMOvGA?si=lm3k7zivkeRpntOP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">15. Upload</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Bsdtpx4WUIU?si=lF5Bejsv1JG8OH4e" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">16. Registrasi</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/b2jUL5RDI18?si=TrYF7sRyXhNHtynH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">17. Login</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/2pAApp655es?si=oQcLeDQweOxEOt5I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">18. Session</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/PiYKZ65dkqc?si=PWjlbNhSNIF7WJKj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">19. Cookie (Remember Me)</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/maW4kzHrdKQ?si=QOI3xOZNGTIG_WJ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">20. Pagination</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Q1xJdoHrTj4?si=BKyu-vnnTx2TyWJx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">21. Live Search (Menggunakan AJAX)</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/uND-7A6Hpb8?si=lZrSwSNFHpdK_s72" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">22. Live Search (Menggunakan JQUERY)</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/aS_V-bMATrw?si=uEwWW2barxnvDTA6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">23. PDF Reporting</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/C9Tj7EBrtFo?si=SD4Yv8lLfoVBOuxC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">24. Web Hosting & Domain Name (Gratis)</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7Sz-iHBcXHo?si=tzYPcqPnKrBIT_IF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="tutorial">
            <div class="judul">25. Web Hosting & Domain Name (Berbayar)</div>
            <div class="content">
                <div class="content-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7N8MDUJbrRU?si=pZnUdjImozzX7XyW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
        $playlist_name = "PHP"; // Ganti dengan nama playlist yang sesuai
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