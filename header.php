<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O nás - Clash of Olomoucká</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link rel="stylesheet" href="gallery.css">
    <title>Galerie</title>
</head>
<html>
    <body>
        <div class="wrapper">
            <header>
                <?php
                include 'header.php';
                ?>
            </header>
            <section id="text">
                <div class="content">
                    <h1>Galerie</h1>
                </div>
                <ad>
                    <?php 
                    include 'ad.php'; 
                    ?>
                </ad>
            </section>
            <div class="container gallery-container">
                <div class="tz-gallery">

                    <div class="row">

                        <div class="col-sm-12 col-md-4">
                            <a class="lightbox" href="https://cdn.oneesports.gg/cdn-data/2023/09/cs2-awp-1024x576.jpg">
                                <img src="https://cdn.oneesports.gg/cdn-data/2023/09/cs2-awp-1024x576.jpg" alt="Bridge">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="https://prosettings.net/cdn-cgi/image/dpr=1%2Cf=auto%2Cfit=cover%2Cgravity=auto%2Cheight=533%2Cq=85%2Cwidth=970/wp-content/uploads/best-cs2-settings-example.jpg">
                                <img src="https://prosettings.net/cdn-cgi/image/dpr=1%2Cf=auto%2Cfit=cover%2Cgravity=auto%2Cheight=533%2Cq=85%2Cwidth=970/wp-content/uploads/best-cs2-settings-example.jpg" alt="Park">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="https://www.pcgamesn.com/wp-content/sites/pcgamesn/2023/09/cs2-premier-mode-explained-featured.jpg">
                                <img src="https://www.pcgamesn.com/wp-content/sites/pcgamesn/2023/09/cs2-premier-mode-explained-featured.jpg" alt="Tunnel">
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <a class="lightbox" href="https://preview.redd.it/eoeqdiaayyxb1.png?auto=webp&s=dceff7e22247abf25dbc16251b259d62e089df6c">
                                <img src="https://preview.redd.it/eoeqdiaayyxb1.png?auto=webp&s=dceff7e22247abf25dbc16251b259d62e089df6c" alt="Traffic">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="https://channellife.co.nz/uploads/story/2014/12/05/Fake_Alert.webp">
                                <img src="https://channellife.co.nz/uploads/story/2014/12/05/Fake_Alert.webp" alt="Coast">
                            </a>
                        </div> 
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="https://prosettings.net/cdn-cgi/image/dpr=1%2Cf=auto%2Cfit=cover%2Cheight=500%2Cq=85%2Cwidth=1000/wp-content/uploads/what-is-overwatch-in-cs2.png">
                                <img src="https://prosettings.net/cdn-cgi/image/dpr=1%2Cf=auto%2Cfit=cover%2Cheight=500%2Cq=85%2Cwidth=1000/wp-content/uploads/what-is-overwatch-in-cs2.png" alt="Rails">
                            </a>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
        <script>
            baguetteBox.run('.tz-gallery');
        </script>
    </body>
</html>