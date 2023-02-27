<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Personal Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <header>
        <!-- ///////// NAVBAR \\\\\\\\\\\\ -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top" id="navbar">
            <div class="container-fluid" id="navCont">
                <a class="navbar-brand" href="index.php?page=home">
                    <img class="fotologo" src="public/img/logo.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="index.php?page=home">HOME</a>
                        <a class="nav-link" href="index.php?page=about">ABOUT</a>
                        <a class="nav-link" href="index.php?page=skill">SKILL</a>
                        <a class="nav-link" href="index.php?page=contact">CONTACT</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div id="contents">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'home':
                    include "home.php";
                    break;
                case 'about':
                    include "about.php";
                    break;
                case 'skill':
                    include "skill.php";
                    break;
                case 'contact':
                    include "contact.php";
                    break;
            }
        } else {
            include "home.php";
        }
        ?>

    </div>
    <footer>
        <i class="fa-solid fa-location-dot"></i>&copy Copyright Rizal 2023 | <a style="color: #15bb62;"> Personal Website </a>
    </footer>
    <script src="public/js/bubble.js"></script>
    <script src="public/js/skill.js"></script>
</body>

</html>