<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontakt</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>
    <p style="background-image: url('img_girl.jpg');"></p>
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
        <section id="contact">
            <div class="content">
                <div id="form">
                    <h1>Kontakt</h1>
                    <br>
                    <form action="" id="contactForm" method="post">
                        <span>Jméno</span>
                        <input type="text" name="name" class="name" placeholder="Vložte jméno" tabindex="1" required />
                        <span>Email</span>
                        <input type="email" name="email" class="email" placeholder="Zadejte vaši emailovou adresu" tabindex="2" required />
                        <span>Třída</span>
                        <input type="text" name="trida" class="trida" placeholder="Zadejte ročník střední školy" tabindex="3" required />
                        <span>Pohlaví</span>
                        <input type="text" name="gender" class="gender" placeholder="Zadejte pohlaví" tabindex="4" required />
                        <span>Obsah zprávy</span>
                        <input type="text" name="obsahzpravy" class="obsahzpravy" placeholder="Zadejte text zprávy" tabindex="5" required />
                        <input type="submit" name="submit" value="Poslat e-mail" class="submit" tabindex="6">
                    </form>
                </div>
            </div>
        </section>
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
    </div>

    <?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require 'vendor/autoload.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $trida = htmlspecialchars($_POST['trida']);
            $gender = htmlspecialchars($_POST['gender']);

            $to = "neco@gmail.com";
            $subject = "clashofolomoucka";
            $message = "Jméno: $name\nEmail: $email\nTřída: $trida\nPohlaví: $gender";

            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'marekgloser007@gmail.com';
                $mail->Password   = 'your_email_password';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;

                $mail->setFrom($email, $name);
                $mail->addAddress($to);

                $mail->isHTML(false);
                $mail->Subject = $subject;
                $mail->Body    = $message;

                $mail->send();
                echo 'Email byl úspěšně odeslán.';
            } catch (Exception $e) {
                echo "Email se nepodařilo odeslat. Chyba: {$mail->ErrorInfo}";
            }
        }
    ?>
</body>
</html>
