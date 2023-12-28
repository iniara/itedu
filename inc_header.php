<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IT EDU</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?php echo url_dasar() ?> /css/style.css" />
</head>

<body>
    <!--header-->
    <header class="header">
        <section class="flex">
            <a href="<?php echo url_dasar() ?>" class="logo">
                IT EDU <i class="fa-solid fa-laptop-code"></i>
            </a>


            <form action="#" method="post" class="search-form">
                <input type="text" name="search_box" required placeholder="Search courses..." maxlength="100" />
                <button type="submit" class="fas fa-search"></button>
            </form>

            <div class="icons">
                <div id="toggle-btn" class="fas fa-sun"></div>
            </div>
        </section>
    </header>
    <!--header-->