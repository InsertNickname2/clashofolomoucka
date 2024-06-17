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
    <style>
        .with-padding-top {
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <header>
            <?php include 'header.php'; ?>
        </header>
        <ad>
            <?php 
                include 'ad.php'; 
                include 'ad2.php'; 
            ?>
        </ad>
        <section id="about-us">
            <div class="content">
                <h1>O nás</h1>
                <div class="section" id="our-mission">
                    <h2>Naše mise</h2>
                    <p>Naším cílem je společně vymítit démona, který sídlí hluboko v nás tím, že se totálně zmasakrujeme v csku</p>
                </div>
                <div class="section" id="our-history">
                    <h2>Naše historie</h2>
                    <p>Clash of Olomoucká vznikla v roce 2015 jako malá soutěž mezi dvěma školami. Díky nadšení a zapojení studentů se rychle rozrostla a stala se tradiční událostí regionu.</p>
                </div>
                <div class="section" id="our-team">
                    <h2>Náš tým</h2>
                    <p>Náš tým se skládá z učitelů, studentů a dobrovolníků, kteří společně pracují na organizaci všech aktivit a zajišťují jejich hladký průběh.</p>
                    <div class="team-members">
                        <div class="team-member">
                            <img src="clovek2.jpg" alt="Vašek">
                            <h3>Vašek</h3>
                            <p>Pozice: Organizátor</p>
                        </div>
                        <div class="team-member">
                            <img src="clovek1.jpg" alt="Karel">
                            <h3>Karel</h3>
                            <p>Pozice: Koordinátor</p>
                        </div>
                    </div>
                </div>
                <div class="section" id="our-vision">
                    <h2>Naše vize</h2>
                    <p>Do budoucna chceme rozšířit naši působnost i do dalších regionů a přilákat ještě více účastníků, aby naše akce byly nezapomenutelným zážitkem pro všechny zúčastněné.</p>
                </div>
            </div>
        </section>
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
    </div>
</body>
</html>