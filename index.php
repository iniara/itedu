<?php include_once("inc_header.php") ?>

<section class="halaman">
    <div class="depan">
        <div class="text-content">
            <h1>WELCOME TO IT EDU</h1>
            <h3>Let's learn together!</h3>
        </div>
        <div class="image-content">
            <img src="<?php echo url_dasar() . "/gambar/" . foto_materi('8'); ?>" />
        </div>
    </div>
</section>

<!--Courses-->
<section class="courses">
    <h1 class="heading">Our Courses</h1>

    <div class="box-container">

        <div class="box">
            <div class="tutor">
                <img src="<?php echo url_dasar() . "/gambar/" . teacher_foto('1') ?>" />
                <div class="info">
                    <h3><?php echo ambil_teacher('7') ?></h3>
                    <p><?php echo ambil_namayoutube('7') ?></p>
                </div>
            </div>
            <div class="thumb">
                <img src="<?php echo url_dasar() . "/gambar/" . foto_materi('1'); ?>" />
            </div>
            <h3 class="title">HTML Tutorial</h3>
            <a href="playlist-html.php" class="inline-btn">view playlist</a>
        </div>

        <div class="box">
            <div class="tutor">
                <img src="<?php echo url_dasar() . "/gambar/" . teacher_foto('1') ?>" />
                <div class="info">
                    <h3><?php echo ambil_teacher('5') ?></h3>
                    <p><?php echo ambil_namayoutube('5') ?></p>
                </div>
            </div>
            <div class="thumb">
                <img src="<?php echo url_dasar() . "/gambar/" . foto_materi('2'); ?>" />
            </div>
            <h3 class="title">CSS Tutorial</h3>
            <a href="playlist-css.php" class="inline-btn">view playlist</a>
        </div>

        <div class="box">
            <div class="tutor">
                <img src="<?php echo url_dasar() . "/gambar/" . teacher_foto('2') ?>" />
                <div class="info">
                    <h3><?php echo ambil_teacher('4') ?></h3>
                    <p><?php echo ambil_namayoutube('4') ?></p>
                </div>
            </div>
            <div class="thumb">
                <img src="<?php echo url_dasar() . "/gambar/" . foto_materi('3'); ?>" />
            </div>
            <h3 class="title">Javascript Tutorial</h3>
            <a href="playlist-js.php" class="inline-btn">view playlist</a>
        </div>

        <div class="box">
            <div class="tutor">
                <img src="<?php echo url_dasar() . "/gambar/" . teacher_foto('3') ?>" />
                <div class="info">
                    <h3><?php echo ambil_teacher('9') ?></h3>
                    <p><?php echo ambil_namayoutube('9') ?></p>
                </div>
            </div>
            <div class="thumb">
                <img src="<?php echo url_dasar() . "/gambar/" . foto_materi('4'); ?>" />
            </div>
            <h3 class="title">React JS Tutorial</h3>
            <a href="playlist-react.php" class="inline-btn">view playlist</a>
        </div>

        <div class="box">
            <div class="tutor">
                <img src="<?php echo url_dasar() . "/gambar/" . teacher_foto('2') ?>" />
                <div class="info">
                    <h3><?php echo ambil_teacher('10') ?></h3>
                    <p><?php echo ambil_namayoutube('10') ?></p>
                </div>
            </div>
            <div class="thumb">
                <img src="<?php echo url_dasar() . "/gambar/" . foto_materi('5'); ?>" />
            </div>
            <h3 class="title">Node JS Tutorial</h3>
            <a href="playlist-node.php" class="inline-btn">view playlist</a>
        </div>

        <div class="box">
            <div class="tutor">
                <img src="<?php echo url_dasar() . "/gambar/" . teacher_foto('1') ?>" />
                <div class="info">
                    <h3><?php echo ambil_teacher('16') ?></h3>
                    <p><?php echo ambil_namayoutube('16') ?></p>
                </div>
            </div>
            <div class="thumb">
                <img src="<?php echo url_dasar() . "/gambar/" . foto_materi('9'); ?>" />
            </div>
            <h3 class="title">PHP Tutorial</h3>
            <a href="playlist-php.php" class="inline-btn">view playlist</a>
        </div>
    </div>
</section>

<script src="js/script.js"></script>
</body>

</html>