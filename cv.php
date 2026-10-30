<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Gallery</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body class="gallery-page">

<!-- PAGE TRANSITION -->
<div class="page-transition"></div>

<!-- PARTICLES -->
<div id="particles"></div>

<!-- NAVBAR -->
<nav>

    <div class="logo">FΞBHAL</div>

    <ul class="nav-links">

        <li><a href="index.php">ℍ𝕆𝕄𝔼</a></li>

        <li><a href="tentang.php">𝔸𝔹𝕆𝕌𝕋 𝕄𝔼</a></li>

        <li><a href="skill.php">𝕄𝕐 𝕊𝕂𝕀𝕃𝕃𝕊</a></li>

        <li><a href="kontak.php">ℂ𝕆ℕ𝕋𝔸ℂ𝕋 𝕄𝔼</a></li>

        <li><a href="cv.php">𝕄𝕐 𝔾𝔸𝕃𝕃𝔼ℝ𝕐</a></li>

    </ul>

    <!-- HAMBURGER -->
    <div class="hamburger">

        <span></span>
        <span></span>
        <span></span>

    </div>

</nav>

<!-- KEHIDUPAN -->
<section class="page">

    <h1>𝓟𝓮𝓻𝓳𝓪𝓵𝓪𝓷𝓪𝓷 𝓭𝓪𝓵𝓪𝓶 𝓑𝓲𝓷𝓰𝓴𝓪𝓲</h1>

    <div class="life-container">

        <!-- FOTO 1 -->
        <div class="life-card">

            <img src="image/Image saya (1).png" alt="Foto 1" onclick="openImage(this.src)">

        </div>

        <!-- FOTO 2 -->
        <div class="life-card">

            <img src="image/Image saya (2).png" alt="Foto 2" onclick="openImage(this.src)">

        </div>

        <!-- FOTO 3 -->
        <div class="life-card">

            <img src="image/Image saya (3).png" alt="Foto 3" onclick="openImage(this.src)">

        </div>

        <!-- FOTO 4 -->
        <div class="life-card">

            <img src="image/Image saya (4).png" alt="Foto 4" onclick="openImage(this.src)">

        </div>

        <!-- FOTO 5 -->
        <div class="life-card">

            <img src="image/Image saya (5).png" alt="Foto 5" onclick="openImage(this.src)">

        </div>

        <!-- FOTO 6 -->
        <div class="life-card">

            <img src="image/Image saya (8).jpeg" alt="Foto 6" onclick="openImage(this.src)">

        </div>

    </div>

</section>

<!-- FULL IMAGE VIEW -->

<div class="image-viewer" id="imageViewer">

    <span class="close-btn" onclick="closeImage()">
        &times;
    </span>

    <img id="fullImage">

</div>

<script src="script.js"></script>

<!-- IMAGE SCRIPT -->

<script>

function openImage(src){

    document.getElementById("imageViewer").style.display = "flex";

    document.getElementById("fullImage").src = src;

}

function closeImage(){

    document.getElementById("imageViewer").style.display = "none";

}

</script>

</body>
</html>